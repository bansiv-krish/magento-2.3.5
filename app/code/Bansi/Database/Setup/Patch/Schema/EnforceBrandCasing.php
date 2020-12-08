<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Database\Setup\Patch\Schema;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Bansi\Database\Setup\StoredRoutineProvider;
use Magento\Framework\DB\Ddl\TriggerFactory;
use Magento\Framework\DB\Ddl\Trigger;
/**
 * @codeCoverageIgnore
 */
class EnforceBrandCasing implements SchemaPatchInterface
{
   /**
     * @var SchemaSetupInterface
     */
    private $schemaSetup;
    private $storedRoutineProvider;

    /**
     * EnableSegmentation constructor.
     *
     * @param SchemaSetupInterface $schemaSetup
     */
    public function __construct(
        SchemaSetupInterface $schemaSetup,
        StoredRoutineProvider $storedRoutineProvider,
        TriggerFactory $triggerfactory
    ) {
        $this->schemaSetup = $schemaSetup;
        $this->storedRoutineProvider=$storedRoutineProvider;
        $this->triggerfactory=$triggerfactory;
    }
    /**
     * Get array of patches that have to be executed prior to this.
     *
     * Example of implementation:
     *
     * [
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch1::class,
     *      \Vendor_Name\Module_Name\Setup\Patch\Patch2::class
     * ]
     *
     * @return string[]
     */
    public static function getDependencies(){
        return [];
    }
   /**
     * Get aliases (previous names) for the patch.
     *
     * @return string[]
     */
    public function getAliases(){
        return [];
    }

    /**
     * Run code inside patch
     * If code fails, patch must be reverted, in case when we are speaking about schema - then under revert
     * means run PatchInterface::revert()
     *
     * If we speak about data, under revert means: $transaction->rollback()
     *
     * @return $this
     */
    public function apply(){

        foreach ($this->storedRoutineProvider->getStoredfunctionsql() as $sql) {
            strpos(rtrim($sql,'; \n\t'),';')!=false ?
           $this->schemaSetup->getConnection()->multiQuery($sql):
           $this->schemaSetup->getConnection()->query($sql);
        }
        $this->createTriggertoEnforceBrandCasing();
    }

    private function createTriggertoEnforceBrandCasing():void
    {
      
       $db=$this->schemaSetup->getConnection();
       $tableName=$this->schemaSetup->getTable('brand_example');
       foreach ([Trigger::EVENT_INSERT,Trigger::EVENT_UPDATE] as $event) {
       
       $trigger= $this->triggerfactory->create();
       $triggerName=$db->getTriggerName($tableName,Trigger::TIME_BEFORE,$event);
       $trigger->setName($triggerName);
       $trigger->setTime(Trigger::TIME_BEFORE);
       $trigger->setEvent($event);
       $trigger->setTable($tableName);
       $trigger->addStatement("SET 
        NEW.name =UCWORDS(NEW.name),
        NEW.description=CONCAT(UCFIRST_WORD(NEW.description),' ', BUT_FIRST_WORD(NEW.description))");
       $db->dropTrigger($triggerName);
       $db->createTrigger($trigger);
       }
    }
}
