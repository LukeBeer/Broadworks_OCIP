<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDnGetUtilizationRequest14sp3.
 *         The isActivated element is only included when the DN is
 *   assigned to a user.
 */
class SystemDnGetUtilizationResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId=null,
             $userId=null,
             $userType=null,
             $isGroupCallingLineId,
             $isActivated=null
    ) {
        $this->serviceProviderId    = new ServiceProviderId($serviceProviderId);
        $this->groupId              = new GroupId($groupId);
        $this->userId               = new UserId($userId);
        $this->userType             = new UserType($userType);
        $this->isGroupCallingLineId = $isGroupCallingLineId;
        $this->isActivated          = $isActivated;
        $this->args                 = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setUserType($userType)
    {
        $userType and $this->userType = new UserType($userType);
    }

    public function getUserType()
    {
        return (!$this->userType) ?: $this->userType->value();
    }

    public function setIsGroupCallingLineId($isGroupCallingLineId)
    {
        $isGroupCallingLineId and $this->isGroupCallingLineId = new xs:boolean($isGroupCallingLineId);
    }

    public function getIsGroupCallingLineId()
    {
        return (!$this->isGroupCallingLineId) ?: $this->isGroupCallingLineId->value();
    }

    public function setIsActivated($isActivated)
    {
        $isActivated and $this->isActivated = new xs:boolean($isActivated);
    }

    public function getIsActivated()
    {
        return (!$this->isActivated) ?: $this->isActivated->value();
    }
}
