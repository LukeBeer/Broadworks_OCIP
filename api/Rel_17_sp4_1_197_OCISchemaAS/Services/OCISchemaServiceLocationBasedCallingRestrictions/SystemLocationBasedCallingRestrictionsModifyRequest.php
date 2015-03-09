<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\PhysicalLocationIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions\SystemLocationBasedCallingRestrictionsModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system level Location Based Calling Restriction attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLocationBasedCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $physicalLocationIndicator    = null;
    protected $enforceMscValidation         = null;
    protected $enableOfficeZoneAnnouncement = null;
    protected $enhanceOfficeZone            = null;

    public function __construct(
         $physicalLocationIndicator = null,
         $enforceMscValidation = null,
         $enableOfficeZoneAnnouncement = null,
         $enhanceOfficeZone = null
    ) {
        $this->setPhysicalLocationIndicator($physicalLocationIndicator);
        $this->setEnforceMscValidation($enforceMscValidation);
        $this->setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement);
        $this->setEnhanceOfficeZone($enhanceOfficeZone);
    }

    /**
     * @return SystemLocationBasedCallingRestrictionsModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Choices for how to extract the physical location from the P-Camel-CellDorLAI or P-Access-Network-Info header.
     *         CI indicates that the physical location comes from the Cell Identification (CI) field (5 digits) of the P-Camel-CellDorLAI header (5 digits).
     *         LAC-CI indicates that the physical location comes from the Location Area Code + Cell Identification (LAC+CI) fields of the P CAMEL CellIDorLAI header (10 digits).
     *         PANI indicates that the physical location comes from the P Network Address Info (PANI) header.  See RFC 3455.
     */
    public function setPhysicalLocationIndicator($physicalLocationIndicator = null)
    {
        $this->physicalLocationIndicator = ($physicalLocationIndicator InstanceOf PhysicalLocationIndicator)
             ? $physicalLocationIndicator
             : new PhysicalLocationIndicator($physicalLocationIndicator);
    }

    /**
     * Choices for how to extract the physical location from the P-Camel-CellDorLAI or P-Access-Network-Info header.
     *         CI indicates that the physical location comes from the Cell Identification (CI) field (5 digits) of the P-Camel-CellDorLAI header (5 digits).
     *         LAC-CI indicates that the physical location comes from the Location Area Code + Cell Identification (LAC+CI) fields of the P CAMEL CellIDorLAI header (10 digits).
     *         PANI indicates that the physical location comes from the P Network Address Info (PANI) header.  See RFC 3455.
     */
    public function getPhysicalLocationIndicator()
    {
        return (!$this->physicalLocationIndicator) ?: $this->physicalLocationIndicator->getValue();
    }

    /**
     * 
     */
    public function setEnforceMscValidation($enforceMscValidation = null)
    {
        $this->enforceMscValidation = (boolean) $enforceMscValidation;
    }

    /**
     * 
     */
    public function getEnforceMscValidation()
    {
        return (!$this->enforceMscValidation) ?: $this->enforceMscValidation;
    }

    /**
     * 
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement = null)
    {
        $this->enableOfficeZoneAnnouncement = (boolean) $enableOfficeZoneAnnouncement;
    }

    /**
     * 
     */
    public function getEnableOfficeZoneAnnouncement()
    {
        return (!$this->enableOfficeZoneAnnouncement) ?: $this->enableOfficeZoneAnnouncement;
    }

    /**
     * 
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone = null)
    {
        $this->enhanceOfficeZone = (boolean) $enhanceOfficeZone;
    }

    /**
     * 
     */
    public function getEnhanceOfficeZone()
    {
        return (!$this->enhanceOfficeZone) ?: $this->enhanceOfficeZone;
    }
}
