<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace\ServiceProviderMaliciousCallTraceModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider's Malicious Call Trace settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $serviceProviderId                   = null;
    protected $useSystemPlayMCTWarningAnnouncement = null;
    protected $playMCTWarningAnnouncement          = null;

    public function __construct(
         $serviceProviderId,
         $useSystemPlayMCTWarningAnnouncement = null,
         $playMCTWarningAnnouncement = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement);
        $this->setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement);
    }

    /**
     * @return ServiceProviderMaliciousCallTraceModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement = null)
    {
        $this->useSystemPlayMCTWarningAnnouncement = (boolean) $useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return (!$this->useSystemPlayMCTWarningAnnouncement) ?: $this->useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement = null)
    {
        $this->playMCTWarningAnnouncement = (boolean) $playMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return (!$this->playMCTWarningAnnouncement) ?: $this->playMCTWarningAnnouncement;
    }
}
