<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMultimediaPolicyModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Multimedia Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMultimediaPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $restrictNonAudioVideoMediaTypes = null;

    public function __construct(
         $restrictNonAudioVideoMediaTypes = null
    ) {
        $this->setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes);
    }

    /**
     * @return SystemMultimediaPolicyModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes = null)
    {
        $this->restrictNonAudioVideoMediaTypes = (boolean) $restrictNonAudioVideoMediaTypes;
    }

    /**
     * 
     */
    public function getRestrictNonAudioVideoMediaTypes()
    {
        return (!$this->restrictNonAudioVideoMediaTypes) ?: $this->restrictNonAudioVideoMediaTypes;
    }
}
