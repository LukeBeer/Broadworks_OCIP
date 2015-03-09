<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserSimultaneousRingPersonalGetPhoneNumberResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSimultaneousRingPersonalGetPhoneNumberRequest.
 */
class UserSimultaneousRingPersonalGetPhoneNumberResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $answerConfirmationRequired = null;

    /**
     * @return UserSimultaneousRingPersonalGetPhoneNumberResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = (boolean) $answerConfirmationRequired;
    }

    /**
     * 
     */
    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired;
    }
}
