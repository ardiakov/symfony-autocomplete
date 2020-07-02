<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Api\V1_0\Exceptions;

use Exception;

/**
 * Class RequestIsNotValid
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class RequestIsNotValid extends Exception
{
    protected $message = 'Request is not valid';

    public function __construct()
    {
        parent::__construct($this->message);
    }
}