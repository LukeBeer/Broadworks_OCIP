<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial100; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial100\GroupSpeedDial100GetResponse17sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupSpeedDial100GetRequest17sp1.
 */
class GroupSpeedDial100GetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name   = __CLASS__;
    protected $prefix = null;

    /**
     * @return GroupSpeedDial100GetResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Speed dial prefix.
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf SpeedDialPrefix)
             ? $prefix
             : new SpeedDialPrefix($prefix);
    }

    /**
     * Speed dial prefix.
     */
    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->getValue();
    }
}
