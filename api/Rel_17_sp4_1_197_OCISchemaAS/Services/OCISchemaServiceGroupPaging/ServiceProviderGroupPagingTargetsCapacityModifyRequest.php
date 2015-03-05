<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the maximum number of target users per paging group configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderGroupPagingTargetsCapacityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $maximumTargetUsers=null
    ) {
        $this->serviceProviderId  = new ServiceProviderId($serviceProviderId);
        $this->maximumTargetUsers = $maximumTargetUsers;
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

    public function setMaximumTargetUsers($maximumTargetUsers)
    {
        $maximumTargetUsers and $this->maximumTargetUsers = new GroupPagingMaxTargetCapacity($maximumTargetUsers);
    }

    public function getMaximumTargetUsers()
    {
        return (!$this->maximumTargetUsers) ?: $this->maximumTargetUsers->value();
    }
}
