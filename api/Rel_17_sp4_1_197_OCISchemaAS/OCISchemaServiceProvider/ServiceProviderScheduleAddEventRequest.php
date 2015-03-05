<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:date;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add an event to service provider schedule. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleAddEventRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             ScheduleKey $scheduleKey,
             $eventName,
             $startDate,
             $endDate,
             Recurrence $recurrence=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->scheduleKey       = $scheduleKey;
        $this->eventName         = new EventName($eventName);
        $this->startDate         = $startDate;
        $this->endDate           = $endDate;
        $this->recurrence        = $recurrence;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setScheduleKey($scheduleKey)
    {
        $scheduleKey and $this->scheduleKey = new ScheduleKey($scheduleKey);
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }

    public function setEventName($eventName)
    {
        $eventName and $this->eventName = new EventName($eventName);
    }

    public function getEventName()
    {
        return (!$this->eventName) ?: $this->eventName->value();
    }

    public function setStartDate($startDate)
    {
        $startDate and $this->startDate = new xs:date($startDate);
    }

    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->value();
    }

    public function setEndDate($endDate)
    {
        $endDate and $this->endDate = new xs:date($endDate);
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }

    public function setRecurrence($recurrence)
    {
        $recurrence and $this->recurrence = new Recurrence($recurrence);
    }

    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->value();
    }
}
