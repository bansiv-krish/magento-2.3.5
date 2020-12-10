<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Block\Adminhtml\Index\Edit;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class GenericButton
 */
class GenericButton
{
    /**
     * @var Context
     */
    protected $urlBuilder;

    /**
     * @var PageRepositoryInterface
     */
    protected $registry;

    /**
     * @param Context $context
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(
        Context $context,
        Registry $registry
    ) {
        $this->context = $context;
        $this->urlBuilder=$context->getUrlBuilder();
        $this->registry = $registry;
    }

    /**
     * Return CMS page ID
     *
     * @return int|null
     */
    public function getId()
    {
      $message=$this->registry->registry('message');
      return $message ? $message->getId() :null;
    }

    public function getUrl($route = '', $params = []){
        return $this->urlBuilder->getUrl($route, $params);
    }
}
