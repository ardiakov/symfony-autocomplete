<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Api\V1_0\Exceptions;

use Exception;

/**
 * Class ParameterDoesntExists
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class ParameterDoesntExists extends Exception
{
    protected $message = 'Parameter %s doesnt exists';

    public function __construct(string $parameter)
    {
        parent::__construct(sprintf($this->message, $parameter));
    }
}