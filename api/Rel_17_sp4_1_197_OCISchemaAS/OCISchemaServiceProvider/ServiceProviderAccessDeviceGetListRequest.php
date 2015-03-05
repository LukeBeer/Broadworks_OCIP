<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDeviceNetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the list of access devices in a service provider.
 *         The response is either ServiceProviderAccessDeviceGetListResponse or ErrorResponse.
 */
class ServiceProviderAccessDeviceGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $responseSizeLimit=null,
             $searchCriteriaDeviceName=null,
             $searchCriteriaDeviceMACAddress=null,
             $searchCriteriaDeviceNetAddress=null,
             $searchCriteriaExactDeviceType=null
    ) {
        $this->serviceProviderId              = new ServiceProviderId($serviceProviderId);
        $this->responseSizeLimit              = $responseSizeLimit;
        $this->searchCriteriaDeviceName       = $searchCriteriaDeviceName;
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        $this->searchCriteriaExactDeviceType  = $searchCriteriaExactDeviceType;
        $this->args                           = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $searchCriteriaDeviceName and $this->searchCriteriaDeviceName = new SearchCriteriaDeviceName($searchCriteriaDeviceName);
    }

    public function getSearchCriteriaDeviceName()
    {
        return (!$this->searchCriteriaDeviceName) ?: $this->searchCriteriaDeviceName->value();
    }

    public function setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $searchCriteriaDeviceMACAddress and $this->searchCriteriaDeviceMACAddress = new SearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
    }

    public function getSearchCriteriaDeviceMACAddress()
    {
        return (!$this->searchCriteriaDeviceMACAddress) ?: $this->searchCriteriaDeviceMACAddress->value();
    }

    public function setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $searchCriteriaDeviceNetAddress and $this->searchCriteriaDeviceNetAddress = new SearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
    }

    public function getSearchCriteriaDeviceNetAddress()
    {
        return (!$this->searchCriteriaDeviceNetAddress) ?: $this->searchCriteriaDeviceNetAddress->value();
    }

    public function setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType)
    {
        $searchCriteriaExactDeviceType and $this->searchCriteriaExactDeviceType = new SearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
    }

    public function getSearchCriteriaExactDeviceType()
    {
        return (!$this->searchCriteriaExactDeviceType) ?: $this->searchCriteriaExactDeviceType->value();
    }
}
