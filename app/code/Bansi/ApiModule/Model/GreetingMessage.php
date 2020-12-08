<?php


namespace Bansi\ApiModule\Model;


use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\AbstractExtensibleModel;
use Bansi\ApiModule\Model\ResourceModel\GreetingMessage as GreetingMessageResource;
use Bansi\ApiModule\Api\Data\GreetingMessageInterface;
/**
 * Resource model for category entity
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class GreetingMessage extends AbstractExtensibleModel implements GreetingMessageInterface
{
  	protected function _construct()
    {
        $this->_init(GreetingMessageResource::class);
    }
      /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(){
    	return $this->getData(GreetingMessageInterface::MESSAGE);
    }
    /**
     * Get season name
     *
     * @return string|null
     */
    public function getSeason(){
    	return $this->getData(GreetingMessageInterface::SEASON);
    }
    /**
     * Retrieve  id.
     *
     * @return int|null
     */
     public function getId(){
    return $this->getData(GreetingMessageInterface::ID);
    }
     /**
     * Set  id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id){
    	 return $this->setData(GreetingMessageInterface::ID,$id);
    }
     /**
     * Set  message.
     *
     * @param string message
     * @return $this
     */
    public function setMessage($message){
    	 return $this->setData(GreetingMessageInterface::MESSAGE,$message);
    }
     /**
     * Set  season.
     *
     * @param string season
     * @return $this
     */
    public function setSeason($season){
    	 return $this->setData(GreetingMessageInterface::SEASON,$season);
    }
     /**
     *
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface|null
     */
    public function getExtensionAttributes(){
        return $this->_getExtensionAttributes();
    }
    /**
     *
     *@param \Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface $messageExtension
     * @return $this
     */
    public function setExtensionAttributes(\Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface $messageExtension){
        return $this->_setExtensionAttributes($messageExtension);
    }
}