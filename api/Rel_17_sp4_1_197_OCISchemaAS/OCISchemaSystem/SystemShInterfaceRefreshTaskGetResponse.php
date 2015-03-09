<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemShInterfaceRefreshTaskGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted and numberPublicIdentities are omitted.  If isRunning is true, numberPublicIdentities indicates the total number of public identities in the system that will be refreshed by the system refresh task; numberPublicIdentityRefreshesStarted indicates the total number of public identities for which a refresh has been started.
 */
class SystemShInterfaceRefreshTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $isRunning                            = null;
    protected $numberPublicIdentityRefreshesStarted = null;
    protected $numberPublicIdentities               = null;

    /**
     * @return SystemShInterfaceRefreshTaskGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsRunning($isRunning = null)
    {
        $this->isRunning = (boolean) $isRunning;
    }

    /**
     * 
     */
    public function getIsRunning()
    {
        return (!$this->isRunning) ?: $this->isRunning;
    }

    /**
     * 
     */
    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted = null)
    {
        $this->numberPublicIdentityRefreshesStarted = (int) $numberPublicIdentityRefreshesStarted;
    }

    /**
     * 
     */
    public function getNumberPublicIdentityRefreshesStarted()
    {
        return (!$this->numberPublicIdentityRefreshesStarted) ?: $this->numberPublicIdentityRefreshesStarted;
    }

    /**
     * 
     */
    public function setNumberPublicIdentities($numberPublicIdentities = null)
    {
        $this->numberPublicIdentities = (int) $numberPublicIdentities;
    }

    /**
     * 
     */
    public function getNumberPublicIdentities()
    {
        return (!$this->numberPublicIdentities) ?: $this->numberPublicIdentities;
    }
}
