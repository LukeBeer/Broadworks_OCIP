<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the distinctive ringing configuration values for route point.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointDistinctiveRingingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $enableDistinctiveRinging=null,
             $distinctiveRingingRingPattern=null,
             $distinctiveRingingForceDeliveryRingPattern=null
    ) {
        $this->serviceUserId                              = new UserId($serviceUserId);
        $this->enableDistinctiveRinging                   = $enableDistinctiveRinging;
        $this->distinctiveRingingRingPattern              = new RingPattern($distinctiveRingingRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern = new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->args                                       = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableDistinctiveRinging($enableDistinctiveRinging)
    {
        $enableDistinctiveRinging and $this->enableDistinctiveRinging = new xs:boolean($enableDistinctiveRinging);
    }

    public function getEnableDistinctiveRinging()
    {
        return (!$this->enableDistinctiveRinging) ?: $this->enableDistinctiveRinging->value();
    }

    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern)
    {
        $distinctiveRingingRingPattern and $this->distinctiveRingingRingPattern = new RingPattern($distinctiveRingingRingPattern);
    }

    public function getDistinctiveRingingRingPattern()
    {
        return (!$this->distinctiveRingingRingPattern) ?: $this->distinctiveRingingRingPattern->value();
    }

    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern)
    {
        $distinctiveRingingForceDeliveryRingPattern and $this->distinctiveRingingForceDeliveryRingPattern = new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->value();
    }
}
