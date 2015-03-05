<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddressExtended;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ChargingFunctionElementServerType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ChargingFunctionElementServerDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $address,
             $isNetAddressExtended,
             $type,
             $description=null
    ) {
        $this->address              = $address;
        $this->isNetAddressExtended = $isNetAddressExtended;
        $this->type                 = $type;
        $this->description          = $description;
        $this->args                 = func_get_args();
    }

    public function setAddress($address)
    {
        $address and $this->address = new NetAddressExtended($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setIsNetAddressExtended($isNetAddressExtended)
    {
        $isNetAddressExtended and $this->isNetAddressExtended = new xs:boolean($isNetAddressExtended);
    }

    public function getIsNetAddressExtended()
    {
        return (!$this->isNetAddressExtended) ?: $this->isNetAddressExtended->value();
    }

    public function setType($type)
    {
        $type and $this->type = new ChargingFunctionElementServerType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new ChargingFunctionElementServerDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
