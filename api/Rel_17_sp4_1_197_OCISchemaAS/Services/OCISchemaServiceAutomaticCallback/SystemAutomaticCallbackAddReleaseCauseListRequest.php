<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackReleaseCause;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticCallback\SystemAutomaticCallbackAddReleaseCauseListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Adds automatic callback release cause to the releaseCause attribute.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAutomaticCallbackAddReleaseCauseListRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $releaseCause = null;

    public function __construct(
         $releaseCause = null
    ) {
        $this->setReleaseCause($releaseCause);
    }

    /**
     * @return SystemAutomaticCallbackAddReleaseCauseListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Callback Release Cause.
     */
    public function setReleaseCause($releaseCause = null)
    {
        $this->releaseCause = ($releaseCause InstanceOf AutomaticCallbackReleaseCause)
             ? $releaseCause
             : new AutomaticCallbackReleaseCause($releaseCause);
    }

    /**
     * Callback Release Cause.
     */
    public function getReleaseCause()
    {
        return (!$this->releaseCause) ?: $this->releaseCause->getValue();
    }
}
