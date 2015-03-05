<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * LoginRequest13mp10 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login from a trusted host (ACL).
 */
class LoginRequest13mp10 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $signedPassword=null
    ) {
        $this->userId         = new UserId($userId);
        $this->signedPassword = new SignedPassword($signedPassword);
        $this->args           = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSignedPassword($signedPassword)
    {
        $signedPassword and $this->signedPassword = new SignedPassword($signedPassword);
    }

    public function getSignedPassword()
    {
        return (!$this->signedPassword) ?: $this->signedPassword->value();
    }
}
