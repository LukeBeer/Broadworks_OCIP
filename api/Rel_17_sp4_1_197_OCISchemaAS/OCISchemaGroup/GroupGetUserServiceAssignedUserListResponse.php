<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Return a table containing the list of users assigned the user service
 *         or service pack.  The table contains columns: "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana Last Name";
 *         "Hiragana First Name"
 *         This is a response to the GroupGetUserServiceAssignedUserListRequest.
 */
class GroupGetUserServiceAssignedUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userListTable
    ) {
        $this->userListTable = $userListTable;
        $this->args          = func_get_args();
    }

    public function setUserListTable($userListTable)
    {
        $userListTable and $this->userListTable = new core:OCITable($userListTable);
    }

    public function getUserListTable()
    {
        return (!$this->userListTable) ?: $this->userListTable->value();
    }
}
