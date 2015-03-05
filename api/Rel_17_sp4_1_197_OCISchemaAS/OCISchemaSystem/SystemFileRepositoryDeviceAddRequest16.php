<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceAddRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $rootDirectory=null,
             $port=null
    ) {
        $this->name          = new FileRepositoryName($name);
        $this->rootDirectory = new CPEFileDirectory($rootDirectory);
        $this->port          = new Port($port);
        $this->args          = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new FileRepositoryName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setRootDirectory($rootDirectory)
    {
        $rootDirectory and $this->rootDirectory = new CPEFileDirectory($rootDirectory);
    }

    public function getRootDirectory()
    {
        return (!$this->rootDirectory) ?: $this->rootDirectory->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }
}
