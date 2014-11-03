<?php namespace Shamsy\Exceptions;

use RuntimeException;

class InvalidPriceException extends RuntimeException {

    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        if (is_array($message)) $message = join('. ', $message);

        parent::__construct($message, $code, $previous);
    }
}
