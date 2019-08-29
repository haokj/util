<?php

namespace Haokj\Util\exception;


use LinCmsTp5\exception\BaseException;

class TokenException extends BaseException
{
    public $code = 401;
    public $msg  = 'Token已过期或无效Token';
    public $errorCode = '10001';
}
