<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterRoutingRealmModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingRealmModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $instance      = null;
    protected $realm         = null;
    protected $applicationId = null;
    protected $default       = null;

    public function __construct(
         $instance,
         $realm,
         $applicationId,
         $default = null
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setDefault($default);
    }

    /**
     * @return SystemBwDiameterRoutingRealmModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The diameter peer instance type for an entry in the Peer Table.
     */
    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
    }

    /**
     * The diameter peer instance type for an entry in the Peer Table.
     */
    public function getInstance()
    {
        return (!$this->instance) ?: $this->instance->getValue();
    }

    /**
     * Network domain name.
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
    }

    /**
     * Network domain name.
     */
    public function getRealm()
    {
        return (!$this->realm) ?: $this->realm->getValue();
    }

    /**
     * Choices for locally supported Diameter Application Ids.
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
    }

    /**
     * Choices for locally supported Diameter Application Ids.
     */
    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->getValue();
    }

    /**
     * 
     */
    public function setDefault($default = null)
    {
        $this->default = (boolean) $default;
    }

    /**
     * 
     */
    public function getDefault()
    {
        return (!$this->default) ?: $this->default;
    }
}
