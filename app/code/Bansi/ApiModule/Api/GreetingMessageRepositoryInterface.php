<?php
namespace Bansi\ApiModule\Api;

interface GreetingMessageRepositoryInterface
{
	/**
     * Returns greeting message to user
     *
     * @api
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageInterface[]
     */
   public function getList(); 
   /**
     * Returns greeting message to user
     *
     * @api
     * @param int $id
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageInterface
     */
   public function getGreetingMessage($id); 

   /**
     * Returns greeting message to user
     *
     * @api
     * @param \Bansi\ApiModule\Api\Data\GreetingMessageInterface $message
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageInterface
     */
   public function saveGreetingMessage(\Bansi\ApiModule\Api\Data\GreetingMessageInterface $message);
   /**
     * Returns greeting message to user
     *
     * @api
     * @param int $id
     * @return void
     */
   public function deleteById($id);
   /**
     * Returns greeting message to user
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageSearchResultInterface
     */
   public function getSearchResultsList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria); 
}