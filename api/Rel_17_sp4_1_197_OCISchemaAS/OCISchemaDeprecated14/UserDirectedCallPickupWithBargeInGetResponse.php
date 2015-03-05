<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserDirectedCallPickupWithBargeInGetRequest.
 */
class UserDirectedCallPickupWithBargeInGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableBargeInWarningTone
    ) {
        $this->enableBargeInWarningTone = $enableBargeInWarningTone;
        $this->args                     = func_get_args();
    }

    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $enableBargeInWarningTone and $this->enableBargeInWarningTone = new xs:boolean($enableBargeInWarningTone);
    }

    public function getEnableBargeInWarningTone()
    {
        return (!$this->enableBargeInWarningTone) ?: $this->enableBargeInWarningTone->value();
    }
}
