<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetGroupListRequest.
 *         Contains a table with one row per group.
 *         The table columns are: "Group Id", "Group Name", "Organization Id", "Organization Type".
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 */
class SystemPreferredCarrierGetGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $groupsUsingCarrierTable = null;

    /**
     * @return SystemPreferredCarrierGetGroupListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupsUsingCarrierTable(core:OCITable $groupsUsingCarrierTable = null)
    {
        $this->groupsUsingCarrierTable =  $groupsUsingCarrierTable;
    }

    /**
     * 
     */
    public function getGroupsUsingCarrierTable()
    {
        return (!$this->groupsUsingCarrierTable) ?: $this->groupsUsingCarrierTable->getValue();
    }
}
