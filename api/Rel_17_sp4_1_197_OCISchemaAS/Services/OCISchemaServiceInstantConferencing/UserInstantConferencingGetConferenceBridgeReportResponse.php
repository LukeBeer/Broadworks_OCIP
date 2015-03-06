<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserInstantConferencingGetConferenceBridgeReportRequest.
 *         Contains a table of report.
 *         The table has column headings: "Bridge Name", "Call Date", "Call Start Time",
 *         "Time Zone", "Call Owner", "Phone Number", "Direction", "Leg Start", "Duration",
 *         "Leg Number", "Access Code", "Billing Code" and "Call Id".
 */
class UserInstantConferencingGetConferenceBridgeReportResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceReportTable
    ) {
        $this->conferenceReportTable = $conferenceReportTable;
        $this->args                  = func_get_args();
    }

    public function setConferenceReportTable($conferenceReportTable)
    {
        $conferenceReportTable and $this->conferenceReportTable = new core:OCITable($conferenceReportTable);
    }

    public function getConferenceReportTable()
    {
        return (!$this->conferenceReportTable) ?: $this->conferenceReportTable->value();
    }
}