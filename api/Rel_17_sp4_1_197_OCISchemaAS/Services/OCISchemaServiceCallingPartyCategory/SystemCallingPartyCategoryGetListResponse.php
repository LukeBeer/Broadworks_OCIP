<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallingPartyCategoryGetListRequest.
 *         Contains a table of Calling Party Category defined in system.
 *         The column headings are: "Category Name", "User Category", "Collect Call", "Default" and "Web Display Key".
 */
class SystemCallingPartyCategoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $callingPartyCategoryTable = null;

    /**
     * @return SystemCallingPartyCategoryGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallingPartyCategoryTable(core:OCITable $callingPartyCategoryTable = null)
    {
        $this->callingPartyCategoryTable =  $callingPartyCategoryTable;
    }

    /**
     * 
     */
    public function getCallingPartyCategoryTable()
    {
        return (!$this->callingPartyCategoryTable) ?: $this->callingPartyCategoryTable->getValue();
    }
}
