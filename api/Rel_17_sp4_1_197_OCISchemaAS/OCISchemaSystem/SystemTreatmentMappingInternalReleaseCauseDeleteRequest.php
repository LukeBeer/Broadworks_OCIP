<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InternalReleaseCause16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $internalReleaseCause
    ) {
        $this->internalReleaseCause = $internalReleaseCause;
        $this->args                 = func_get_args();
    }

    public function setInternalReleaseCause($internalReleaseCause)
    {
        $internalReleaseCause and $this->internalReleaseCause = new InternalReleaseCause16($internalReleaseCause);
    }

    public function getInternalReleaseCause()
    {
        return (!$this->internalReleaseCause) ?: $this->internalReleaseCause->value();
    }
}
