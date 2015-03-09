<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport\SystemThirdPartyVoiceMailSupportModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Third-party Voice Mail Support.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemThirdPartyVoiceMailSupportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $overrideAltCallerIdForVMRetrieval = null;

    public function __construct(
         $overrideAltCallerIdForVMRetrieval = null
    ) {
        $this->setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval);
    }

    /**
     * @return SystemThirdPartyVoiceMailSupportModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval = null)
    {
        $this->overrideAltCallerIdForVMRetrieval = (boolean) $overrideAltCallerIdForVMRetrieval;
    }

    /**
     * 
     */
    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return (!$this->overrideAltCallerIdForVMRetrieval) ?: $this->overrideAltCallerIdForVMRetrieval;
    }
}
