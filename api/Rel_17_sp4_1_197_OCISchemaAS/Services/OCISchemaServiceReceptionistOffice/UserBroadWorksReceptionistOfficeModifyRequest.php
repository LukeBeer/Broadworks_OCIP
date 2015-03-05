<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistOffice; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replace the Receptionist Office monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksReceptionistOfficeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             ReplacementUserIdList $monitoredUserIdList=null
    ) {
        $this->userId              = new UserId($userId);
        $this->monitoredUserIdList = $monitoredUserIdList;
        $this->args                = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setMonitoredUserIdList($monitoredUserIdList)
    {
        $monitoredUserIdList and $this->monitoredUserIdList = new ReplacementUserIdList($monitoredUserIdList);
    }

    public function getMonitoredUserIdList()
    {
        return (!$this->monitoredUserIdList) ?: $this->monitoredUserIdList->value();
    }
}
