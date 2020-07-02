<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Api\V1_0\Exceptions;

use Exception;

/**
 * Class ParameterIsNotValid
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class ParameterIsNotValid extends Exception
{
    protected $message = 'Parameter %s is not valid';

    public function __construct(string $parameter)
    {
        parent::__construct(sprintf($this->message, $parameter));
    }
}
