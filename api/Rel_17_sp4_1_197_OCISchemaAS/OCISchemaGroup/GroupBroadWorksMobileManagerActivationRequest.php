<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Activates or Deactivates the BroadWorks Mobile Manager.
 *         The deactivationReason is required when isActive is set to false. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerActivationRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $isActive,
             $deactivationReason=null
    ) {
        $this->serviceProviderId  = new ServiceProviderId($serviceProviderId);
        $this->groupId            = new GroupId($groupId);
        $this->isActive           = $isActive;
        $this->deactivationReason = new BroadWorksMobileManagerDeactivationReason($deactivationReason);
        $this->args               = func_get_args();
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

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDeactivationReason($deactivationReason)
    {
        $deactivationReason and $this->deactivationReason = new BroadWorksMobileManagerDeactivationReason($deactivationReason);
    }

    public function getDeactivationReason()
    {
        return (!$this->deactivationReason) ?: $this->deactivationReason->value();
    }
}
