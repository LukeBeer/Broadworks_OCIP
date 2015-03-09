<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerRouteListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $smdiServerRouteTable = null;

    /**
     * @return SystemSMDIMessageDeskGetServerRouteListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSmdiServerRouteTable(core:OCITable $smdiServerRouteTable = null)
    {
        $this->smdiServerRouteTable =  $smdiServerRouteTable;
    }

    /**
     * 
     */
    public function getSmdiServerRouteTable()
    {
        return (!$this->smdiServerRouteTable) ?: $this->smdiServerRouteTable->getValue();
    }
}
