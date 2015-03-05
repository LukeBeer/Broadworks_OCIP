<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserGetListInServiceProviderRequest.
 *         Contains a table with column headings : "User Id", "Group Id",
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number Activated", "Email Address", "Hiragana Last Name", "Hiragana First Name", "In Trunk Group"
 *         in a row for each user.
 */
class UserGetListInServiceProviderResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userTable
    ) {
        $this->userTable = $userTable;
        $this->args      = func_get_args();
    }

    public function setUserTable($userTable)
    {
        $userTable and $this->userTable = new core:OCITable($userTable);
    }

    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->value();
    }
}
