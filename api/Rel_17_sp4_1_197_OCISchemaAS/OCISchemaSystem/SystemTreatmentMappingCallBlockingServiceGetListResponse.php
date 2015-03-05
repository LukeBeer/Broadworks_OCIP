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
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $treatmentMappingTable
    ) {
        $this->treatmentMappingTable = $treatmentMappingTable;
        $this->args                  = func_get_args();
    }

    public function setTreatmentMappingTable($treatmentMappingTable)
    {
        $treatmentMappingTable and $this->treatmentMappingTable = new core:OCITable($treatmentMappingTable);
    }

    public function getTreatmentMappingTable()
    {
        return (!$this->treatmentMappingTable) ?: $this->treatmentMappingTable->value();
    }
}
