<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterQueueStatusNotificationGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterQueueStatusNotificationGetRequest.
 *         The response contains the call center status configuration information.
 */
class GroupCallCenterQueueStatusNotificationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $enableQueueStatusNotification = null;
    protected $enableQueueDepthThreshold     = null;
    protected $enableWaitingTimeThreshold    = null;
    protected $numberOfCallsThreshold        = null;
    protected $waitingTimeOfCallsThreshold   = null;

    /**
     * @return GroupCallCenterQueueStatusNotificationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableQueueStatusNotification($enableQueueStatusNotification = null)
    {
        $this->enableQueueStatusNotification = (boolean) $enableQueueStatusNotification;
    }

    /**
     * 
     */
    public function getEnableQueueStatusNotification()
    {
        return (!$this->enableQueueStatusNotification) ?: $this->enableQueueStatusNotification;
    }

    /**
     * 
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold = null)
    {
        $this->enableQueueDepthThreshold = (boolean) $enableQueueDepthThreshold;
    }

    /**
     * 
     */
    public function getEnableQueueDepthThreshold()
    {
        return (!$this->enableQueueDepthThreshold) ?: $this->enableQueueDepthThreshold;
    }

    /**
     * 
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold = null)
    {
        $this->enableWaitingTimeThreshold = (boolean) $enableWaitingTimeThreshold;
    }

    /**
     * 
     */
    public function getEnableWaitingTimeThreshold()
    {
        return (!$this->enableWaitingTimeThreshold) ?: $this->enableWaitingTimeThreshold;
    }

    /**
     * Number of calls in queue before notification to agents devices.
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
    }

    /**
     * Number of calls in queue before notification to agents devices.
     */
    public function getNumberOfCallsThreshold()
    {
        return (!$this->numberOfCallsThreshold) ?: $this->numberOfCallsThreshold->getValue();
    }

    /**
     * Waiting time for a given call before notification to agents devices.
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
    }

    /**
     * Waiting time for a given call before notification to agents devices.
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return (!$this->waitingTimeOfCallsThreshold) ?: $this->waitingTimeOfCallsThreshold->getValue();
    }
}
