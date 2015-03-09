<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCIReportingMessageName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIReportingAddMessageNameListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a list of reported messages for a host in the OCI Reporting
 *         Access Control List. The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class SystemOCIReportingAddMessageNameListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $netAddress            = null;
    protected $messageNameStartsWith = null;

    public function __construct(
         $netAddress,
         $messageNameStartsWith
    ) {
        $this->setNetAddress($netAddress);
        $this->setMessageNameStartsWith($messageNameStartsWith);
    }

    /**
     * @return SystemOCIReportingAddMessageNameListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * OCI Request name.
     */
    public function setMessageNameStartsWith($messageNameStartsWith = null)
    {
        $this->messageNameStartsWith = ($messageNameStartsWith InstanceOf OCIReportingMessageName)
             ? $messageNameStartsWith
             : new OCIReportingMessageName($messageNameStartsWith);
    }

    /**
     * OCI Request name.
     */
    public function getMessageNameStartsWith()
    {
        return (!$this->messageNameStartsWith) ?: $this->messageNameStartsWith->getValue();
    }
}
