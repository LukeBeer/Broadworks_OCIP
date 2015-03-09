<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify outgoing Calling Plan redirecting call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
