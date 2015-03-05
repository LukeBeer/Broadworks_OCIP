<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a route point's DNIS Announcements
 *         The response is either a GroupRoutePointGetDNISAnnouncementResponse or an ErrorResponse.
 */
class GroupRoutePointGetDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             DNISKey $dnisKey
    ) {
        $this->dnisKey = $dnisKey;
        $this->args    = func_get_args();
    }

    public function setDnisKey($dnisKey)
    {
        $dnisKey and $this->dnisKey = new DNISKey($dnisKey);
    }

    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->value();
    }
}
