<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanRedirectedPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanRedirectedDepartmentPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupOutgoingCallingPlanRedirectedGetListRequest.
 */
class GroupOutgoingCallingPlanRedirectedGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupPermissions,
             $departmentPermissions=null
    ) {
        $this->groupPermissions      = $groupPermissions;
        $this->departmentPermissions = $departmentPermissions;
        $this->args                  = func_get_args();
    }

    public function setGroupPermissions($groupPermissions)
    {
        $groupPermissions and $this->groupPermissions = new OutgoingCallingPlanRedirectedPermissions($groupPermissions);
    }

    public function getGroupPermissions()
    {
        return (!$this->groupPermissions) ?: $this->groupPermissions->value();
    }

    public function setDepartmentPermissions($departmentPermissions)
    {
        $departmentPermissions and $this->departmentPermissions = new OutgoingCallingPlanRedirectedDepartmentPermissions($departmentPermissions);
    }

    public function getDepartmentPermissions()
    {
        return (!$this->departmentPermissions) ?: $this->departmentPermissions->value();
    }
}
