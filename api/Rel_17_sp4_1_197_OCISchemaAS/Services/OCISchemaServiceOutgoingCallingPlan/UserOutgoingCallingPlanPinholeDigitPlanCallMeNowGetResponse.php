<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest.
 */
class UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $useCustomSettings = null;
    protected $userPermissions   = null;

    /**
     * @return UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = (boolean) $useCustomSettings;
    }

    /**
     * 
     */
    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings;
    }

    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for specified digit patterns.
     */
    public function setUserPermissions(OutgoingPinholeDigitPlanDigitPatternCallMeNowPermissions $userPermissions = null)
    {
        $this->userPermissions =  $userPermissions;
    }

    /**
     * Outgoing Pinhole Digit Plan Call Me Now call permissions for specified digit patterns.
     */
    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->getValue();
    }
}
