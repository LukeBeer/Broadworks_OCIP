<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemNetworkServerSyncParametersGetResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest16.
 *         Contains a list of system Network Server Sync parameters.
 *         Replaced By: SystemNetworkServerSyncParametersGetResponse17sp4
 */
class SystemNetworkServerSyncParametersGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $enableSync               = null;
    protected $syncLinePorts            = null;
    protected $syncDeviceManagementInfo = null;

    /**
     * @return SystemNetworkServerSyncParametersGetResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableSync($enableSync = null)
    {
        $this->enableSync = (boolean) $enableSync;
    }

    /**
     * 
     */
    public function getEnableSync()
    {
        return (!$this->enableSync) ?: $this->enableSync;
    }

    /**
     * 
     */
    public function setSyncLinePorts($syncLinePorts = null)
    {
        $this->syncLinePorts = (boolean) $syncLinePorts;
    }

    /**
     * 
     */
    public function getSyncLinePorts()
    {
        return (!$this->syncLinePorts) ?: $this->syncLinePorts;
    }

    /**
     * 
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo = null)
    {
        $this->syncDeviceManagementInfo = (boolean) $syncDeviceManagementInfo;
    }

    /**
     * 
     */
    public function getSyncDeviceManagementInfo()
    {
        return (!$this->syncDeviceManagementInfo) ?: $this->syncDeviceManagementInfo;
    }
}
