<?php

namespace Brick\Math\Exception;

use Brick\Math\BigInteger;

/**
 * Exception thrown when a is negative, but should be positive..
 */
class IsNegativeException extends \RuntimeException
{
    /**
     * @param BigInteger $value
     *
     * @return IsNegativeException
     */
    public static function isNegative(BigInteger $value)
    {
        $message = '%s is negative, but should be positive.';

        return new self(sprintf($message, (string) $value));
    }
}
