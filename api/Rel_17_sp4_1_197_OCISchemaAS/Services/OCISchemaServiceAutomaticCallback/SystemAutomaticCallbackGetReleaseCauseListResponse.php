<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackReleaseCause;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $releaseCause=null
    ) {
        $this->releaseCause = $releaseCause;
        $this->args         = func_get_args();
    }

    public function setReleaseCause($releaseCause)
    {
        $releaseCause and $this->releaseCause = new AutomaticCallbackReleaseCause($releaseCause);
    }

    public function getReleaseCause()
    {
        return (!$this->releaseCause) ?: $this->releaseCause->value();
    }
}
