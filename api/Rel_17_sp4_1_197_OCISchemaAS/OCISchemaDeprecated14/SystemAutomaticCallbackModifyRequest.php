<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackWaitBetweenRetryOriginatorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackMaxRetryOriginatorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAutomaticCallbackModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemAutomaticCallbackModifyRequest15
 */
class SystemAutomaticCallbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $monitorMinutes                    = null;
    protected $waitBetweenRetryOriginatorMinutes = null;
    protected $maxMonitorsPerOriginator          = null;
    protected $maxCallbackRings                  = null;
    protected $maxRetryOriginatorMinutes         = null;

    public function __construct(
         $monitorMinutes = null,
         $waitBetweenRetryOriginatorMinutes = null,
         $maxMonitorsPerOriginator = null,
         $maxCallbackRings = null,
         $maxRetryOriginatorMinutes = null
    ) {
        $this->setMonitorMinutes($monitorMinutes);
        $this->setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
        $this->setMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->setMaxCallbackRings($maxCallbackRings);
        $this->setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
    }

    /**
     * @return SystemAutomaticCallbackModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Automatic Callback monitor minutes.
     */
    public function setMonitorMinutes($monitorMinutes = null)
    {
        $this->monitorMinutes = ($monitorMinutes InstanceOf AutomaticCallbackMonitorMinutes)
             ? $monitorMinutes
             : new AutomaticCallbackMonitorMinutes($monitorMinutes);
    }

    /**
     * Automatic Callback monitor minutes.
     */
    public function getMonitorMinutes()
    {
        return (!$this->monitorMinutes) ?: $this->monitorMinutes->getValue();
    }

    /**
     * Wait between retry originator minutes.
     */
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes = null)
    {
        $this->waitBetweenRetryOriginatorMinutes = ($waitBetweenRetryOriginatorMinutes InstanceOf AutomaticCallbackWaitBetweenRetryOriginatorMinutes)
             ? $waitBetweenRetryOriginatorMinutes
             : new AutomaticCallbackWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
    }

    /**
     * Wait between retry originator minutes.
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return (!$this->waitBetweenRetryOriginatorMinutes) ?: $this->waitBetweenRetryOriginatorMinutes->getValue();
    }

    /**
     * Maximum monitors per originator.
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf AutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
    }

    /**
     * Maximum monitors per originator.
     */
    public function getMaxMonitorsPerOriginator()
    {
        return (!$this->maxMonitorsPerOriginator) ?: $this->maxMonitorsPerOriginator->getValue();
    }

    /**
     * Maximum callback rings.
     */
    public function setMaxCallbackRings($maxCallbackRings = null)
    {
        $this->maxCallbackRings = ($maxCallbackRings InstanceOf AutomaticCallbackMaxCallbackRings)
             ? $maxCallbackRings
             : new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
    }

    /**
     * Maximum callback rings.
     */
    public function getMaxCallbackRings()
    {
        return (!$this->maxCallbackRings) ?: $this->maxCallbackRings->getValue();
    }

    /**
     * Maximum retry originator minutes.
     */
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes = null)
    {
        $this->maxRetryOriginatorMinutes = ($maxRetryOriginatorMinutes InstanceOf AutomaticCallbackMaxRetryOriginatorMinutes)
             ? $maxRetryOriginatorMinutes
             : new AutomaticCallbackMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
    }

    /**
     * Maximum retry originator minutes.
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return (!$this->maxRetryOriginatorMinutes) ?: $this->maxRetryOriginatorMinutes->getValue();
    }
}
