<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPACLTransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkACLEntryDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an entry from the SIP access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPModifyACLEntryRequest14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $netAddress,
             $transportProtocol=null,
             $description=null
    ) {
        $this->netAddress        = new IPAddress($netAddress);
        $this->transportProtocol = $transportProtocol;
        $this->description       = $description;
        $this->args              = func_get_args();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new IPAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setTransportProtocol($transportProtocol)
    {
        $transportProtocol and $this->transportProtocol = new SIPACLTransportProtocol($transportProtocol);
    }

    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new NetworkACLEntryDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
