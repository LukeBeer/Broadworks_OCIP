<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport\SystemThirdPartyVoiceMailSupportGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemThirdPartyVoiceMailSupportGetRequest.
 */
class SystemThirdPartyVoiceMailSupportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $overrideAltCallerIdForVMRetrieval = null;

    /**
     * @return SystemThirdPartyVoiceMailSupportGetResponse
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
