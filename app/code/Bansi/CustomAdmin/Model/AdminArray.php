<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Model;
use Magento\Framework\Option\ArrayInterface;
/**
 * Catalog index page controller.
 */
class AdminArray implements ArrayInterface
{
	
    
    
    public function toOptionArray()
    {
    
    return [['value' => 1, 'label' => __('First Option')], ['value' => 0, 'label' => __('Second Option')],
   ['value' => 2, 'label' => __('Third Option')]];
    }	
}
