<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsResponsePagingControl;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Used in enhanced call logs group and enterprise queries to restrict the set of result
 *         rows when making a request that can result in a large dataset. The client specifies the
 *         starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 */
class EnhancedCallLogsResponsePagingControl extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    /**
     * @return EnhancedCallLogsResponsePagingControl
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
