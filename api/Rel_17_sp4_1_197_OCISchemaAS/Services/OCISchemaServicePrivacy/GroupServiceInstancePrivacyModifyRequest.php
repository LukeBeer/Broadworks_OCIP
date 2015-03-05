<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the data associated with Privacy for a service instance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupServiceInstancePrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $enableDirectoryPrivacy=null,
             $enableAutoAttendantExtensionDialingPrivacy=null,
             $enableAutoAttendantNameDialingPrivacy=null
    ) {
        $this->serviceUserId                              = new UserId($serviceUserId);
        $this->enableDirectoryPrivacy                     = $enableDirectoryPrivacy;
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        $this->enableAutoAttendantNameDialingPrivacy      = $enableAutoAttendantNameDialingPrivacy;
        $this->args                                       = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $enableDirectoryPrivacy and $this->enableDirectoryPrivacy = new xs:boolean($enableDirectoryPrivacy);
    }

    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy->value();
    }

    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $enableAutoAttendantExtensionDialingPrivacy and $this->enableAutoAttendantExtensionDialingPrivacy = new xs:boolean($enableAutoAttendantExtensionDialingPrivacy);
    }

    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy->value();
    }

    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $enableAutoAttendantNameDialingPrivacy and $this->enableAutoAttendantNameDialingPrivacy = new xs:boolean($enableAutoAttendantNameDialingPrivacy);
    }

    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy->value();
    }
}
