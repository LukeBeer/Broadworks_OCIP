<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an existing Dialable Caller ID Criteria.
 *         The response is either a  
 *         ServiceProviderDialableCallerIDCriteriaGetRequest or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDCriteriaGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $name
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->name              = new DialableCallerIDCriteriaName($name);
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new DialableCallerIDCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}
