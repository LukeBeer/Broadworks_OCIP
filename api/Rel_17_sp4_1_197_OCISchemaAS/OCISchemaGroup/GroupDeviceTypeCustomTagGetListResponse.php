<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDeviceTypeCustomTagGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device type basis for a group.
 *         The column headings are: "Tag Name", "Tag Value"
 */
class GroupDeviceTypeCustomTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $groupDeviceTypeCustomTagsTable = null;

    /**
     * @return GroupDeviceTypeCustomTagGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDeviceTypeCustomTagsTable(core:OCITable $groupDeviceTypeCustomTagsTable = null)
    {
        $this->groupDeviceTypeCustomTagsTable =  $groupDeviceTypeCustomTagsTable;
    }

    /**
     * 
     */
    public function getGroupDeviceTypeCustomTagsTable()
    {
        return (!$this->groupDeviceTypeCustomTagsTable) ?: $this->groupDeviceTypeCustomTagsTable->getValue();
    }
}
