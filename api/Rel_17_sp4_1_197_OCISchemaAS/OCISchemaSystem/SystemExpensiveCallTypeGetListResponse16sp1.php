<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExpensiveCallTypeGetListResponse16sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemExpensiveCallTypeGetListRequest16sp1. 
 *         The column headings are:
 *         "Alternate Call Indicator", "Treatment Audio File".
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $alternateCallIndicatorTable = null;

    /**
     * @return SystemExpensiveCallTypeGetListResponse16sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicatorTable(core:OCITable $alternateCallIndicatorTable = null)
    {
        $this->alternateCallIndicatorTable =  $alternateCallIndicatorTable;
    }

    /**
     * 
     */
    public function getAlternateCallIndicatorTable()
    {
        return (!$this->alternateCallIndicatorTable) ?: $this->alternateCallIndicatorTable->getValue();
    }
}
