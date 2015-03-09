<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPerformanceMeasurementReportingGetFileServerListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPerformanceMeasurementReportingGetFileServerListRequest. The table columns are:
 *         "FTP Host Net Address", "FTP User Id", "Passive FTP".
 */
class SystemPerformanceMeasurementReportingGetFileServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $fileServerTable = null;

    /**
     * @return SystemPerformanceMeasurementReportingGetFileServerListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileServerTable(core:OCITable $fileServerTable = null)
    {
        $this->fileServerTable =  $fileServerTable;
    }

    /**
     * 
     */
    public function getFileServerTable()
    {
        return (!$this->fileServerTable) ?: $this->fileServerTable->getValue();
    }
}
