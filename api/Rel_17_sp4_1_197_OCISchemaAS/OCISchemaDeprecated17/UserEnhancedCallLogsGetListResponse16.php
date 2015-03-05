<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MixedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 */
class UserEnhancedCallLogsGetListResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $totalNumberOfRows,
             MixedCallLogsEntry $callLog=null
    ) {
        $this->totalNumberOfRows = $totalNumberOfRows;
        $this->callLog           = $callLog;
        $this->args              = func_get_args();
    }

    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $totalNumberOfRows and $this->totalNumberOfRows = new xs:int($totalNumberOfRows);
    }

    public function getTotalNumberOfRows()
    {
        return (!$this->totalNumberOfRows) ?: $this->totalNumberOfRows->value();
    }

    public function setCallLog($callLog)
    {
        $callLog and $this->callLog = new MixedCallLogsEntry($callLog);
    }

    public function getCallLog()
    {
        return (!$this->callLog) ?: $this->callLog->value();
    }
}
