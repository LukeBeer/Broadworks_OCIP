<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfMonth;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Monthly by day recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByDay extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $dayOfMonth
    ) {
        $this->dayOfMonth = new DayOfMonth($dayOfMonth);
        $this->args       = func_get_args();
    }

    public function setDayOfMonth($dayOfMonth)
    {
        $dayOfMonth and $this->dayOfMonth = new DayOfMonth($dayOfMonth);
    }

    public function getDayOfMonth()
    {
        return (!$this->dayOfMonth) ?: $this->dayOfMonth->value();
    }
}