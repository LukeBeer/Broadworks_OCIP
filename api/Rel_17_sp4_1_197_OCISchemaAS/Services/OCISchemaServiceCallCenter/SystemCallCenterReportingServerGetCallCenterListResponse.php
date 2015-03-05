<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the
 *         SystemCallCenterReportingServerGetCallCenterListRequest.
 *         Contains a table with column headings: "Service Provider Id",
 *         "Group Id","Service User Id", "Name", "Phone", "Extension".
 */
class SystemCallCenterReportingServerGetCallCenterListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callCenterTable
    ) {
        $this->callCenterTable = $callCenterTable;
        $this->args            = func_get_args();
    }

    public function setCallCenterTable($callCenterTable)
    {
        $callCenterTable and $this->callCenterTable = new core:OCITable($callCenterTable);
    }

    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->value();
    }
}
