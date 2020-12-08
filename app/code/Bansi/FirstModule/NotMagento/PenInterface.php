<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\NotMagento;



/**
 * Catalog index page controller.
 */
interface PenInterface 
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function getType();
   
}
