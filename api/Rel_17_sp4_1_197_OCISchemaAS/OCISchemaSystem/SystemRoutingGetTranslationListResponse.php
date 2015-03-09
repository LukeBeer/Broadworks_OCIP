<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetTranslationListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $routingTable = null;

    /**
     * @return SystemRoutingGetTranslationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingTable(core:OCITable $routingTable = null)
    {
        $this->routingTable =  $routingTable;
    }

    /**
     * 
     */
    public function getRoutingTable()
    {
        return (!$this->routingTable) ?: $this->routingTable->getValue();
    }
}
