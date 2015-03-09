<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions\SystemVirtualOnNetCallTypeDeleteResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Virtual On-Net Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $virtualOnNetCallTypeName = null;

    public function __construct(
         $virtualOnNetCallTypeName
    ) {
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * @return SystemVirtualOnNetCallTypeDeleteResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = ($virtualOnNetCallTypeName InstanceOf VirtualOnNetCallTypeName)
             ? $virtualOnNetCallTypeName
             : new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->getValue();
    }
}
