<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemInCallServiceActivationGetRequest.
 * 
 *           Replaced by: SystemInCallServiceActivationGetResponse17
 */
class SystemInCallServiceActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultActivationDigits
    ) {
        $this->defaultActivationDigits = new InCallServiceActivationDigits($defaultActivationDigits);
        $this->args                    = func_get_args();
    }

    public function setDefaultActivationDigits($defaultActivationDigits)
    {
        $defaultActivationDigits and $this->defaultActivationDigits = new InCallServiceActivationDigits($defaultActivationDigits);
    }

    public function getDefaultActivationDigits()
    {
        return (!$this->defaultActivationDigits) ?: $this->defaultActivationDigits->value();
    }
}
