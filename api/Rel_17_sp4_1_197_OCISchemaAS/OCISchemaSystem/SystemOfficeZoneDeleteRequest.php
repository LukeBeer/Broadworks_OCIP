<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete an Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $officeZoneName
    ) {
        $this->officeZoneName = new OfficeZoneName($officeZoneName);
        $this->args           = func_get_args();
    }

    public function setOfficeZoneName($officeZoneName)
    {
        $officeZoneName and $this->officeZoneName = new OfficeZoneName($officeZoneName);
    }

    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->value();
    }
}
