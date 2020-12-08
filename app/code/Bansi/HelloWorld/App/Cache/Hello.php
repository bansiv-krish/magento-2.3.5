<?php

namespace Bansi\HelloWorld\App\Cache;

use Magento\Framework\Config\CacheInterface;

class Hello extends \Magento\Framework\Cache\Frontend\Decorator\TagScope implements CacheInterface{
      const TYPE_IDENTIFIER = 'hello';

      const CACHE_TAG = 'HElLO';

      protected $cacheFrontendPool;
      public function __construct(
        \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
    ) {
        parent::__construct($cacheFrontendPool->get(self::TYPE_IDENTIFIER), self::CACHE_TAG);
        
    }
}
