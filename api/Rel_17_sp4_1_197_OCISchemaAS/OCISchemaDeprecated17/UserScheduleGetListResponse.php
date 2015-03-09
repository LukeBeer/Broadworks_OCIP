<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserScheduleGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserScheduleGetListRequest.
 *         The response contains a list of system schedules.
 */
class UserScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $scheduleName  = null;
    protected $scheduleType  = null;
    protected $scheduleLevel = null;

    /**
     * @return UserScheduleGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Schedule name.
     */
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
    }

    /**
     * Schedule name.
     */
    public function getScheduleName()
    {
        return (!$this->scheduleName) ?: $this->scheduleName->getValue();
    }

    /**
     * Schedule type.
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
    }

    /**
     * Schedule type.
     */
    public function getScheduleType()
    {
        return (!$this->scheduleType) ?: $this->scheduleType->getValue();
    }

    /**
     * Schedule access level.
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        $this->scheduleLevel = ($scheduleLevel InstanceOf ScheduleLevel)
             ? $scheduleLevel
             : new ScheduleLevel($scheduleLevel);
    }

    /**
     * Schedule access level.
     */
    public function getScheduleLevel()
    {
        return (!$this->scheduleLevel) ?: $this->scheduleLevel->getValue();
    }
}
