<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingReportTemplateGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingReportTemplateGetListRequest. 
 *         Contains a table with column headings: "Name", "Description", "Is Custom", "Type" and "Enabled"
 */
class SystemCallCenterEnhancedReportingReportTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $reportTemplateTable = null;

    /**
     * @return SystemCallCenterEnhancedReportingReportTemplateGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportTemplateTable(core:OCITable $reportTemplateTable = null)
    {
        $this->reportTemplateTable =  $reportTemplateTable;
    }

    /**
     * 
     */
    public function getReportTemplateTable()
    {
        return (!$this->reportTemplateTable) ?: $this->reportTemplateTable->getValue();
    }
}
