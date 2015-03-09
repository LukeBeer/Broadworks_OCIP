<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingAddChargingFunctionElementServerResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $address              = null;
    protected $isNetAddressExtended = null;
    protected $type                 = null;
    protected $description          = null;

    public function __construct(
         $address,
         $isNetAddressExtended,
         $type,
         $description = null
    ) {
        $this->setAddress($address);
        $this->setIsNetAddressExtended($isNetAddressExtended);
        $this->setType($type);
        $this->setDescription($description);
    }

    /**
     * @return SystemAccountingAddChargingFunctionElementServerResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * This is a net address or can contain a string that includes additional items
     *         such as protocols and transports.
     */
    public function setAddress($address = null)
    {
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
    }

    /**
     * This is a net address or can contain a string that includes additional items
     *         such as protocols and transports.
     */
    public function getAddress()
    {
        return (!$this->address) ?: $this->address->getValue();
    }

    /**
     * 
     */
    public function setIsNetAddressExtended($isNetAddressExtended = null)
    {
        $this->isNetAddressExtended = (boolean) $isNetAddressExtended;
    }

    /**
     * 
     */
    public function getIsNetAddressExtended()
    {
        return (!$this->isNetAddressExtended) ?: $this->isNetAddressExtended;
    }

    /**
     * ChargingFunctionElement Server types.
     */
    public function setType($type = null)
    {
        $this->type = ($type InstanceOf ChargingFunctionElementServerType)
             ? $type
             : new ChargingFunctionElementServerType($type);
    }

    /**
     * ChargingFunctionElement Server types.
     */
    public function getType()
    {
        return (!$this->type) ?: $this->type->getValue();
    }

    /**
     * ChargingFunctionElementServer description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ChargingFunctionElementServerDescription)
             ? $description
             : new ChargingFunctionElementServerDescription($description);
    }

    /**
     * ChargingFunctionElementServer description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
