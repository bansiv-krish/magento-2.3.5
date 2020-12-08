<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Database\Setup\Patch\Data;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
/**
 * @codeCoverageIgnore
 */
class CreateDefaultBrands implements DataPatchInterface
{
private $moduleDataSetup;
 public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
     
    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }
   /**
     * Get aliases (previous names) for the patch.
     *
     * @return string[]
     */
    public function getAliases()
    {
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
    public function apply()
    {
      $brands=[
        ['name'=>'adidas','description'=>'test','price'=>"1200",'is_enabled'=>1],
        ['name'=>'sparks','description'=>'test  dfdrtr','price'=>"130",'is_enabled'=>1],
        ['name'=>'puma','description'=>'testdd','price'=>"10",'is_enabled'=>0],
      ];
      $records=array_map(function($brand){
        return array_merge($brand,['website_id'=>1]);
      }, $brands);
      $this->moduleDataSetup->getConnection()->insertMultiple('brand_example1',$records);
      return $this;
    }
}
