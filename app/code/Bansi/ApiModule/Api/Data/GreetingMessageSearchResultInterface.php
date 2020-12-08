<?php
namespace Bansi\ApiModule\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface GreetingMessageSearchResultInterface extends SearchResultsInterface
{
	
    
     /**
     * Get message
     *
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * Get season name
     *
     * @param array $items
     * @return SearchResultsInterface
     */
    public function setItems($items);
    
}