<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a Virtual On-Net Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $virtualOnNetCallTypeName
    ) {
        $this->virtualOnNetCallTypeName = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->args                     = func_get_args();
    }

    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $virtualOnNetCallTypeName and $this->virtualOnNetCallTypeName = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->value();
    }
}
