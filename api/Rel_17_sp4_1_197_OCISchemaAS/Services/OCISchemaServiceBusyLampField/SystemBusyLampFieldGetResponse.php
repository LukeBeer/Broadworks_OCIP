<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBusyLampField; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemBusyLampFieldGetRequest.
 */
class SystemBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $displayLocalUserIdentityLastNameFirst
    ) {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        $this->args                                  = func_get_args();
    }

    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $displayLocalUserIdentityLastNameFirst and $this->displayLocalUserIdentityLastNameFirst = new xs:boolean($displayLocalUserIdentityLastNameFirst);
    }

    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return (!$this->displayLocalUserIdentityLastNameFirst) ?: $this->displayLocalUserIdentityLastNameFirst->value();
    }
}
