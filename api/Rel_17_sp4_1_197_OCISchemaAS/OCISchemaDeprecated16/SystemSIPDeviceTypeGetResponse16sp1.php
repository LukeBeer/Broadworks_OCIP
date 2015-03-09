<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceOptionsRead16sp1;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceResetEvent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AuthenticationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemSIPDeviceTypeGetResponse16sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeGetRequest16sp1.
 */
class SystemSIPDeviceTypeGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $isObsolete                        = null;
    protected $numberOfPorts                     = null;
    protected $profile                           = null;
    protected $registrationCapable               = null;
    protected $isConferenceDevice                = null;
    protected $isMobilityManagerDevice           = null;
    protected $isMusicOnHoldDevice               = null;
    protected $RFC3264Hold                       = null;
    protected $isTrusted                         = null;
    protected $E164Capable                       = null;
    protected $routeAdvance                      = null;
    protected $forwardingOverride                = null;
    protected $wirelessIntegration               = null;
    protected $webBasedConfigURL                 = null;
    protected $isVideoCapable                    = null;
    protected $PBXIntegration                    = null;
    protected $useBusinessTrunkingContact        = null;
    protected $staticRegistrationCapable         = null;
    protected $cpeDeviceOptions                  = null;
    protected $protocolChoice                    = null;
    protected $earlyMediaSupport                 = null;
    protected $authenticateRefer                 = null;
    protected $autoConfigSoftClient              = null;
    protected $authenticationMode                = null;
    protected $requiresBroadWorksDigitCollection = null;
    protected $requiresBroadWorksCallWaitingTone = null;
    protected $requiresMWISubscription           = null;
    protected $useHistoryInfoHeaderOnAccessSide  = null;
    protected $adviceOfChargeCapable             = null;
    protected $resetEvent                        = null;

    /**
     * @return SystemSIPDeviceTypeGetResponse16sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        $this->isObsolete = (boolean) $isObsolete;
    }

    /**
     * 
     */
    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts =  $numberOfPorts;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->getValue();
    }

    /**
     * Device type signaling address types.
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
    }

    /**
     * Device type signaling address types.
     */
    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->getValue();
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        $this->registrationCapable = (boolean) $registrationCapable;
    }

    /**
     * 
     */
    public function getRegistrationCapable()
    {
        return (!$this->registrationCapable) ?: $this->registrationCapable;
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        $this->isConferenceDevice = (boolean) $isConferenceDevice;
    }

    /**
     * 
     */
    public function getIsConferenceDevice()
    {
        return (!$this->isConferenceDevice) ?: $this->isConferenceDevice;
    }

    /**
     * 
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice = null)
    {
        $this->isMobilityManagerDevice = (boolean) $isMobilityManagerDevice;
    }

    /**
     * 
     */
    public function getIsMobilityManagerDevice()
    {
        return (!$this->isMobilityManagerDevice) ?: $this->isMobilityManagerDevice;
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        $this->isMusicOnHoldDevice = (boolean) $isMusicOnHoldDevice;
    }

    /**
     * 
     */
    public function getIsMusicOnHoldDevice()
    {
        return (!$this->isMusicOnHoldDevice) ?: $this->isMusicOnHoldDevice;
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        $this->RFC3264Hold = (boolean) $RFC3264Hold;
    }

    /**
     * 
     */
    public function getRFC3264Hold()
    {
        return (!$this->RFC3264Hold) ?: $this->RFC3264Hold;
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        $this->isTrusted = (boolean) $isTrusted;
    }

    /**
     * 
     */
    public function getIsTrusted()
    {
        return (!$this->isTrusted) ?: $this->isTrusted;
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        $this->E164Capable = (boolean) $E164Capable;
    }

    /**
     * 
     */
    public function getE164Capable()
    {
        return (!$this->E164Capable) ?: $this->E164Capable;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = (boolean) $routeAdvance;
    }

    /**
     * 
     */
    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance;
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        $this->forwardingOverride = (boolean) $forwardingOverride;
    }

    /**
     * 
     */
    public function getForwardingOverride()
    {
        return (!$this->forwardingOverride) ?: $this->forwardingOverride;
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        $this->wirelessIntegration = (boolean) $wirelessIntegration;
    }

    /**
     * 
     */
    public function getWirelessIntegration()
    {
        return (!$this->wirelessIntegration) ?: $this->wirelessIntegration;
    }

    /**
     * Web based configuration URL.
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
    }

    /**
     * Web based configuration URL.
     */
    public function getWebBasedConfigURL()
    {
        return (!$this->webBasedConfigURL) ?: $this->webBasedConfigURL->getValue();
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        $this->isVideoCapable = (boolean) $isVideoCapable;
    }

    /**
     * 
     */
    public function getIsVideoCapable()
    {
        return (!$this->isVideoCapable) ?: $this->isVideoCapable;
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        $this->PBXIntegration = (boolean) $PBXIntegration;
    }

    /**
     * 
     */
    public function getPBXIntegration()
    {
        return (!$this->PBXIntegration) ?: $this->PBXIntegration;
    }

    /**
     * 
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact = null)
    {
        $this->useBusinessTrunkingContact = (boolean) $useBusinessTrunkingContact;
    }

    /**
     * 
     */
    public function getUseBusinessTrunkingContact()
    {
        return (!$this->useBusinessTrunkingContact) ?: $this->useBusinessTrunkingContact;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        $this->staticRegistrationCapable = (boolean) $staticRegistrationCapable;
    }

    /**
     * 
     */
    public function getStaticRegistrationCapable()
    {
        return (!$this->staticRegistrationCapable) ?: $this->staticRegistrationCapable;
    }

    /**
     * CPE device's options.
     */
    public function setCpeDeviceOptions(CPEDeviceOptionsRead16sp1 $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions =  $cpeDeviceOptions;
    }

    /**
     * CPE device's options.
     */
    public function getCpeDeviceOptions()
    {
        return (!$this->cpeDeviceOptions) ?: $this->cpeDeviceOptions->getValue();
    }

    /**
     * Access device protocol.
     */
    public function setProtocolChoice($protocolChoice = null)
    {
        $this->protocolChoice = ($protocolChoice InstanceOf AccessDeviceProtocol)
             ? $protocolChoice
             : new AccessDeviceProtocol($protocolChoice);
    }

    /**
     * Access device protocol.
     */
    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->getValue();
    }

    /**
     * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
     *         When there is no early media, the call originator typically supplies ringback tone locally.
     *         RTP - Early Session refers to RFC 3959.
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
    }

    /**
     * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
     *         When there is no early media, the call originator typically supplies ringback tone locally.
     *         RTP - Early Session refers to RFC 3959.
     */
    public function getEarlyMediaSupport()
    {
        return (!$this->earlyMediaSupport) ?: $this->earlyMediaSupport->getValue();
    }

    /**
     * 
     */
    public function setAuthenticateRefer($authenticateRefer = null)
    {
        $this->authenticateRefer = (boolean) $authenticateRefer;
    }

    /**
     * 
     */
    public function getAuthenticateRefer()
    {
        return (!$this->authenticateRefer) ?: $this->authenticateRefer;
    }

    /**
     * 
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient = null)
    {
        $this->autoConfigSoftClient = (boolean) $autoConfigSoftClient;
    }

    /**
     * 
     */
    public function getAutoConfigSoftClient()
    {
        return (!$this->autoConfigSoftClient) ?: $this->autoConfigSoftClient;
    }

    /**
     * Choices for SIP Device Authentication
     */
    public function setAuthenticationMode($authenticationMode = null)
    {
        $this->authenticationMode = ($authenticationMode InstanceOf AuthenticationMode)
             ? $authenticationMode
             : new AuthenticationMode($authenticationMode);
    }

    /**
     * Choices for SIP Device Authentication
     */
    public function getAuthenticationMode()
    {
        return (!$this->authenticationMode) ?: $this->authenticationMode->getValue();
    }

    /**
     * 
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection = null)
    {
        $this->requiresBroadWorksDigitCollection = (boolean) $requiresBroadWorksDigitCollection;
    }

    /**
     * 
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return (!$this->requiresBroadWorksDigitCollection) ?: $this->requiresBroadWorksDigitCollection;
    }

    /**
     * 
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone = null)
    {
        $this->requiresBroadWorksCallWaitingTone = (boolean) $requiresBroadWorksCallWaitingTone;
    }

    /**
     * 
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return (!$this->requiresBroadWorksCallWaitingTone) ?: $this->requiresBroadWorksCallWaitingTone;
    }

    /**
     * 
     */
    public function setRequiresMWISubscription($requiresMWISubscription = null)
    {
        $this->requiresMWISubscription = (boolean) $requiresMWISubscription;
    }

    /**
     * 
     */
    public function getRequiresMWISubscription()
    {
        return (!$this->requiresMWISubscription) ?: $this->requiresMWISubscription;
    }

    /**
     * 
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide = null)
    {
        $this->useHistoryInfoHeaderOnAccessSide = (boolean) $useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * 
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return (!$this->useHistoryInfoHeaderOnAccessSide) ?: $this->useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * 
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable = null)
    {
        $this->adviceOfChargeCapable = (boolean) $adviceOfChargeCapable;
    }

    /**
     * 
     */
    public function getAdviceOfChargeCapable()
    {
        return (!$this->adviceOfChargeCapable) ?: $this->adviceOfChargeCapable;
    }

    /**
     * Choices for the reset event of an access device.
     */
    public function setResetEvent($resetEvent = null)
    {
        $this->resetEvent = ($resetEvent InstanceOf AccessDeviceResetEvent)
             ? $resetEvent
             : new AccessDeviceResetEvent($resetEvent);
    }

    /**
     * Choices for the reset event of an access device.
     */
    public function getResetEvent()
    {
        return (!$this->resetEvent) ?: $this->resetEvent->getValue();
    }
}
