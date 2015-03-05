<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEmergencyZones; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemEmergencyZonesGetRequest.
 */
class SystemEmergencyZonesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultFromAddress
    ) {
        $this->defaultFromAddress = new EmailAddress($defaultFromAddress);
        $this->args               = func_get_args();
    }

    public function setDefaultFromAddress($defaultFromAddress)
    {
        $defaultFromAddress and $this->defaultFromAddress = new EmailAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }
}
