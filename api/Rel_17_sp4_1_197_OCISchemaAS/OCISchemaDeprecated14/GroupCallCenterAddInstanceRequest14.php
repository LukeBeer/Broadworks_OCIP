<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileCallCenter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Call Center instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupCallCenterAddInstanceRequest14sp3
 */
class GroupCallCenterAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfileCallCenter $serviceInstanceProfile,
             $policy,
             $huntAfterNoAnswer,
             $noAnswerNumberOfRings,
             $forwardAfterTimeout,
             $forwardTimeoutSeconds,
             $forwardToPhoneNumber=null,
             $enableVideo,
             $queueLength,
             $allowAgentLogoff,
             $playMusicOnHold,
             $playComfortMessage,
             $timeBetweenComfortMessagesSeconds,
             $enableGuardTimer,
             $guardTimerSeconds,
             $agentUserId=null,
             $allowCallWaitingForAgents
    ) {
        $this->serviceProviderId                 = new ServiceProviderId($serviceProviderId);
        $this->groupId                           = new GroupId($groupId);
        $this->serviceUserId                     = new UserId($serviceUserId);
        $this->serviceInstanceProfile            = $serviceInstanceProfile;
        $this->policy                            = new HuntPolicy($policy);
        $this->huntAfterNoAnswer                 = $huntAfterNoAnswer;
        $this->noAnswerNumberOfRings             = new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->forwardAfterTimeout               = $forwardAfterTimeout;
        $this->forwardTimeoutSeconds             = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardToPhoneNumber              = new OutgoingDN($forwardToPhoneNumber);
        $this->enableVideo                       = $enableVideo;
        $this->queueLength                       = $queueLength;
        $this->allowAgentLogoff                  = $allowAgentLogoff;
        $this->playMusicOnHold                   = $playMusicOnHold;
        $this->playComfortMessage                = $playComfortMessage;
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        $this->enableGuardTimer                  = $enableGuardTimer;
        $this->guardTimerSeconds                 = $guardTimerSeconds;
        $this->agentUserId                       = new UserId($agentUserId);
        $this->allowCallWaitingForAgents         = $allowCallWaitingForAgents;
        $this->args                              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceAddProfileCallCenter($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setPolicy($policy)
    {
        $policy and $this->policy = new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $huntAfterNoAnswer and $this->huntAfterNoAnswer = new xs:boolean($huntAfterNoAnswer);
    }

    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $noAnswerNumberOfRings and $this->noAnswerNumberOfRings = new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $forwardAfterTimeout and $this->forwardAfterTimeout = new xs:boolean($forwardAfterTimeout);
    }

    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->value();
    }

    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $forwardTimeoutSeconds and $this->forwardTimeoutSeconds = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDN($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setQueueLength($queueLength)
    {
        $queueLength and $this->queueLength = new CallCenterQueueLength($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setAllowAgentLogoff($allowAgentLogoff)
    {
        $allowAgentLogoff and $this->allowAgentLogoff = new xs:boolean($allowAgentLogoff);
    }

    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->value();
    }

    public function setPlayMusicOnHold($playMusicOnHold)
    {
        $playMusicOnHold and $this->playMusicOnHold = new xs:boolean($playMusicOnHold);
    }

    public function getPlayMusicOnHold()
    {
        return (!$this->playMusicOnHold) ?: $this->playMusicOnHold->value();
    }

    public function setPlayComfortMessage($playComfortMessage)
    {
        $playComfortMessage and $this->playComfortMessage = new xs:boolean($playComfortMessage);
    }

    public function getPlayComfortMessage()
    {
        return (!$this->playComfortMessage) ?: $this->playComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $timeBetweenComfortMessagesSeconds and $this->timeBetweenComfortMessagesSeconds = new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setEnableGuardTimer($enableGuardTimer)
    {
        $enableGuardTimer and $this->enableGuardTimer = new xs:boolean($enableGuardTimer);
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $guardTimerSeconds and $this->guardTimerSeconds = new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setAgentUserId($agentUserId)
    {
        $agentUserId and $this->agentUserId = new UserId($agentUserId);
    }

    public function getAgentUserId()
    {
        return (!$this->agentUserId) ?: $this->agentUserId->value();
    }

    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $allowCallWaitingForAgents and $this->allowCallWaitingForAgents = new xs:boolean($allowCallWaitingForAgents);
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }
}
