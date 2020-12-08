<?php
namespace Bansi\ApiModule\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;

interface GreetingMessageInterface extends ExtensibleDataInterface
{
	const MESSAGE='message';
	const ID='greeting_id';
	const SEASON='season';
   /**
     * Retrieve  id.
     *
     * @return int|null
     */
    public function getId();
     /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Get season name
     *
     * @return string|null
     */
    public function getSeason();
    /**
     * Set  id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
     /**
     * Set  message.
     *
     * @param string message
     * @return $this
     */
    public function setMessage($message);
     /**
     * Set  season.
     *
     * @param string season
     * @return $this
     */
    public function setSeason($season);
     /**
     *
     * @return \Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface|null
     */
    public function getExtensionAttributes();
    /**
     *
     *@param \Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface $messageExtension
     * @return $this
     */
    public function setExtensionAttributes(\Bansi\ApiModule\Api\Data\GreetingMessageExtensionInterface $messageExtension);
}