<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalRequest16.
 */
class UserVoiceMessagingUserGetVoicePortalResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $usePersonalizedName,
             $voicePortalAutoLogin,
             $personalizedNameAudioFileDescription=null,
             $personalizedNameMediaType=null
    ) {
        $this->usePersonalizedName                  = $usePersonalizedName;
        $this->voicePortalAutoLogin                 = $voicePortalAutoLogin;
        $this->personalizedNameAudioFileDescription = new FileDescription($personalizedNameAudioFileDescription);
        $this->personalizedNameMediaType            = new MediaFileType($personalizedNameMediaType);
        $this->args                                 = func_get_args();
    }

    public function setUsePersonalizedName($usePersonalizedName)
    {
        $usePersonalizedName and $this->usePersonalizedName = new xs:boolean($usePersonalizedName);
    }

    public function getUsePersonalizedName()
    {
        return (!$this->usePersonalizedName) ?: $this->usePersonalizedName->value();
    }

    public function setVoicePortalAutoLogin($voicePortalAutoLogin)
    {
        $voicePortalAutoLogin and $this->voicePortalAutoLogin = new xs:boolean($voicePortalAutoLogin);
    }

    public function getVoicePortalAutoLogin()
    {
        return (!$this->voicePortalAutoLogin) ?: $this->voicePortalAutoLogin->value();
    }

    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription)
    {
        $personalizedNameAudioFileDescription and $this->personalizedNameAudioFileDescription = new FileDescription($personalizedNameAudioFileDescription);
    }

    public function getPersonalizedNameAudioFileDescription()
    {
        return (!$this->personalizedNameAudioFileDescription) ?: $this->personalizedNameAudioFileDescription->value();
    }

    public function setPersonalizedNameMediaType($personalizedNameMediaType)
    {
        $personalizedNameMediaType and $this->personalizedNameMediaType = new MediaFileType($personalizedNameMediaType);
    }

    public function getPersonalizedNameMediaType()
    {
        return (!$this->personalizedNameMediaType) ?: $this->personalizedNameMediaType->value();
    }
}
