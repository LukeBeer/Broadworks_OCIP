<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a Network Class of Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkClassOfServiceDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name
    ) {
        $this->name = new NetworkClassOfServiceName($name);
        $this->args = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new NetworkClassOfServiceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}
