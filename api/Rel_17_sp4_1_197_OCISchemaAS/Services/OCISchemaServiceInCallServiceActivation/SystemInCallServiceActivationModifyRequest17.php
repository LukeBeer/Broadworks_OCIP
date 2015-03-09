<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation\SystemInCallServiceActivationModifyResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $defaultFlashActivationDigits        = null;
    protected $defaultCallTransferActivationDigits = null;

    public function __construct(
         $defaultFlashActivationDigits = null,
         $defaultCallTransferActivationDigits = null
    ) {
        $this->setDefaultFlashActivationDigits($defaultFlashActivationDigits);
        $this->setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits);
    }

    /**
     * @return SystemInCallServiceActivationModifyResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits = null)
    {
        $this->defaultFlashActivationDigits = ($defaultFlashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultFlashActivationDigits
             : new InCallServiceActivationDigits($defaultFlashActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getDefaultFlashActivationDigits()
    {
        return (!$this->defaultFlashActivationDigits) ?: $this->defaultFlashActivationDigits->getValue();
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits = null)
    {
        $this->defaultCallTransferActivationDigits = ($defaultCallTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultCallTransferActivationDigits
             : new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return (!$this->defaultCallTransferActivationDigits) ?: $this->defaultCallTransferActivationDigits->getValue();
    }
}
