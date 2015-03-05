<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the fields for an Access SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingAccessSIPStatusModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $sipStatusCode,
             $treatmentId=null
    ) {
        $this->sipStatusCode = $sipStatusCode;
        $this->treatmentId   = new TreatmentId($treatmentId);
        $this->args          = func_get_args();
    }

    public function setSipStatusCode($sipStatusCode)
    {
        $sipStatusCode and $this->sipStatusCode = new SIPFailureStatusCode($sipStatusCode);
    }

    public function getSipStatusCode()
    {
        return (!$this->sipStatusCode) ?: $this->sipStatusCode->value();
    }

    public function setTreatmentId($treatmentId)
    {
        $treatmentId and $this->treatmentId = new TreatmentId($treatmentId);
    }

    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->value();
    }
}
