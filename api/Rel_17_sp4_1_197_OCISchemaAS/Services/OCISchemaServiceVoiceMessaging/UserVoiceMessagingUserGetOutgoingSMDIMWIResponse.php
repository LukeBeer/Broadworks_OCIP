<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserVoiceMessagingUserGetOutgoingSMDIMWIRequest.
 */
class UserVoiceMessagingUserGetOutgoingSMDIMWIResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $outgoingSMDIMWIPhoneNumber=null
    ) {
        $this->isActive                   = $isActive;
        $this->outgoingSMDIMWIPhoneNumber = new OutgoingDN($outgoingSMDIMWIPhoneNumber);
        $this->args                       = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setOutgoingSMDIMWIPhoneNumber($outgoingSMDIMWIPhoneNumber)
    {
        $outgoingSMDIMWIPhoneNumber and $this->outgoingSMDIMWIPhoneNumber = new OutgoingDN($outgoingSMDIMWIPhoneNumber);
    }

    public function getOutgoingSMDIMWIPhoneNumber()
    {
        return (!$this->outgoingSMDIMWIPhoneNumber) ?: $this->outgoingSMDIMWIPhoneNumber->value();
    }
}
