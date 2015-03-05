<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderVoicePortalScope;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to change the service provider's or enterprise's voice portal settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $voicePortalScope=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->voicePortalScope  = $voicePortalScope;
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

    public function setVoicePortalScope($voicePortalScope)
    {
        $voicePortalScope and $this->voicePortalScope = new ServiceProviderVoicePortalScope($voicePortalScope);
    }

    public function getVoicePortalScope()
    {
        return (!$this->voicePortalScope) ?: $this->voicePortalScope->value();
    }
}
