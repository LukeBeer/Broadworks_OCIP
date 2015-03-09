<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingModifyActiveInstanceListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to set the active status of Meet-Me Conferencing instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingModifyActiveInstanceListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceActivation = null;

    public function __construct(
          $serviceActivation = null
    ) {
        $this->setServiceActivation($serviceActivation);
    }

    /**
     * @return GroupMeetMeConferencingModifyActiveInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Instance active status indicator
     */
    public function setServiceActivation(ServiceActivation $serviceActivation = null)
    {
        $this->serviceActivation =  $serviceActivation;
    }

    /**
     * Service Instance active status indicator
     */
    public function getServiceActivation()
    {
        return (!$this->serviceActivation) ?: $this->serviceActivation->getValue();
    }
}
