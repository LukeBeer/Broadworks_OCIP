<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowAnswerConfirmation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow\UserCallMeNowGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallMeNowGetRequest. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Call To", "Reject Call" and "Holiday Schedule".
 */
class UserCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $isActive           = null;
    protected $answerConfirmation = null;
    protected $criteriaTable      = null;

    /**
     * @return UserCallMeNowGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Possible type of answer confirmation for Call Me Now.
     */
    public function setAnswerConfirmation($answerConfirmation = null)
    {
        $this->answerConfirmation = ($answerConfirmation InstanceOf CallMeNowAnswerConfirmation)
             ? $answerConfirmation
             : new CallMeNowAnswerConfirmation($answerConfirmation);
    }

    /**
     * Possible type of answer confirmation for Call Me Now.
     */
    public function getAnswerConfirmation()
    {
        return (!$this->answerConfirmation) ?: $this->answerConfirmation->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
