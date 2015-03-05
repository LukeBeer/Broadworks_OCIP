<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallTypeGetMappingListRequest. The table columns are:
 *         "Country Code", "Digit Map" and "Call Type".
 */
class SystemCallTypeGetMappingListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callTypeMapping
    ) {
        $this->callTypeMapping = $callTypeMapping;
        $this->args            = func_get_args();
    }

    public function setCallTypeMapping($callTypeMapping)
    {
        $callTypeMapping and $this->callTypeMapping = new core:OCITable($callTypeMapping);
    }

    public function getCallTypeMapping()
    {
        return (!$this->callTypeMapping) ?: $this->callTypeMapping->value();
    }
}
