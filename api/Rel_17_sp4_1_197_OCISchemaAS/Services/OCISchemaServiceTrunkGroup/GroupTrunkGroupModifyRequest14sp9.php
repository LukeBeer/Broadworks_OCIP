<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the maximum and bursting maximum permissible active Trunk Group calls for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupModifyRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $maxActiveCalls=null,
             UnboundedNonNegativeInt $burstingMaxActiveCalls=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->groupId                = new GroupId($groupId);
        $this->maxActiveCalls         = $maxActiveCalls;
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        $this->args                   = func_get_args();
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

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new xs:int($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $burstingMaxActiveCalls and $this->burstingMaxActiveCalls = new UnboundedNonNegativeInt($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }
}
