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
 * Response to UserAccessDeviceFileGetListRequest.
 *         Contains a table of user modifiable Device Management files.
 *         The column headings are: "File Format", "Template URL".
 */
class UserAccessDeviceFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceFilesTable
    ) {
        $this->deviceFilesTable = $deviceFilesTable;
        $this->args             = func_get_args();
    }

    public function setDeviceFilesTable($deviceFilesTable)
    {
        $deviceFilesTable and $this->deviceFilesTable = new core:OCITable($deviceFilesTable);
    }

    public function getDeviceFilesTable()
    {
        return (!$this->deviceFilesTable) ?: $this->deviceFilesTable->value();
    }
}