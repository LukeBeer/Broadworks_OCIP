<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\GroupPreferredCarrierGroupGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a GroupPreferredCarrierGroupGetRequest.
 */
class GroupPreferredCarrierGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    /**
     * @return GroupPreferredCarrierGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function setIntraLataCarrier(GroupPreferredCarrierName $intraLataCarrier = null)
    {
        $this->intraLataCarrier =  $intraLataCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function setInterLataCarrier(GroupPreferredCarrierName $interLataCarrier = null)
    {
        $this->interLataCarrier =  $interLataCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function setInternationalCarrier(GroupPreferredCarrierName $internationalCarrier = null)
    {
        $this->internationalCarrier =  $internationalCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         The group carrier name is exposed if it was previously configured.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
