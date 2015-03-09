<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterAgentUnavailableCodeSettingsGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallCenterAgentUnavailableCodeSettingsGetRequest.
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                            = __CLASS__;
    protected $enableAgentUnavailableCodes                     = null;
    protected $defaultAgentUnavailableCodeOnDND                = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls      = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces = null;
    protected $forceUseOfAgentUnavailableCodes                 = null;
    protected $defaultAgentUnavailableCode                     = null;

    /**
     * @return GroupCallCenterAgentUnavailableCodeSettingsGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        $this->enableAgentUnavailableCodes = (boolean) $enableAgentUnavailableCodes;
    }

    /**
     * 
     */
    public function getEnableAgentUnavailableCodes()
    {
        return (!$this->enableAgentUnavailableCodes) ?: $this->enableAgentUnavailableCodes;
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return (!$this->defaultAgentUnavailableCodeOnDND) ?: $this->defaultAgentUnavailableCodeOnDND->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return (!$this->defaultAgentUnavailableCodeOnPersonalCalls) ?: $this->defaultAgentUnavailableCodeOnPersonalCalls->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return (!$this->defaultAgentUnavailableCodeOnConsecutiveBounces) ?: $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        $this->forceUseOfAgentUnavailableCodes = (boolean) $forceUseOfAgentUnavailableCodes;
    }

    /**
     * 
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return (!$this->forceUseOfAgentUnavailableCodes) ?: $this->forceUseOfAgentUnavailableCodes;
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getDefaultAgentUnavailableCode()
    {
        return (!$this->defaultAgentUnavailableCode) ?: $this->defaultAgentUnavailableCode->getValue();
    }
}
