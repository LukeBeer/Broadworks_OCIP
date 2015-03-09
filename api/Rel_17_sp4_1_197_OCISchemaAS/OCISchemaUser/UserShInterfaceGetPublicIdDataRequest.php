<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PublicUserIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetPublicIdDataResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Returns the Sh non-transparent data stored against a Public User Identity (a SIP URI
 *         or TEL URI).
 *         The response is either a UserShInterfaceGetPublicIdDataResponse or an ErrorResponse.
 */
class UserShInterfaceGetPublicIdDataRequest extends ComplexType implements ComplexInterface
{
    public    $responseType       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetPublicIdDataResponse';
    public    $name               = __CLASS__;
    protected $publicUserIdentity = null;

    public function __construct(
          $publicUserIdentity
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
    }

    /**
     * @return UserShInterfaceGetPublicIdDataResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Public User Identity
     */
    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
        $this->publicUserIdentity =  $publicUserIdentity;
    }

    /**
     * Public User Identity
     */
    public function getPublicUserIdentity()
    {
        return (!$this->publicUserIdentity) ?: $this->publicUserIdentity->getValue();
    }
}
