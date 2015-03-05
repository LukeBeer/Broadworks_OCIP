<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;
use Broadworks_OCIP\core\Builder\Restrictions\Comment;


/**
 * User level services.
 */
class UserService extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              'Advice Of Charge',
                                              'Alternate Numbers',
                                              'Anonymous Call Rejection',
                                              'Attendant Console',
                                              'Authentication',
                                              'Automatic Callback',
                                              'Automatic Hold/Retrieve',
                                              'Barge-in Exempt',
                                              'Basic Call Logs',
                                              'Bria For BroadWorks',
                                              'BroadWorks Agent',
                                              'BroadWorks Anywhere',
                                              'BroadWorks Mobility',
                                              'BroadWorks Receptionist - Office',
                                              'BroadWorks Receptionist - Small Business',
                                              'BroadWorks Supervisor',
                                              'Busy Lamp Field',
                                              'Call Center - Basic',
                                              'Call Center Monitoring',
                                              'Call Center - Standard',
                                              'Call Center - Premium',
                                              'Call Forwarding Always',
                                              'Call Forwarding Busy',
                                              'Call Forwarding No Answer',
                                              'Call Forwarding Not Reachable',
                                              'Call Forwarding Selective',
                                              'Call Me Now',
                                              'Call Notify',
                                              'Call Recording',
                                              'Call Return',
                                              'Call Transfer',
                                              'Call Waiting',
                                              'Calling Line ID Blocking Override',
                                              'Calling Line ID Delivery Blocking',
                                              'Calling Name Delivery',
                                              'Calling Name Retrieval',
                                              'Calling Number Delivery',
                                              'Calling Party Category',
                                              'Charge Number',
                                              'Classmark',
                                              'Client Call Control',
                                              'Client Call Control II',
                                              'Client License 1',
                                              'Client License 2',
                                              'Client License 3',
                                              'Client License 4',
                                              'Client License 5',
                                              'Client License 6',
                                              'Client License 7',
                                              'Client License 8',
                                              'Client License 9',
                                              'Client License 10',
                                              'Client License 11',
                                              'Client License 12',
                                              'Client License 13',
                                              'Client License 14',
                                              'Client License 15',
                                              'Client License 16',
                                              'Client License 17',
                                              'Client License 18',
                                              'Client License 19',
                                              'Client License 20',
                                              'CommPilot Call Manager',
                                              'CommPilot Express',
                                              'CommPilot Express SR',
                                              'CommPilot Lite',
                                              'CommPilot Receptionist',
                                              'CommPilot Residential',
                                              'CommPilot Small Business',
                                              'Communication Barring User-Control',
                                              'Connected Line Identification Presentation',
                                              'Connected Line Identification Restriction',
                                              'Customer Originated Trace',
                                              'Custom Ringback User',
                                              'Custom Ringback User - Call Waiting',
                                              'Custom Ringback User - Video',
                                              'Directed Call Pickup',
                                              'Directed Call Pickup with Barge-in',
                                              'Directory Number Hunting',
                                              'Diversion Inhibitor',
                                              'Do Not Disturb',
                                              'Dual-Mode VCC',
                                              'Enhanced Call Logs',
                                              'External Calling Line ID Delivery',
                                              'External Custom Ringback',
                                              'Fax Messaging',
                                              'Flash Call Hold',
                                              'Hoteling Guest',
                                              'Hoteling Host',
                                              'In-Call Service Activation',
                                              'IN Integration',
                                              'Intelligent Network Service Control',
                                              'Intercept User',
                                              'Internal Calling Line ID Delivery',
                                              'Last Number Redial',
                                              'Legacy Automatic Callback',
                                              'Location-Based Calling Restrictions',
                                              'Malicious Call Trace',
                                              'Mobile Extension to Extension Dialing',
                                              'Mobility',
                                              'Multiple Call Arrangement',
                                              'Music On Hold User',
                                              'Video On Hold User',
                                              'MWI Delivery to Mobile Endpoint',
                                              'N-Way Call',
                                              'Outlook Integration',
                                              'Office Communicator Tab',
                                              'Physical Location',
                                              'Polycom Phone Services',
                                              'Pre-alerting Announcement',
                                              'Preferred Carrier User',
                                              'Prepaid',
                                              'Priority Alert',
                                              'Privacy',
                                              'Push to Talk',
                                              'Remote Office',
                                              'SMDI Message Desk',
                                              'Selective Call Acceptance',
                                              'Selective Call Rejection',
                                              'Sequential Ring',
                                              'Service Scripts User',
                                              'Shared Call Appearance',
                                              'Shared Call Appearance 5',
                                              'Shared Call Appearance 10',
                                              'Shared Call Appearance 15',
                                              'Shared Call Appearance 20',
                                              'Shared Call Appearance 25',
                                              'Shared Call Appearance 30',
                                              'Shared Call Appearance 35',
                                              'Simultaneous Ring Family',
                                              'Simultaneous Ring Personal',
                                              'Short Message Service',
                                              'Speed Dial 100',
                                              'Speed Dial 8',
                                              'Third-Party MWI Control',
                                              'Third-Party Voice Mail Support',
                                              'Three-Way Call',
                                              'Two-Stage Dialing',
                                              'Video Add-On',
                                              'Virtual On-Net Enterprise Extensions',
                                              'Voice Messaging User',
                                              'Voice Messaging User - Video',
                                              'Voice Portal Calling',
                                              'Zone Calling Restrictions'
                                             ]);
        $this->addRestriction(new Comment());
    }
}
