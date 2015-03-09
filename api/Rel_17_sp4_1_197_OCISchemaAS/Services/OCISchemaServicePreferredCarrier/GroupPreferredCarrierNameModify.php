<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\GroupPreferredCarrierNameModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
 *         You can use the Service Provider preferred carrier without clearing the group
 *         carrier name -- in this case, the group carrier name is retained.
 */
class GroupPreferredCarrierNameModify extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\GroupPreferredCarrierNameModify';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return GroupPreferredCarrierNameModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
