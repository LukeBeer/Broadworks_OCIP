<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallRecordingPlatformName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallRecordingGetRequest.
 *          The response contains the group's Call Recording platform information.
 */
class GroupCallRecordingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name=null
    ) {
        $this->name = $name;
        $this->args = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new CallRecordingPlatformName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}
