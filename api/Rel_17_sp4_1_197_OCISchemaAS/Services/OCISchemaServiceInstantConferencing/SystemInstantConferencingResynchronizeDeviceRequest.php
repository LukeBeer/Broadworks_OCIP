<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * This command is used to resynchronize all the conference bridges and
 *         administrators defined on the specified device, pushing data from the
 *         Application Server to the Conferencing Server.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingResynchronizeDeviceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceName
    ) {
        $this->deviceName = new AccessDeviceName($deviceName);
        $this->args       = func_get_args();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }
}
