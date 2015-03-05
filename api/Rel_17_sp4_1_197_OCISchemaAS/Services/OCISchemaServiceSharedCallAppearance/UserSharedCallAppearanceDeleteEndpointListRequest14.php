<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Disassociate one or more of a user's Shared Call Appearance endpoints.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceDeleteEndpointListRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             AccessDeviceEndpointKey $accessDeviceEndpoint=null
    ) {
        $this->userId               = new UserId($userId);
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->args                 = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $accessDeviceEndpoint and $this->accessDeviceEndpoint = new AccessDeviceEndpointKey($accessDeviceEndpoint);
    }

    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->value();
    }
}
