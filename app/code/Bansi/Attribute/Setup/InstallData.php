<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Attribute\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    private $eavSetupFactory;

  public function __construct(EavSetupFactory $eavSetupFactory)
  {
    $this->eavSetupFactory = $eavSetupFactory;
  }
  
  public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
  {
    $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
    $eavSetup->addAttribute(
      \Magento\Catalog\Model\Product::ENTITY,
      'sample_attribute',
      [
        'type' => 'int',
        'backend' => \Bansi\Attribute\Model\Config\Validation::Class,
        'frontend' => '',
        'label' => 'Sample Atrribute',
        'input' => 'text',
        'class' => '',
        'source' => '',
        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
        'visible' => true,
        'required' => true,
        'user_defined' => false,
        'default' => '',
        'searchable' => false,
        'filterable' => false,
        'comparable' => false,
        'visible_on_front' => false,
        'used_in_product_listing' => true,
        'unique' => false,
        'apply_to' => ''
      ]
    );
    ///add select attribute///
     $eavSetup->addAttribute(
      \Magento\Catalog\Model\Product::ENTITY,
      'member_type',
      [
      	'group' => 'Content',
        'type' => 'text',
        'backend' => '',
        'frontend' => '',
        'label' => 'Sample Atrribute',
        'input' => 'select',
        'class' => '',
        'source' => '',
        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
        'visible' => true,
        'required' => true,
        'user_defined' => false,
        'default' => '',
        'searchable' => false,
        'filterable' => false,
        'comparable' => false,
        'visible_on_front' => false,
        'used_in_product_listing' => true,
        'unique' => false,
        'apply_to' => '',
        'source'=>\Bansi\Attribute\Model\Config\Options::class
      ]
    );
  }
}
