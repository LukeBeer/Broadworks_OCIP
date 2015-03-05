<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallForwardingSelectiveNumberSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a criteria to the user's call forwarding selective service.
 *          The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallForwardingSelectiveAddCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $criteriaName,
             TimeSchedule $timeSchedule=null,
             $forwardToNumberSelection,
             $forwardToPhoneNumber=null,
             CriteriaFromDn $fromDnCriteria
    ) {
        $this->userId                   = new UserId($userId);
        $this->criteriaName             = new CriteriaName($criteriaName);
        $this->timeSchedule             = $timeSchedule;
        $this->forwardToNumberSelection = $forwardToNumberSelection;
        $this->forwardToPhoneNumber     = new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->fromDnCriteria           = $fromDnCriteria;
        $this->args                     = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCriteriaName($criteriaName)
    {
        $criteriaName and $this->criteriaName = new CriteriaName($criteriaName);
    }

    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->value();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeSchedule($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setForwardToNumberSelection($forwardToNumberSelection)
    {
        $forwardToNumberSelection and $this->forwardToNumberSelection = new CallForwardingSelectiveNumberSelection($forwardToNumberSelection);
    }

    public function getForwardToNumberSelection()
    {
        return (!$this->forwardToNumberSelection) ?: $this->forwardToNumberSelection->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setFromDnCriteria($fromDnCriteria)
    {
        $fromDnCriteria and $this->fromDnCriteria = new CriteriaFromDn($fromDnCriteria);
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }
}
