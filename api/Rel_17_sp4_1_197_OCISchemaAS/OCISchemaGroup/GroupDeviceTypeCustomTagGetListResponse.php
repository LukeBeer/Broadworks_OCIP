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
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device type basis for a group.
 *         The column headings are: "Tag Name", "Tag Value"
 */
class GroupDeviceTypeCustomTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupDeviceTypeCustomTagsTable
    ) {
        $this->groupDeviceTypeCustomTagsTable = $groupDeviceTypeCustomTagsTable;
        $this->args                           = func_get_args();
    }

    public function setGroupDeviceTypeCustomTagsTable($groupDeviceTypeCustomTagsTable)
    {
        $groupDeviceTypeCustomTagsTable and $this->groupDeviceTypeCustomTagsTable = new core:OCITable($groupDeviceTypeCustomTagsTable);
    }

    public function getGroupDeviceTypeCustomTagsTable()
    {
        return (!$this->groupDeviceTypeCustomTagsTable) ?: $this->groupDeviceTypeCustomTagsTable->value();
    }
}
