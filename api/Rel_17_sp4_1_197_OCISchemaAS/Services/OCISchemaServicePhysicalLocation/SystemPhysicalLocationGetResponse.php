<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePhysicalLocation\SystemPhysicalLocationGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPhysicalLocationGetRequest.
 *         Contains a list of system Physical Location parameters.
 */
class SystemPhysicalLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $alwaysAllowEmergencyCalls = null;

    /**
     * @return SystemPhysicalLocationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlwaysAllowEmergencyCalls($alwaysAllowEmergencyCalls = null)
    {
        $this->alwaysAllowEmergencyCalls = (boolean) $alwaysAllowEmergencyCalls;
    }

    /**
     * 
     */
    public function getAlwaysAllowEmergencyCalls()
    {
        return (!$this->alwaysAllowEmergencyCalls) ?: $this->alwaysAllowEmergencyCalls;
    }
}
