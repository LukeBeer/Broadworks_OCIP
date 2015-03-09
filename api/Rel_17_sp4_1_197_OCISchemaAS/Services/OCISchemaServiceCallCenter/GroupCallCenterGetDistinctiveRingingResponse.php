<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterGetDistinctiveRingingResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetDistinctiveRingingRequest.
 */
class GroupCallCenterGetDistinctiveRingingResponse extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $distinctiveRingingCallCenterCalls          = null;
    protected $distinctiveRingingRingPatternForCallCenter = null;
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * @return GroupCallCenterGetDistinctiveRingingResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls = null)
    {
        $this->distinctiveRingingCallCenterCalls = (boolean) $distinctiveRingingCallCenterCalls;
    }

    /**
     * 
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return (!$this->distinctiveRingingCallCenterCalls) ?: $this->distinctiveRingingCallCenterCalls;
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return (!$this->distinctiveRingingRingPatternForCallCenter) ?: $this->distinctiveRingingRingPatternForCallCenter->getValue();
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->getValue();
    }
}
