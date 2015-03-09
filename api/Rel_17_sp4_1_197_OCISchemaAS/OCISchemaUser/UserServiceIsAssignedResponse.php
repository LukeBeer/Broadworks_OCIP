<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceIsAssignedResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Returns true if the UserService or service pack is assigned, otherwise false.
 */
class UserServiceIsAssignedResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $isAssigned = null;

    /**
     * @return UserServiceIsAssignedResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsAssigned($isAssigned = null)
    {
        $this->isAssigned = (boolean) $isAssigned;
    }

    /**
     * 
     */
    public function getIsAssigned()
    {
        return (!$this->isAssigned) ?: $this->isAssigned;
    }
}
