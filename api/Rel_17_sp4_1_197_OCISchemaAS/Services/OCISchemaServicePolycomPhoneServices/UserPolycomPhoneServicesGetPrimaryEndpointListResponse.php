<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPolycomPhoneServicesGetPrimaryEndpointListRequest.
 *         The column headings for the deviceUserTable are: "Device Level", "Device Name", "Line/Port".
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceUserTable
    ) {
        $this->deviceUserTable = $deviceUserTable;
        $this->args            = func_get_args();
    }

    public function setDeviceUserTable($deviceUserTable)
    {
        $deviceUserTable and $this->deviceUserTable = new core:OCITable($deviceUserTable);
    }

    public function getDeviceUserTable()
    {
        return (!$this->deviceUserTable) ?: $this->deviceUserTable->value();
    }
}
