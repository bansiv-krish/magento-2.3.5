<?php
namespace Bansi\ApiModule\Model;


use Bansi\ApiModule\Api\GreetingMessageRepositoryInterface;
use Bansi\ApiModule\Model\ResourceModel\GreetingMessage\CollectionFactory;
use Bansi\ApiModule\Model\GreetingMessageFactory;
use Bansi\ApiModule\Model\ResourceModel\GreetingMessage;
use Bansi\ApiModule\Api\Data\GreetingMessageSearchResultInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class GreetingMessagenew implements GreetingMessageRepositoryInterface
{
  	protected $collectionFactory;
  	private $greetingMessageFactory;
  	private $greetingMessage;
  	private $searchResultInterface;
  	private $collectionProcesor;
    public function __construct(CollectionFactory $collectionFactory,GreetingMessageFactory $greetingMessageFactory,GreetingMessage $greetingMessage,GreetingMessageSearchResultInterfaceFactory $searchResultInterface,CollectionProcessor $collectionProcesor)
    {
        $this->collectionFactory=$collectionFactory;
        $this->greetingMessageFactory=$greetingMessageFactory;
        $this->greetingMessage=$greetingMessage;
        $this->searchResultInterface=$searchResultInterface;
        $this->collectionProcesor=$collectionProcesor;
    }
    public function getList(){
    return  $this->collectionFactory->create()->getItems();
   
    }

     public function getGreetingMessage($id){
     	$greetingmessage=$this->greetingMessageFactory->create();
     	return $greetingmessage->load($id);
     }
	/**
     * Returns greeting message to user
     *
     * @param \Bansi\ApiModule\Api\Data\GreetingMessageInterface $message
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageInterface
     */
     public function saveGreetingMessage(\Bansi\ApiModule\Api\Data\GreetingMessageInterface $message)
     {
     	if($message->getId()==null){
     		$this->greetingMessage->save($message);
     		return $message;
     	}else{
     		$newMessage=$this->greetingMessageFactory->create()->load($message->getId());
     		foreach ($message->getData() as $key => $value) {
     			$newMessage->setData($key, $value);
     		}
     		$this->greetingMessage->save($newMessage);
     		return $newMessage;
     	}
     }
     public function deleteById($id){
     	$greetingmessage=$this->greetingMessageFactory->create()->load($id);
     	$greetingmessage->delete();
     }
     /**
     * Returns greeting message to user
     *
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageSearchResultInterface
     */
   public function getSearchResultsList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria){
   	$collection=$this->greetingMessageFactory->create()->getCollection();
   	$this->collectionProcesor->process($searchCriteria,$collection);
   	$searchResults=$this->searchResultInterface->create();
   	$searchResults->setSearchCriteria($searchCriteria);
   	$searchResults->setItems($collection->getData());
   	$searchResults->setTotalCount($collection->getSize());
   	return $searchResults;
   } 
}