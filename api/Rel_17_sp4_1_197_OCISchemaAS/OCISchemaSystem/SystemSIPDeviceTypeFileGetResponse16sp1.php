<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCustomization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSIPDeviceTypeFileGetRequest16sp1.
 */
class SystemSIPDeviceTypeFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $remoteFileFormat,
             $fileCategory,
             $fileCustomization,
             $fileSource,
             $configurationFileName=null,
             $useHttpDigestAuthentication,
             $macBasedFileAuthentication,
             $userNamePasswordFileAuthentication,
             $macInNonRequestURI,
             $macFormatInNonRequestURI=null,
             $accessUrl,
             $repositoryUrl=null,
             $templateUrl=null
    ) {
        $this->remoteFileFormat                   = new DeviceManagementFileFormat($remoteFileFormat);
        $this->fileCategory                       = new DeviceManagementFileCategory($fileCategory);
        $this->fileCustomization                  = new DeviceManagementFileCustomization($fileCustomization);
        $this->fileSource                         = new DeviceTypeFileEnhancedConfigurationMode($fileSource);
        $this->configurationFileName              = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->useHttpDigestAuthentication        = $useHttpDigestAuthentication;
        $this->macBasedFileAuthentication         = $macBasedFileAuthentication;
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        $this->macInNonRequestURI                 = $macInNonRequestURI;
        $this->macFormatInNonRequestURI           = new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->accessUrl                          = new URL($accessUrl);
        $this->repositoryUrl                      = new URL($repositoryUrl);
        $this->templateUrl                        = new URL($templateUrl);
        $this->args                               = func_get_args();
    }

    public function setRemoteFileFormat($remoteFileFormat)
    {
        $remoteFileFormat and $this->remoteFileFormat = new DeviceManagementFileFormat($remoteFileFormat);
    }

    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->value();
    }

    public function setFileCategory($fileCategory)
    {
        $fileCategory and $this->fileCategory = new DeviceManagementFileCategory($fileCategory);
    }

    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->value();
    }

    public function setFileCustomization($fileCustomization)
    {
        $fileCustomization and $this->fileCustomization = new DeviceManagementFileCustomization($fileCustomization);
    }

    public function getFileCustomization()
    {
        return (!$this->fileCustomization) ?: $this->fileCustomization->value();
    }

    public function setFileSource($fileSource)
    {
        $fileSource and $this->fileSource = new DeviceTypeFileEnhancedConfigurationMode($fileSource);
    }

    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->value();
    }

    public function setConfigurationFileName($configurationFileName)
    {
        $configurationFileName and $this->configurationFileName = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
    }

    public function getConfigurationFileName()
    {
        return (!$this->configurationFileName) ?: $this->configurationFileName->value();
    }

    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $useHttpDigestAuthentication and $this->useHttpDigestAuthentication = new xs:boolean($useHttpDigestAuthentication);
    }

    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->value();
    }

    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $macBasedFileAuthentication and $this->macBasedFileAuthentication = new xs:boolean($macBasedFileAuthentication);
    }

    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->value();
    }

    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $userNamePasswordFileAuthentication and $this->userNamePasswordFileAuthentication = new xs:boolean($userNamePasswordFileAuthentication);
    }

    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->value();
    }

    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $macInNonRequestURI and $this->macInNonRequestURI = new xs:boolean($macInNonRequestURI);
    }

    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->value();
    }

    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $macFormatInNonRequestURI and $this->macFormatInNonRequestURI = new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->value();
    }

    public function setAccessUrl($accessUrl)
    {
        $accessUrl and $this->accessUrl = new URL($accessUrl);
    }

    public function getAccessUrl()
    {
        return (!$this->accessUrl) ?: $this->accessUrl->value();
    }

    public function setRepositoryUrl($repositoryUrl)
    {
        $repositoryUrl and $this->repositoryUrl = new URL($repositoryUrl);
    }

    public function getRepositoryUrl()
    {
        return (!$this->repositoryUrl) ?: $this->repositoryUrl->value();
    }

    public function setTemplateUrl($templateUrl)
    {
        $templateUrl and $this->templateUrl = new URL($templateUrl);
    }

    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->value();
    }
}
