<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of service provider users for a file repository in the system.
 *         The response is either a ServiceProviderFileRepositoryDeviceUserGetListResponse or an ErrorResponse.
 */
class ServiceProviderFileRepositoryDeviceUserGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $fileRepositoryName
    ) {
        $this->serviceProviderId  = new ServiceProviderId($serviceProviderId);
        $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
        $this->args               = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setFileRepositoryName($fileRepositoryName)
    {
        $fileRepositoryName and $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
    }

    public function getFileRepositoryName()
    {
        return (!$this->fileRepositoryName) ?: $this->fileRepositoryName->value();
    }
}
