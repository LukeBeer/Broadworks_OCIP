<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupTimeScheduleGetListRequest.
 *         The response contains all the group's time schedule name.
 */
class GroupTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $timeSchedule=null
    ) {
        $this->timeSchedule = new ScheduleName($timeSchedule);
        $this->args         = func_get_args();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new ScheduleName($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }
}
