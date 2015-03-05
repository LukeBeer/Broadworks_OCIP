<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a Network Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkSynchingServerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $netAddress,
             $port=null,
             $description=null
    ) {
        $this->netAddress  = new NetAddress($netAddress);
        $this->port        = new Port1025($port);
        $this->description = $description;
        $this->args        = func_get_args();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port1025($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new NetworkServerDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
