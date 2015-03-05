<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserPrivacyGetAvailableMonitorsUserListRequest.
 *         Returns a 5 column table with column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name".
 */
class UserPrivacyGetAvailableMonitorsUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $availableMonitorsTable
    ) {
        $this->availableMonitorsTable = $availableMonitorsTable;
        $this->args                   = func_get_args();
    }

    public function setAvailableMonitorsTable($availableMonitorsTable)
    {
        $availableMonitorsTable and $this->availableMonitorsTable = new core:OCITable($availableMonitorsTable);
    }

    public function getAvailableMonitorsTable()
    {
        return (!$this->availableMonitorsTable) ?: $this->availableMonitorsTable->value();
    }
}
