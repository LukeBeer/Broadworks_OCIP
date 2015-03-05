<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterOverflowProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a route point's overflow settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointOverflowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $action=null,
             $transferPhoneNumber=null,
             $overflowAfterTimeout=null,
             $timeoutSeconds=null,
             $playAnnouncementBeforeOverflowProcessing=null,
             $audioMessageSelection=null,
             CallCenterAnnouncementURLListModify $audioUrlList=null,
             CallCenterAnnouncementFileListModify $audioFileList=null,
             $videoMessageSelection=null,
             CallCenterAnnouncementURLListModify $videoUrlList=null,
             CallCenterAnnouncementFileListModify $videoFileList=null
    ) {
        $this->serviceUserId                            = new UserId($serviceUserId);
        $this->action                                   = new CallCenterOverflowProcessingAction($action);
        $this->transferPhoneNumber                      = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->overflowAfterTimeout                     = $overflowAfterTimeout;
        $this->timeoutSeconds                           = new HuntForwardTimeoutSeconds($timeoutSeconds);
        $this->playAnnouncementBeforeOverflowProcessing = $playAnnouncementBeforeOverflowProcessing;
        $this->audioMessageSelection                    = new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioUrlList                             = $audioUrlList;
        $this->audioFileList                            = $audioFileList;
        $this->videoMessageSelection                    = new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoUrlList                             = $videoUrlList;
        $this->videoFileList                            = $videoFileList;
        $this->args                                     = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setAction($action)
    {
        $action and $this->action = new CallCenterOverflowProcessingAction($action);
    }

    public function getAction()
    {
        return (!$this->action) ?: $this->action->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setOverflowAfterTimeout($overflowAfterTimeout)
    {
        $overflowAfterTimeout and $this->overflowAfterTimeout = new xs:boolean($overflowAfterTimeout);
    }

    public function getOverflowAfterTimeout()
    {
        return (!$this->overflowAfterTimeout) ?: $this->overflowAfterTimeout->value();
    }

    public function setTimeoutSeconds($timeoutSeconds)
    {
        $timeoutSeconds and $this->timeoutSeconds = new HuntForwardTimeoutSeconds($timeoutSeconds);
    }

    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->value();
    }

    public function setPlayAnnouncementBeforeOverflowProcessing($playAnnouncementBeforeOverflowProcessing)
    {
        $playAnnouncementBeforeOverflowProcessing and $this->playAnnouncementBeforeOverflowProcessing = new xs:boolean($playAnnouncementBeforeOverflowProcessing);
    }

    public function getPlayAnnouncementBeforeOverflowProcessing()
    {
        return (!$this->playAnnouncementBeforeOverflowProcessing) ?: $this->playAnnouncementBeforeOverflowProcessing->value();
    }

    public function setAudioMessageSelection($audioMessageSelection)
    {
        $audioMessageSelection and $this->audioMessageSelection = new ExtendedFileResourceSelection($audioMessageSelection);
    }

    public function getAudioMessageSelection()
    {
        return (!$this->audioMessageSelection) ?: $this->audioMessageSelection->value();
    }

    public function setAudioUrlList($audioUrlList)
    {
        $audioUrlList and $this->audioUrlList = new CallCenterAnnouncementURLListModify($audioUrlList);
    }

    public function getAudioUrlList()
    {
        return (!$this->audioUrlList) ?: $this->audioUrlList->value();
    }

    public function setAudioFileList($audioFileList)
    {
        $audioFileList and $this->audioFileList = new CallCenterAnnouncementFileListModify($audioFileList);
    }

    public function getAudioFileList()
    {
        return (!$this->audioFileList) ?: $this->audioFileList->value();
    }

    public function setVideoMessageSelection($videoMessageSelection)
    {
        $videoMessageSelection and $this->videoMessageSelection = new ExtendedFileResourceSelection($videoMessageSelection);
    }

    public function getVideoMessageSelection()
    {
        return (!$this->videoMessageSelection) ?: $this->videoMessageSelection->value();
    }

    public function setVideoUrlList($videoUrlList)
    {
        $videoUrlList and $this->videoUrlList = new CallCenterAnnouncementURLListModify($videoUrlList);
    }

    public function getVideoUrlList()
    {
        return (!$this->videoUrlList) ?: $this->videoUrlList->value();
    }

    public function setVideoFileList($videoFileList)
    {
        $videoFileList and $this->videoFileList = new CallCenterAnnouncementFileListModify($videoFileList);
    }

    public function getVideoFileList()
    {
        return (!$this->videoFileList) ?: $this->videoFileList->value();
    }
}
