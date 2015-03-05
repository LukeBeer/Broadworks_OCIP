<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingFamily; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingReplacementNumberList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingFamilyModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $doNotRingIfOnCall=null,
             SimultaneousRingReplacementNumberList $simultaneousRingNumberList=null,
             CriteriaActivation $criteriaActivation=null
    ) {
        $this->userId                     = new UserId($userId);
        $this->isActive                   = $isActive;
        $this->doNotRingIfOnCall          = $doNotRingIfOnCall;
        $this->simultaneousRingNumberList = $simultaneousRingNumberList;
        $this->criteriaActivation         = $criteriaActivation;
        $this->args                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $doNotRingIfOnCall and $this->doNotRingIfOnCall = new xs:boolean($doNotRingIfOnCall);
    }

    public function getDoNotRingIfOnCall()
    {
        return (!$this->doNotRingIfOnCall) ?: $this->doNotRingIfOnCall->value();
    }

    public function setSimultaneousRingNumberList($simultaneousRingNumberList)
    {
        $simultaneousRingNumberList and $this->simultaneousRingNumberList = new SimultaneousRingReplacementNumberList($simultaneousRingNumberList);
    }

    public function getSimultaneousRingNumberList()
    {
        return (!$this->simultaneousRingNumberList) ?: $this->simultaneousRingNumberList->value();
    }

    public function setCriteriaActivation($criteriaActivation)
    {
        $criteriaActivation and $this->criteriaActivation = new CriteriaActivation($criteriaActivation);
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}
