<?php

namespace SlmQueueSqs\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Simple queue options
 */
class SqsQueueOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $queueUrl;

    /**
     * Required for FIFO queues
     *
     * @var string
     */
    protected $messageGroupId = false;

    /**
     * Set the queue URL
     *
     * @param string $queueUrl
     */
    public function setQueueUrl($queueUrl)
    {
        $this->queueUrl = (string) $queueUrl;
    }

    /**
     * Get the queue URL
     *
     * @return string
     */
    public function getQueueUrl()
    {
        return $this->queueUrl;
    }

    /**
     * Sets the message group id, required by FIFO queues
     *
     * @param string $messageGroupId
     */
    public function setMessageGroupId($messageGroupId)
    {
        $this->messageGroupId = (string) $messageGroupId;
    }

    /**
     * Get the message group id, required by FIFO queues
     *
     * @return string
     */
    public function getMessageGroupId()
    {
        return $this->messageGroupId;
    }
}
