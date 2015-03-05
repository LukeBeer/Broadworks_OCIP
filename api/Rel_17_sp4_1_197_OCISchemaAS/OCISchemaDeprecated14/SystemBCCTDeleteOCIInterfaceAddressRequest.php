<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete an OCI entry in the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBCCTDeleteOCIInterfaceAddressRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $interfaceNetAddress
    ) {
        $this->interfaceNetAddress = new NetAddress($interfaceNetAddress);
        $this->args                = func_get_args();
    }

    public function setInterfaceNetAddress($interfaceNetAddress)
    {
        $interfaceNetAddress and $this->interfaceNetAddress = new NetAddress($interfaceNetAddress);
    }

    public function getInterfaceNetAddress()
    {
        return (!$this->interfaceNetAddress) ?: $this->interfaceNetAddress->value();
    }
}
