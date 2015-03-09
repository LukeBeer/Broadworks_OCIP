<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSoftwareVersionGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemSoftwareVersionGetRequest.
 */
class SystemSoftwareVersionGetResponse extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $version = null;

    /**
     * @return SystemSoftwareVersionGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setVersion($version = null)
    {
        $this->version = (string) $version;
    }

    /**
     * 
     */
    public function getVersion()
    {
        return (!$this->version) ?: $this->version;
    }
}
