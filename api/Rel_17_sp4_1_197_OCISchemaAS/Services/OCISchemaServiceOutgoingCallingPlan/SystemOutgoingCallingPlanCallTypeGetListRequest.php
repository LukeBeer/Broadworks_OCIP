<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanCallTypeGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of call types of outgoing calling plan
 *         Response is SystemOutgoingCallingPlanCallTypeGetListRequest or ErrorResponse.
 */
class SystemOutgoingCallingPlanCallTypeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\SystemOutgoingCallingPlanCallTypeGetListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemOutgoingCallingPlanCallTypeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
