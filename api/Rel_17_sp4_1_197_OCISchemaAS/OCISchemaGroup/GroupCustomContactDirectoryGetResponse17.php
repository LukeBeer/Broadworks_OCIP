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
 * Response to the GroupCustomContactDirectoryGetRequest17.
 *         The response contains all the contacts in the group's given custom 
 *         contact directory. Contains a table with column headings: "User Id", 
 *         "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Virtual On-Net Phone Number", "Group Id", 
 *         "Is Virtual On-Net User", "Department", "Phone Number", "Extension",
 *         "Mobile", "Email Address", "Yahoo Id", "Title".
 *         If the entry represents a Virtual On-Net user then "User Id" is blank,  
 *         the "Virtual On-Net Phone Number" contains the phone Number of the 
 *         Virtual On-Net user, the "Group Id" contains the Virtual On-Net user's 
 *         group and the "Is Virtual On-Net User" contains true.
 *         If the entry represents a BroadWorks user then the "User Id" contains 
 *         his BroadWorks userId, the "Virtual On-Net Phone Number" and 
 *         "Group Id" fields are field is blank and the "Is Virtual On-Net User" 
 *         contains false.
 */
class GroupCustomContactDirectoryGetResponse17 extends ComplexType implements ComplexInterface
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