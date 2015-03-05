<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Call Procesing Policy.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *  
 *           The useUserCLIDSetting attribute controls the CLID settings 
 *           (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowConfigurableCLIDForRedirectingIdentity)
 *           
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 * 
 *           The useUserDCLIDSetting controls the Dialable Caller ID settings (enableDialableCallerID)
 *           
 *           The following elements are only used in AS data mode:
 *            useUserDCLIDSetting
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 */
class UserCallProcessingModifyPolicyRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $useUserCLIDSetting=null,
             $useUserMediaSetting=null,
             $useUserCallLimitsSetting=null,
             $useUserDCLIDSetting=null,
             $useMaxSimultaneousCalls=null,
             $maxSimultaneousCalls=null,
             $useMaxSimultaneousVideoCalls=null,
             $maxSimultaneousVideoCalls=null,
             $useMaxCallTimeForAnsweredCalls=null,
             $maxCallTimeForAnsweredCallsMinutes=null,
             $useMaxCallTimeForUnansweredCalls=null,
             $maxCallTimeForUnansweredCallsMinutes=null,
             $mediaPolicySelection=null,
             $supportedMediaSetName=null,
             $useMaxConcurrentRedirectedCalls=null,
             $maxConcurrentRedirectedCalls=null,
             $useMaxFindMeFollowMeDepth=null,
             $maxFindMeFollowMeDepth=null,
             $maxRedirectionDepth=null,
             $useMaxConcurrentFindMeFollowMeInvocations=null,
             $maxConcurrentFindMeFollowMeInvocations=null,
             $clidPolicy=null,
             $emergencyClidPolicy=null,
             $allowAlternateNumbersForRedirectingIdentity=null,
             $useGroupName=null,
             $enableDialableCallerID=null,
             $blockCallingNameForExternalCalls=null,
             $allowConfigurableCLIDForRedirectingIdentity=null
    ) {
        $this->userId                                      = new UserId($userId);
        $this->useUserCLIDSetting                          = $useUserCLIDSetting;
        $this->useUserMediaSetting                         = $useUserMediaSetting;
        $this->useUserCallLimitsSetting                    = $useUserCallLimitsSetting;
        $this->useUserDCLIDSetting                         = $useUserDCLIDSetting;
        $this->useMaxSimultaneousCalls                     = $useMaxSimultaneousCalls;
        $this->maxSimultaneousCalls                        = new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->useMaxSimultaneousVideoCalls                = $useMaxSimultaneousVideoCalls;
        $this->maxSimultaneousVideoCalls                   = new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->useMaxCallTimeForAnsweredCalls              = $useMaxCallTimeForAnsweredCalls;
        $this->maxCallTimeForAnsweredCallsMinutes          = new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
        $this->useMaxCallTimeForUnansweredCalls            = $useMaxCallTimeForUnansweredCalls;
        $this->maxCallTimeForUnansweredCallsMinutes        = new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->mediaPolicySelection                        = new MediaPolicySelection($mediaPolicySelection);
        $this->supportedMediaSetName                       = new MediaSetName($supportedMediaSetName);
        $this->useMaxConcurrentRedirectedCalls             = $useMaxConcurrentRedirectedCalls;
        $this->maxConcurrentRedirectedCalls                = new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->useMaxFindMeFollowMeDepth                   = $useMaxFindMeFollowMeDepth;
        $this->maxFindMeFollowMeDepth                      = new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxRedirectionDepth                         = new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->useMaxConcurrentFindMeFollowMeInvocations   = $useMaxConcurrentFindMeFollowMeInvocations;
        $this->maxConcurrentFindMeFollowMeInvocations      = new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->clidPolicy                                  = new GroupCLIDPolicy($clidPolicy);
        $this->emergencyClidPolicy                         = new GroupCLIDPolicy($emergencyClidPolicy);
        $this->allowAlternateNumbersForRedirectingIdentity = $allowAlternateNumbersForRedirectingIdentity;
        $this->useGroupName                                = $useGroupName;
        $this->enableDialableCallerID                      = $enableDialableCallerID;
        $this->blockCallingNameForExternalCalls            = $blockCallingNameForExternalCalls;
        $this->allowConfigurableCLIDForRedirectingIdentity = $allowConfigurableCLIDForRedirectingIdentity;
        $this->args                                        = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setUseUserCLIDSetting($useUserCLIDSetting)
    {
        $useUserCLIDSetting and $this->useUserCLIDSetting = new xs:boolean($useUserCLIDSetting);
    }

    public function getUseUserCLIDSetting()
    {
        return (!$this->useUserCLIDSetting) ?: $this->useUserCLIDSetting->value();
    }

    public function setUseUserMediaSetting($useUserMediaSetting)
    {
        $useUserMediaSetting and $this->useUserMediaSetting = new xs:boolean($useUserMediaSetting);
    }

    public function getUseUserMediaSetting()
    {
        return (!$this->useUserMediaSetting) ?: $this->useUserMediaSetting->value();
    }

    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting)
    {
        $useUserCallLimitsSetting and $this->useUserCallLimitsSetting = new xs:boolean($useUserCallLimitsSetting);
    }

    public function getUseUserCallLimitsSetting()
    {
        return (!$this->useUserCallLimitsSetting) ?: $this->useUserCallLimitsSetting->value();
    }

    public function setUseUserDCLIDSetting($useUserDCLIDSetting)
    {
        $useUserDCLIDSetting and $this->useUserDCLIDSetting = new xs:boolean($useUserDCLIDSetting);
    }

    public function getUseUserDCLIDSetting()
    {
        return (!$this->useUserDCLIDSetting) ?: $this->useUserDCLIDSetting->value();
    }

    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $useMaxSimultaneousCalls and $this->useMaxSimultaneousCalls = new xs:boolean($useMaxSimultaneousCalls);
    }

    public function getUseMaxSimultaneousCalls()
    {
        return (!$this->useMaxSimultaneousCalls) ?: $this->useMaxSimultaneousCalls->value();
    }

    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $maxSimultaneousCalls and $this->maxSimultaneousCalls = new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
    }

    public function getMaxSimultaneousCalls()
    {
        return (!$this->maxSimultaneousCalls) ?: $this->maxSimultaneousCalls->value();
    }

    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $useMaxSimultaneousVideoCalls and $this->useMaxSimultaneousVideoCalls = new xs:boolean($useMaxSimultaneousVideoCalls);
    }

    public function getUseMaxSimultaneousVideoCalls()
    {
        return (!$this->useMaxSimultaneousVideoCalls) ?: $this->useMaxSimultaneousVideoCalls->value();
    }

    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $maxSimultaneousVideoCalls and $this->maxSimultaneousVideoCalls = new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
    }

    public function getMaxSimultaneousVideoCalls()
    {
        return (!$this->maxSimultaneousVideoCalls) ?: $this->maxSimultaneousVideoCalls->value();
    }

    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $useMaxCallTimeForAnsweredCalls and $this->useMaxCallTimeForAnsweredCalls = new xs:boolean($useMaxCallTimeForAnsweredCalls);
    }

    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return (!$this->useMaxCallTimeForAnsweredCalls) ?: $this->useMaxCallTimeForAnsweredCalls->value();
    }

    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $maxCallTimeForAnsweredCallsMinutes and $this->maxCallTimeForAnsweredCallsMinutes = new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
    }

    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return (!$this->maxCallTimeForAnsweredCallsMinutes) ?: $this->maxCallTimeForAnsweredCallsMinutes->value();
    }

    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $useMaxCallTimeForUnansweredCalls and $this->useMaxCallTimeForUnansweredCalls = new xs:boolean($useMaxCallTimeForUnansweredCalls);
    }

    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return (!$this->useMaxCallTimeForUnansweredCalls) ?: $this->useMaxCallTimeForUnansweredCalls->value();
    }

    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $maxCallTimeForUnansweredCallsMinutes and $this->maxCallTimeForUnansweredCallsMinutes = new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
    }

    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return (!$this->maxCallTimeForUnansweredCallsMinutes) ?: $this->maxCallTimeForUnansweredCallsMinutes->value();
    }

    public function setMediaPolicySelection($mediaPolicySelection)
    {
        $mediaPolicySelection and $this->mediaPolicySelection = new MediaPolicySelection($mediaPolicySelection);
    }

    public function getMediaPolicySelection()
    {
        return (!$this->mediaPolicySelection) ?: $this->mediaPolicySelection->value();
    }

    public function setSupportedMediaSetName($supportedMediaSetName)
    {
        $supportedMediaSetName and $this->supportedMediaSetName = new MediaSetName($supportedMediaSetName);
    }

    public function getSupportedMediaSetName()
    {
        return (!$this->supportedMediaSetName) ?: $this->supportedMediaSetName->value();
    }

    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $useMaxConcurrentRedirectedCalls and $this->useMaxConcurrentRedirectedCalls = new xs:boolean($useMaxConcurrentRedirectedCalls);
    }

    public function getUseMaxConcurrentRedirectedCalls()
    {
        return (!$this->useMaxConcurrentRedirectedCalls) ?: $this->useMaxConcurrentRedirectedCalls->value();
    }

    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $maxConcurrentRedirectedCalls and $this->maxConcurrentRedirectedCalls = new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
    }

    public function getMaxConcurrentRedirectedCalls()
    {
        return (!$this->maxConcurrentRedirectedCalls) ?: $this->maxConcurrentRedirectedCalls->value();
    }

    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $useMaxFindMeFollowMeDepth and $this->useMaxFindMeFollowMeDepth = new xs:boolean($useMaxFindMeFollowMeDepth);
    }

    public function getUseMaxFindMeFollowMeDepth()
    {
        return (!$this->useMaxFindMeFollowMeDepth) ?: $this->useMaxFindMeFollowMeDepth->value();
    }

    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $maxFindMeFollowMeDepth and $this->maxFindMeFollowMeDepth = new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
    }

    public function getMaxFindMeFollowMeDepth()
    {
        return (!$this->maxFindMeFollowMeDepth) ?: $this->maxFindMeFollowMeDepth->value();
    }

    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $maxRedirectionDepth and $this->maxRedirectionDepth = new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
    }

    public function getMaxRedirectionDepth()
    {
        return (!$this->maxRedirectionDepth) ?: $this->maxRedirectionDepth->value();
    }

    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $useMaxConcurrentFindMeFollowMeInvocations and $this->useMaxConcurrentFindMeFollowMeInvocations = new xs:boolean($useMaxConcurrentFindMeFollowMeInvocations);
    }

    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->useMaxConcurrentFindMeFollowMeInvocations) ?: $this->useMaxConcurrentFindMeFollowMeInvocations->value();
    }

    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $maxConcurrentFindMeFollowMeInvocations and $this->maxConcurrentFindMeFollowMeInvocations = new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
    }

    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->maxConcurrentFindMeFollowMeInvocations) ?: $this->maxConcurrentFindMeFollowMeInvocations->value();
    }

    public function setClidPolicy($clidPolicy)
    {
        $clidPolicy and $this->clidPolicy = new GroupCLIDPolicy($clidPolicy);
    }

    public function getClidPolicy()
    {
        return (!$this->clidPolicy) ?: $this->clidPolicy->value();
    }

    public function setEmergencyClidPolicy($emergencyClidPolicy)
    {
        $emergencyClidPolicy and $this->emergencyClidPolicy = new GroupCLIDPolicy($emergencyClidPolicy);
    }

    public function getEmergencyClidPolicy()
    {
        return (!$this->emergencyClidPolicy) ?: $this->emergencyClidPolicy->value();
    }

    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $allowAlternateNumbersForRedirectingIdentity and $this->allowAlternateNumbersForRedirectingIdentity = new xs:boolean($allowAlternateNumbersForRedirectingIdentity);
    }

    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return (!$this->allowAlternateNumbersForRedirectingIdentity) ?: $this->allowAlternateNumbersForRedirectingIdentity->value();
    }

    public function setUseGroupName($useGroupName)
    {
        $useGroupName and $this->useGroupName = new xs:boolean($useGroupName);
    }

    public function getUseGroupName()
    {
        return (!$this->useGroupName) ?: $this->useGroupName->value();
    }

    public function setEnableDialableCallerID($enableDialableCallerID)
    {
        $enableDialableCallerID and $this->enableDialableCallerID = new xs:boolean($enableDialableCallerID);
    }

    public function getEnableDialableCallerID()
    {
        return (!$this->enableDialableCallerID) ?: $this->enableDialableCallerID->value();
    }

    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $blockCallingNameForExternalCalls and $this->blockCallingNameForExternalCalls = new xs:boolean($blockCallingNameForExternalCalls);
    }

    public function getBlockCallingNameForExternalCalls()
    {
        return (!$this->blockCallingNameForExternalCalls) ?: $this->blockCallingNameForExternalCalls->value();
    }

    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity)
    {
        $allowConfigurableCLIDForRedirectingIdentity and $this->allowConfigurableCLIDForRedirectingIdentity = new xs:boolean($allowConfigurableCLIDForRedirectingIdentity);
    }

    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return (!$this->allowConfigurableCLIDForRedirectingIdentity) ?: $this->allowConfigurableCLIDForRedirectingIdentity->value();
    }
}
