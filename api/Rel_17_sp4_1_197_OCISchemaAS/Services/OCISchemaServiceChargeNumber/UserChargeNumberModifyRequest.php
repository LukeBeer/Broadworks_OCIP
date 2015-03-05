<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceChargeNumber; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserChargeNumberModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $phoneNumber=null,
             $useChargeNumberForEnhancedTranslations=null,
             $sendChargeNumberToNetwork=null
    ) {
        $this->userId                                 = new UserId($userId);
        $this->phoneNumber                            = new DN($phoneNumber);
        $this->useChargeNumberForEnhancedTranslations = $useChargeNumberForEnhancedTranslations;
        $this->sendChargeNumberToNetwork              = $sendChargeNumberToNetwork;
        $this->args                                   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations)
    {
        $useChargeNumberForEnhancedTranslations and $this->useChargeNumberForEnhancedTranslations = new xs:boolean($useChargeNumberForEnhancedTranslations);
    }

    public function getUseChargeNumberForEnhancedTranslations()
    {
        return (!$this->useChargeNumberForEnhancedTranslations) ?: $this->useChargeNumberForEnhancedTranslations->value();
    }

    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork)
    {
        $sendChargeNumberToNetwork and $this->sendChargeNumberToNetwork = new xs:boolean($sendChargeNumberToNetwork);
    }

    public function getSendChargeNumberToNetwork()
    {
        return (!$this->sendChargeNumberToNetwork) ?: $this->sendChargeNumberToNetwork->value();
    }
}
