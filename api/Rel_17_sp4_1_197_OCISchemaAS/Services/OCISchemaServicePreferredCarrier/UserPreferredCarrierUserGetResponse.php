<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\UserPreferredCarrierUserGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a UserPreferredCarrierUserGetRequest.
 */
class UserPreferredCarrierUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    /**
     * @return UserPreferredCarrierUserGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setIntraLataCarrier(UserPreferredCarrierName $intraLataCarrier = null)
    {
        $this->intraLataCarrier =  $intraLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setInterLataCarrier(UserPreferredCarrierName $interLataCarrier = null)
    {
        $this->interLataCarrier =  $interLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setInternationalCarrier(UserPreferredCarrierName $internationalCarrier = null)
    {
        $this->internationalCarrier =  $internationalCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
