<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an existing Virtual On-Net user from a Group.
 *         The response is either a 
 *         GroupVirtualOnNetEnterpriseExtensionsGetUserResponse
 *         or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $phoneNumber
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->groupId           = new GroupId($groupId);
        $this->phoneNumber       = new DN($phoneNumber);
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

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }
}
