<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserCallingLineIdSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSubscriberGetCallProcessingParametersResponse14sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest14sp3.
 */
class SystemSubscriberGetCallProcessingParametersResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $userCallingLineIdSelection             = null;
    protected $isExtendedCallingLineIdActive          = null;
    protected $isRingTimeOutActive                    = null;
    protected $ringTimeoutSeconds                     = null;
    protected $allowEmergencyRemoteOfficeOriginations = null;

    /**
     * @return SystemSubscriberGetCallProcessingParametersResponse14sp3
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * System User Calling Line Id Options.
     */
    public function setUserCallingLineIdSelection($userCallingLineIdSelection = null)
    {
        $this->userCallingLineIdSelection = ($userCallingLineIdSelection InstanceOf SystemUserCallingLineIdSelection)
             ? $userCallingLineIdSelection
             : new SystemUserCallingLineIdSelection($userCallingLineIdSelection);
    }

    /**
     * System User Calling Line Id Options.
     */
    public function getUserCallingLineIdSelection()
    {
        return (!$this->userCallingLineIdSelection) ?: $this->userCallingLineIdSelection->getValue();
    }

    /**
     * 
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive = null)
    {
        $this->isExtendedCallingLineIdActive = (boolean) $isExtendedCallingLineIdActive;
    }

    /**
     * 
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return (!$this->isExtendedCallingLineIdActive) ?: $this->isExtendedCallingLineIdActive;
    }

    /**
     * 
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive = null)
    {
        $this->isRingTimeOutActive = (boolean) $isRingTimeOutActive;
    }

    /**
     * 
     */
    public function getIsRingTimeOutActive()
    {
        return (!$this->isRingTimeOutActive) ?: $this->isRingTimeOutActive;
    }

    /**
     * Ring timeout for a user.
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
        $this->ringTimeoutSeconds = ($ringTimeoutSeconds InstanceOf SystemUserRingTimeoutSeconds)
             ? $ringTimeoutSeconds
             : new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
    }

    /**
     * Ring timeout for a user.
     */
    public function getRingTimeoutSeconds()
    {
        return (!$this->ringTimeoutSeconds) ?: $this->ringTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations = null)
    {
        $this->allowEmergencyRemoteOfficeOriginations = (boolean) $allowEmergencyRemoteOfficeOriginations;
    }

    /**
     * 
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return (!$this->allowEmergencyRemoteOfficeOriginations) ?: $this->allowEmergencyRemoteOfficeOriginations;
    }
}
