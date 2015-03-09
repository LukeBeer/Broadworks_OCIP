<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaSetGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMediaSetGetRequest.
 */
class SystemMediaSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $mediaSetName = null;

    /**
     * @return SystemMediaSetGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Media Set name
     */
    public function setMediaSetName($mediaSetName = null)
    {
        $this->mediaSetName = ($mediaSetName InstanceOf MediaSetName)
             ? $mediaSetName
             : new MediaSetName($mediaSetName);
    }

    /**
     * Media Set name
     */
    public function getMediaSetName()
    {
        return (!$this->mediaSetName) ?: $this->mediaSetName->getValue();
    }
}
