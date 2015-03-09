<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPEntryField;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserLDAPIntegrationGetDirectoryEntryRequest.
 */
class UserLDAPIntegrationGetDirectoryEntryResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $data = null;

    /**
     * @return UserLDAPIntegrationGetDirectoryEntryResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * One name value pair for a LDAP entry.
     */
    public function setData(LDAPEntryField $data = null)
    {
        $this->data =  $data;
    }

    /**
     * One name value pair for a LDAP entry.
     */
    public function getData()
    {
        return (!$this->data) ?: $this->data->getValue();
    }
}
