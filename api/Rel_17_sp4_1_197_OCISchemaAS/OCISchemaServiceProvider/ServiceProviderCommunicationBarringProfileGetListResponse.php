<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderCommunicationBarringProfileGetListRequest.
 *         The response contains a table of all Communication Barring Profiles
 *         for the service provider. The column headings are "Default" , "Name" and "Description"
 */
class ServiceProviderCommunicationBarringProfileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $profileTable = null;

    /**
     * @return ServiceProviderCommunicationBarringProfileGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfileTable(core:OCITable $profileTable = null)
    {
        $this->profileTable =  $profileTable;
    }

    /**
     * 
     */
    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->getValue();
    }
}
