<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a device profile file.
 *         The response is either SystemAccessDeviceFileGetResponse16sp1 or ErrorResponse.
 */
class SystemAccessDeviceFileGetRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceName,
             $fileFormat
    ) {
        $this->deviceName = new AccessDeviceName($deviceName);
        $this->fileFormat = new DeviceManagementFileFormat($fileFormat);
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

    public function setFileFormat($fileFormat)
    {
        $fileFormat and $this->fileFormat = new DeviceManagementFileFormat($fileFormat);
    }

    public function getFileFormat()
    {
        return (!$this->fileFormat) ?: $this->fileFormat->value();
    }
}
