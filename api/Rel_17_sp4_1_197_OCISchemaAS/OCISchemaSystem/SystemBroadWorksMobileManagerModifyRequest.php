<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBroadWorksMobileManagerModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the BroadWorks Mobile Manager service system settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $scfApiNetAddress1  = null;
    protected $scfApiNetAddress2  = null;
    protected $userName           = null;
    protected $password           = null;
    protected $emailFromAddress   = null;
    protected $scfIMSOnly         = null;
    protected $signalingIPAddress = null;
    protected $signalingPort      = null;

    public function __construct(
         $scfApiNetAddress1 = null,
         $scfApiNetAddress2 = null,
         $userName = null,
         $password = null,
         $emailFromAddress = null,
         $scfIMSOnly = null,
         $signalingIPAddress = null,
         $signalingPort = null
    ) {
        $this->setScfApiNetAddress1($scfApiNetAddress1);
        $this->setScfApiNetAddress2($scfApiNetAddress2);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setEmailFromAddress($emailFromAddress);
        $this->setScfIMSOnly($scfIMSOnly);
        $this->setSignalingIPAddress($signalingIPAddress);
        $this->setSignalingPort($signalingPort);
    }

    /**
     * @return SystemBroadWorksMobileManagerModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setScfApiNetAddress1($scfApiNetAddress1 = null)
    {
        $this->scfApiNetAddress1 = ($scfApiNetAddress1 InstanceOf NetAddress)
             ? $scfApiNetAddress1
             : new NetAddress($scfApiNetAddress1);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getScfApiNetAddress1()
    {
        return (!$this->scfApiNetAddress1) ?: $this->scfApiNetAddress1->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setScfApiNetAddress2($scfApiNetAddress2 = null)
    {
        $this->scfApiNetAddress2 = ($scfApiNetAddress2 InstanceOf NetAddress)
             ? $scfApiNetAddress2
             : new NetAddress($scfApiNetAddress2);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getScfApiNetAddress2()
    {
        return (!$this->scfApiNetAddress2) ?: $this->scfApiNetAddress2->getValue();
    }

    /**
     * BroadWorks Mobile Manger API user name
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf BroadWorksMobileManagerUserName)
             ? $userName
             : new BroadWorksMobileManagerUserName($userName);
    }

    /**
     * BroadWorks Mobile Manger API user name
     */
    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->getValue();
    }

    /**
     * BroadWorks Mobile Manger API password
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf BroadWorksMobileManagerPassword)
             ? $password
             : new BroadWorksMobileManagerPassword($password);
    }

    /**
     * BroadWorks Mobile Manger API password
     */
    public function getPassword()
    {
        return (!$this->password) ?: $this->password->getValue();
    }

    /**
     * Email Address
     */
    public function setEmailFromAddress($emailFromAddress = null)
    {
        $this->emailFromAddress = ($emailFromAddress InstanceOf EmailAddress)
             ? $emailFromAddress
             : new EmailAddress($emailFromAddress);
    }

    /**
     * Email Address
     */
    public function getEmailFromAddress()
    {
        return (!$this->emailFromAddress) ?: $this->emailFromAddress->getValue();
    }

    /**
     * 
     */
    public function setScfIMSOnly($scfIMSOnly = null)
    {
        $this->scfIMSOnly = (boolean) $scfIMSOnly;
    }

    /**
     * 
     */
    public function getScfIMSOnly()
    {
        return (!$this->scfIMSOnly) ?: $this->scfIMSOnly;
    }

    /**
     * Numeric IP Address.
     */
    public function setSignalingIPAddress($signalingIPAddress = null)
    {
        $this->signalingIPAddress = ($signalingIPAddress InstanceOf IPAddress)
             ? $signalingIPAddress
             : new IPAddress($signalingIPAddress);
    }

    /**
     * Numeric IP Address.
     */
    public function getSignalingIPAddress()
    {
        return (!$this->signalingIPAddress) ?: $this->signalingIPAddress->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port)
             ? $signalingPort
             : new Port($signalingPort);
    }

    /**
     * TCP/IP Port.
     */
    public function getSignalingPort()
    {
        return (!$this->signalingPort) ?: $this->signalingPort->getValue();
    }
}
