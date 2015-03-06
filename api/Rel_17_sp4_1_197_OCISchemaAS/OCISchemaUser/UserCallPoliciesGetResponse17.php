<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConnectedLineIdentificationPrivacyOnRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallBeingForwardedResponseCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallPoliciesGetRequest17.
 */
class UserCallPoliciesGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $redirectedCallsCOLPPrivacy,
             $callBeingForwardedResponseCallType
    ) {
        $this->redirectedCallsCOLPPrivacy         = new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
        $this->callBeingForwardedResponseCallType = $callBeingForwardedResponseCallType;
        $this->args                               = func_get_args();
    }

    public function setRedirectedCallsCOLPPrivacy($redirectedCallsCOLPPrivacy)
    {
        $redirectedCallsCOLPPrivacy and $this->redirectedCallsCOLPPrivacy = new ConnectedLineIdentificationPrivacyOnRedirectedCalls($redirectedCallsCOLPPrivacy);
    }

    public function getRedirectedCallsCOLPPrivacy()
    {
        return (!$this->redirectedCallsCOLPPrivacy) ?: $this->redirectedCallsCOLPPrivacy->value();
    }

    public function setCallBeingForwardedResponseCallType($callBeingForwardedResponseCallType)
    {
        $callBeingForwardedResponseCallType and $this->callBeingForwardedResponseCallType = new CallBeingForwardedResponseCallType($callBeingForwardedResponseCallType);
    }

    public function getCallBeingForwardedResponseCallType()
    {
        return (!$this->callBeingForwardedResponseCallType) ?: $this->callBeingForwardedResponseCallType->value();
    }
}