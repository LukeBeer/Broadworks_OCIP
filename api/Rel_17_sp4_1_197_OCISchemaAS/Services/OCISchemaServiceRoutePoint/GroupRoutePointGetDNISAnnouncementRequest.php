<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISAnnouncementResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a route point's DNIS Announcements
 *         The response is either a GroupRoutePointGetDNISAnnouncementResponse or an ErrorResponse.
 */
class GroupRoutePointGetDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISAnnouncementResponse';
    public    $name    = __CLASS__;
    protected $dnisKey = null;

    public function __construct(
          $dnisKey
    ) {
        $this->setDnisKey($dnisKey);
    }

    /**
     * @return GroupRoutePointGetDNISAnnouncementResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        $this->dnisKey =  $dnisKey;
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->getValue();
    }
}
