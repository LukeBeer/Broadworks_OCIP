<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Codec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCodecAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a codec to the ordered list of codecs supported by the system.
 *         The ordered list of codecs is sent to MGCP devices when creating connections.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCodecAddRequest extends ComplexType implements ComplexInterface
{
    public    $name  = __CLASS__;
    protected $codec = null;

    public function __construct(
         $codec
    ) {
        $this->setCodec($codec);
    }

    /**
     * @return SystemCodecAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Codec.
     */
    public function setCodec($codec = null)
    {
        $this->codec = ($codec InstanceOf Codec)
             ? $codec
             : new Codec($codec);
    }

    /**
     * Codec.
     */
    public function getCodec()
    {
        return (!$this->codec) ?: $this->codec->getValue();
    }
}
