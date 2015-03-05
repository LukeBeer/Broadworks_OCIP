<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupInventoryReportGetRequest.
 */
class GroupInventoryReportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $inventoryReportTable
    ) {
        $this->inventoryReportTable = $inventoryReportTable;
        $this->args                 = func_get_args();
    }

    public function setInventoryReportTable($inventoryReportTable)
    {
        $inventoryReportTable and $this->inventoryReportTable = new core:OCITable($inventoryReportTable);
    }

    public function getInventoryReportTable()
    {
        return (!$this->inventoryReportTable) ?: $this->inventoryReportTable->value();
    }
}
