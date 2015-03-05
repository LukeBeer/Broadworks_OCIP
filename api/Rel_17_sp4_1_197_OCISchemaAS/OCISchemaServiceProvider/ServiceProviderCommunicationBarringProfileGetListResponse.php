<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderCommunicationBarringProfileGetListRequest.
 *         The response contains a table of all Communication Barring Profiles
 *         for the service provider. The column headings are "Default" , "Name" and "Description"
 */
class ServiceProviderCommunicationBarringProfileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $profileTable
    ) {
        $this->profileTable = $profileTable;
        $this->args         = func_get_args();
    }

    public function setProfileTable($profileTable)
    {
        $profileTable and $this->profileTable = new core:OCITable($profileTable);
    }

    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->value();
    }
}
