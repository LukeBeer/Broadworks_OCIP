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
 * Response to SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Organization Type", "Service Provider Id", 
 *         "Group Id", "Created By", "Created By Supervisor", and "Is Active".
 *          The "Organization Type" is either "Service Provider" or "Enterprise".
 *          The "Created By" can be either "Administrator" or user id if created by supervisor.
 *          The possible values for "Created By Supervisor" are "true" and "false".
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $scheduleReportTable
    ) {
        $this->scheduleReportTable = $scheduleReportTable;
        $this->args                = func_get_args();
    }

    public function setScheduleReportTable($scheduleReportTable)
    {
        $scheduleReportTable and $this->scheduleReportTable = new core:OCITable($scheduleReportTable);
    }

    public function getScheduleReportTable()
    {
        return (!$this->scheduleReportTable) ?: $this->scheduleReportTable->value();
    }
}
