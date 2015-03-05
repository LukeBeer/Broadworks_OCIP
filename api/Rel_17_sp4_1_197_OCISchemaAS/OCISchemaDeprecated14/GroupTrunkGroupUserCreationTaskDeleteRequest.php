<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $taskName
    ) {
        $this->serviceUserId = new UserId($serviceUserId);
        $this->taskName      = $taskName;
        $this->args          = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setTaskName($taskName)
    {
        $taskName and $this->taskName = new TrunkGroupUserCreationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }
}
