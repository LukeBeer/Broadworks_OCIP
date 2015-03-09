<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get all the current and past call centers for the enterprise.
 *         The response is either EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse';
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $isPremiumOnly                = null;
    protected $responseSizeLimit            = null;
    protected $searchCriteriaExactUserGroup = null;
    protected $searchCriteriaCallCenterName = null;

    public function __construct(
         $serviceProviderId,
         $isPremiumOnly = null,
         $responseSizeLimit = null,
          $searchCriteriaExactUserGroup = null,
          $searchCriteriaCallCenterName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsPremiumOnly($isPremiumOnly);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaCallCenterName($searchCriteriaCallCenterName);
    }

    /**
     * @return EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setIsPremiumOnly($isPremiumOnly = null)
    {
        $this->isPremiumOnly = (boolean) $isPremiumOnly;
    }

    /**
     * 
     */
    public function getIsPremiumOnly()
    {
        return (!$this->isPremiumOnly) ?: $this->isPremiumOnly;
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        $this->searchCriteriaExactUserGroup =  $searchCriteriaExactUserGroup;
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->getValue();
    }

    /**
     * Criteria for searching for a call center
     */
    public function setSearchCriteriaCallCenterName(SearchCriteriaCallCenterName $searchCriteriaCallCenterName = null)
    {
        $this->searchCriteriaCallCenterName =  $searchCriteriaCallCenterName;
    }

    /**
     * Criteria for searching for a call center
     */
    public function getSearchCriteriaCallCenterName()
    {
        return (!$this->searchCriteriaCallCenterName) ?: $this->searchCriteriaCallCenterName->getValue();
    }
}
