<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAccessDeviceFileGetRequest.
 */
class UserAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $templateUrl=null
    ) {
        $this->templateUrl = new URL($templateUrl);
        $this->args        = func_get_args();
    }

    public function setTemplateUrl($templateUrl)
    {
        $templateUrl and $this->templateUrl = new URL($templateUrl);
    }

    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->value();
    }
}
