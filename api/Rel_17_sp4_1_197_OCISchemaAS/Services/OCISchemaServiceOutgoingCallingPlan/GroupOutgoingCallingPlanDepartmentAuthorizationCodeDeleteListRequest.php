<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanAuthorizationCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a list of authorization codes from the group's default or a department. When department is not
 *         specified, it is for the group default.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             DepartmentKey $departmentKey=null,
             $code
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->groupId           = new GroupId($groupId);
        $this->departmentKey     = $departmentKey;
        $this->code              = new OutgoingCallingPlanAuthorizationCode($code);
        $this->args              = func_get_args();
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

    public function setDepartmentKey($departmentKey)
    {
        $departmentKey and $this->departmentKey = new DepartmentKey($departmentKey);
    }

    public function getDepartmentKey()
    {
        return (!$this->departmentKey) ?: $this->departmentKey->value();
    }

    public function setCode($code)
    {
        $code and $this->code = new OutgoingCallingPlanAuthorizationCode($code);
    }

    public function getCode()
    {
        return (!$this->code) ?: $this->code->value();
    }
}
