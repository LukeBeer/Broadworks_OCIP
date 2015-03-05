<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupServiceAuthorization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserServiceAuthorization;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests to change the service provider's service authorization status.
 *         The boolean flags are used to authorize or unauthorize services.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServiceModifyAuthorizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             GroupServiceAuthorization $groupServiceAuthorization=null,
             UserServiceAuthorization $userServiceAuthorization=null
    ) {
        $this->serviceProviderId         = new ServiceProviderId($serviceProviderId);
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        $this->userServiceAuthorization  = $userServiceAuthorization;
        $this->args                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupServiceAuthorization($groupServiceAuthorization)
    {
        $groupServiceAuthorization and $this->groupServiceAuthorization = new GroupServiceAuthorization($groupServiceAuthorization);
    }

    public function getGroupServiceAuthorization()
    {
        return (!$this->groupServiceAuthorization) ?: $this->groupServiceAuthorization->value();
    }

    public function setUserServiceAuthorization($userServiceAuthorization)
    {
        $userServiceAuthorization and $this->userServiceAuthorization = new UserServiceAuthorization($userServiceAuthorization);
    }

    public function getUserServiceAuthorization()
    {
        return (!$this->userServiceAuthorization) ?: $this->userServiceAuthorization->value();
    }
}
