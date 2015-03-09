<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\TwoStageDialingDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingAddDnResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add Two Stage Dialing number to the system.
 *              The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTwoStageDialingAddDnRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $phoneNumber = null;
    protected $description = null;

    public function __construct(
         $phoneNumber,
         $description = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setDescription($description);
    }

    /**
     * @return SystemTwoStageDialingAddDnResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Two Stage Dialing phone number's description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf TwoStageDialingDescription)
             ? $description
             : new TwoStageDialingDescription($description);
    }

    /**
     * Two Stage Dialing phone number's description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
