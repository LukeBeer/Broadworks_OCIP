<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the service provider's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDigitCollectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $accessCode=null,
             $publicDigitMap=null,
             $privateDigitMap=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->accessCode        = new AccessCode($accessCode);
        $this->publicDigitMap    = new DigitMap($publicDigitMap);
        $this->privateDigitMap   = new DigitMap($privateDigitMap);
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

    public function setAccessCode($accessCode)
    {
        $accessCode and $this->accessCode = new AccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setPublicDigitMap($publicDigitMap)
    {
        $publicDigitMap and $this->publicDigitMap = new DigitMap($publicDigitMap);
    }

    public function getPublicDigitMap()
    {
        return (!$this->publicDigitMap) ?: $this->publicDigitMap->value();
    }

    public function setPrivateDigitMap($privateDigitMap)
    {
        $privateDigitMap and $this->privateDigitMap = new DigitMap($privateDigitMap);
    }

    public function getPrivateDigitMap()
    {
        return (!$this->privateDigitMap) ?: $this->privateDigitMap->value();
    }
}
