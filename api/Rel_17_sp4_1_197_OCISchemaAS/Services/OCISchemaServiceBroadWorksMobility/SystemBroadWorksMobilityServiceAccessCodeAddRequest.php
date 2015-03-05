<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceAccessCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceAccessCode,
             $countryCode,
             $description=null
    ) {
        $this->serviceAccessCode = $serviceAccessCode;
        $this->countryCode       = new CountryCode($countryCode);
        $this->description       = $description;
        $this->args              = func_get_args();
    }

    public function setServiceAccessCode($serviceAccessCode)
    {
        $serviceAccessCode and $this->serviceAccessCode = new ServiceAccessCode($serviceAccessCode);
    }

    public function getServiceAccessCode()
    {
        return (!$this->serviceAccessCode) ?: $this->serviceAccessCode->value();
    }

    public function setCountryCode($countryCode)
    {
        $countryCode and $this->countryCode = new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new ServiceAccessCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
