<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the policies for a Group.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $callingPlanAccess=null,
             $extensionAccess=null,
             $ldapIntegrationAccess=null,
             $voiceMessagingAccess=null,
             $departmentAdminUserAccess=null,
             $departmentAdminTrunkGroupAccess=null,
             $departmentAdminPhoneNumberExtensionAccess=null,
             $departmentAdminCallingLineIdNumberAccess=null,
             $userAuthenticationAccess=null,
             $userGroupDirectoryAccess=null,
             $userProfileAccess=null,
             $userEnhancedCallLogAccess=null
    ) {
        $this->serviceProviderId                         = new ServiceProviderId($serviceProviderId);
        $this->groupId                                   = new GroupId($groupId);
        $this->callingPlanAccess                         = new GroupCallingPlanAccess($callingPlanAccess);
        $this->extensionAccess                           = new GroupExtensionAccess($extensionAccess);
        $this->ldapIntegrationAccess                     = new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
        $this->voiceMessagingAccess                      = new GroupVoiceMessagingAccess($voiceMessagingAccess);
        $this->departmentAdminUserAccess                 = new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->departmentAdminTrunkGroupAccess           = new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->departmentAdminPhoneNumberExtensionAccess = new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
        $this->departmentAdminCallingLineIdNumberAccess  = new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
        $this->userAuthenticationAccess                  = new GroupUserAuthenticationAccess($userAuthenticationAccess);
        $this->userGroupDirectoryAccess                  = new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->userProfileAccess                         = new GroupUserProfileAccess($userProfileAccess);
        $this->userEnhancedCallLogAccess                 = new GroupUserCallLogAccess($userEnhancedCallLogAccess);
        $this->args                                      = func_get_args();
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

    public function setCallingPlanAccess($callingPlanAccess)
    {
        $callingPlanAccess and $this->callingPlanAccess = new GroupCallingPlanAccess($callingPlanAccess);
    }

    public function getCallingPlanAccess()
    {
        return (!$this->callingPlanAccess) ?: $this->callingPlanAccess->value();
    }

    public function setExtensionAccess($extensionAccess)
    {
        $extensionAccess and $this->extensionAccess = new GroupExtensionAccess($extensionAccess);
    }

    public function getExtensionAccess()
    {
        return (!$this->extensionAccess) ?: $this->extensionAccess->value();
    }

    public function setLdapIntegrationAccess($ldapIntegrationAccess)
    {
        $ldapIntegrationAccess and $this->ldapIntegrationAccess = new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
    }

    public function getLdapIntegrationAccess()
    {
        return (!$this->ldapIntegrationAccess) ?: $this->ldapIntegrationAccess->value();
    }

    public function setVoiceMessagingAccess($voiceMessagingAccess)
    {
        $voiceMessagingAccess and $this->voiceMessagingAccess = new GroupVoiceMessagingAccess($voiceMessagingAccess);
    }

    public function getVoiceMessagingAccess()
    {
        return (!$this->voiceMessagingAccess) ?: $this->voiceMessagingAccess->value();
    }

    public function setDepartmentAdminUserAccess($departmentAdminUserAccess)
    {
        $departmentAdminUserAccess and $this->departmentAdminUserAccess = new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
    }

    public function getDepartmentAdminUserAccess()
    {
        return (!$this->departmentAdminUserAccess) ?: $this->departmentAdminUserAccess->value();
    }

    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess)
    {
        $departmentAdminTrunkGroupAccess and $this->departmentAdminTrunkGroupAccess = new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
    }

    public function getDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->departmentAdminTrunkGroupAccess) ?: $this->departmentAdminTrunkGroupAccess->value();
    }

    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess)
    {
        $departmentAdminPhoneNumberExtensionAccess and $this->departmentAdminPhoneNumberExtensionAccess = new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
    }

    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return (!$this->departmentAdminPhoneNumberExtensionAccess) ?: $this->departmentAdminPhoneNumberExtensionAccess->value();
    }

    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess)
    {
        $departmentAdminCallingLineIdNumberAccess and $this->departmentAdminCallingLineIdNumberAccess = new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
    }

    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return (!$this->departmentAdminCallingLineIdNumberAccess) ?: $this->departmentAdminCallingLineIdNumberAccess->value();
    }

    public function setUserAuthenticationAccess($userAuthenticationAccess)
    {
        $userAuthenticationAccess and $this->userAuthenticationAccess = new GroupUserAuthenticationAccess($userAuthenticationAccess);
    }

    public function getUserAuthenticationAccess()
    {
        return (!$this->userAuthenticationAccess) ?: $this->userAuthenticationAccess->value();
    }

    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess)
    {
        $userGroupDirectoryAccess and $this->userGroupDirectoryAccess = new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
    }

    public function getUserGroupDirectoryAccess()
    {
        return (!$this->userGroupDirectoryAccess) ?: $this->userGroupDirectoryAccess->value();
    }

    public function setUserProfileAccess($userProfileAccess)
    {
        $userProfileAccess and $this->userProfileAccess = new GroupUserProfileAccess($userProfileAccess);
    }

    public function getUserProfileAccess()
    {
        return (!$this->userProfileAccess) ?: $this->userProfileAccess->value();
    }

    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess)
    {
        $userEnhancedCallLogAccess and $this->userEnhancedCallLogAccess = new GroupUserCallLogAccess($userEnhancedCallLogAccess);
    }

    public function getUserEnhancedCallLogAccess()
    {
        return (!$this->userEnhancedCallLogAccess) ?: $this->userEnhancedCallLogAccess->value();
    }
}
