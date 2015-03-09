<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetLineTypeListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the system's legacy automatic callback line type settings.
 *         The response is either a SystemLegacyAutomaticCallbackGetTypeLineListResponse or 
 *         an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackGetLineTypeListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetLineTypeListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemLegacyAutomaticCallbackGetLineTypeListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
