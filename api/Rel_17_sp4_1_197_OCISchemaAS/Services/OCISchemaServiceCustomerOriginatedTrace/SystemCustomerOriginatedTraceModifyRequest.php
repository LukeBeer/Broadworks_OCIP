<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomerOriginatedTrace; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomerOriginatedTrace\SystemCustomerOriginatedTraceModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Customer Originated Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCustomerOriginatedTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $screenMaliciousCallers = null;

    public function __construct(
         $screenMaliciousCallers = null
    ) {
        $this->setScreenMaliciousCallers($screenMaliciousCallers);
    }

    /**
     * @return SystemCustomerOriginatedTraceModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScreenMaliciousCallers($screenMaliciousCallers = null)
    {
        $this->screenMaliciousCallers = (boolean) $screenMaliciousCallers;
    }

    /**
     * 
     */
    public function getScreenMaliciousCallers()
    {
        return (!$this->screenMaliciousCallers) ?: $this->screenMaliciousCallers;
    }
}
