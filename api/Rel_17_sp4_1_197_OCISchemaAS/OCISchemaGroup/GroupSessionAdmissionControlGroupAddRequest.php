<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGroupAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGroupAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $name                            = null;
    protected $maxSession                      = null;
    protected $maxUserOriginatingSessions      = null;
    protected $maxUserTerminatingSessions      = null;
    protected $reservedSession                 = null;
    protected $reservedUserOriginatingSessions = null;
    protected $reservedUserTerminatingSessions = null;
    protected $becomeDefaultGroup              = null;
    protected $countIntraSACGroupSessions      = null;
    protected $devices                         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $maxSession,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $reservedSession,
         $reservedUserOriginatingSessions = null,
         $reservedUserTerminatingSessions = null,
         $becomeDefaultGroup,
         $countIntraSACGroupSessions,
          $devices = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setMaxSession($maxSession);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setReservedSession($reservedSession);
        $this->setReservedUserOriginatingSessions($reservedUserOriginatingSessions);
        $this->setReservedUserTerminatingSessions($reservedUserTerminatingSessions);
        $this->setBecomeDefaultGroup($becomeDefaultGroup);
        $this->setCountIntraSACGroupSessions($countIntraSACGroupSessions);
        $this->setDevices($devices);
    }

    /**
     * @return GroupSessionAdmissionControlGroupAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Session Admission Control Group name.
     *         Uniquely identifies a Session Admission Control Group within a group or enterprise.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
    }

    /**
     * Session Admission Control Group name.
     *         Uniquely identifies a Session Admission Control Group within a group or enterprise.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxSession($maxSession = null)
    {
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxSession()
    {
        return (!$this->maxSession) ?: $this->maxSession->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setReservedSession($reservedSession = null)
    {
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedSession()
    {
        return (!$this->reservedSession) ?: $this->reservedSession->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedUserOriginatingSessions()
    {
        return (!$this->reservedUserOriginatingSessions) ?: $this->reservedUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getReservedUserTerminatingSessions()
    {
        return (!$this->reservedUserTerminatingSessions) ?: $this->reservedUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup = null)
    {
        $this->becomeDefaultGroup = (boolean) $becomeDefaultGroup;
    }

    /**
     * 
     */
    public function getBecomeDefaultGroup()
    {
        return (!$this->becomeDefaultGroup) ?: $this->becomeDefaultGroup;
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        $this->countIntraSACGroupSessions = (boolean) $countIntraSACGroupSessions;
    }

    /**
     * 
     */
    public function getCountIntraSACGroupSessions()
    {
        return (!$this->countIntraSACGroupSessions) ?: $this->countIntraSACGroupSessions;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function setDevices(AccessDevice $devices = null)
    {
        $this->devices =  $devices;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function getDevices()
    {
        return (!$this->devices) ?: $this->devices->getValue();
    }
}
