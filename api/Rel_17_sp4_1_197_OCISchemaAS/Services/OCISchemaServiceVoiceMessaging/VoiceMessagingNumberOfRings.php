<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * The number of rings before greeting.
 */
class VoiceMessagingNumberOfRings extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'int';
        $this-addRestriction(new Enumeration([
                                              '0',
                                              '2',
                                              '3',
                                              '4',
                                              '5',
                                              '6',
                                              '7',
                                              '8',
                                              '9',
                                              '10',
                                              '11',
                                              '12',
                                              '13',
                                              '14',
                                              '15',
                                              '16',
                                              '17',
                                              '18',
                                              '19',
                                              '20'
                                             ]);
    }
}
