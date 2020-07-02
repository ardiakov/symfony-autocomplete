<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Api\V1_0\Request;

use Ardiakov\Autocomplete\Api\V1_0\Exceptions\ParameterDoesntExists;
use Ardiakov\Autocomplete\Api\V1_0\Exceptions\ParameterIsNotValid;
use Ardiakov\Autocomplete\Api\V1_0\Exceptions\RequestIsNotValid;

/**
 * Class AutocompleteRequest
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class AutocompleteRequest
{
    /**
     * @var null|string
     */
    private string $value;

    public function __construct(array $content)
    {
        $this->validateContent($content);
        $this->validateValue($content);

        $this->value = $content['value'];
    }

    private function validateContent(array $content): void
    {
        if (true === empty($content)) {
            throw new RequestIsNotValid();
        }
    }

    private function validateValue(array $content): void
    {
        if (false === isset($content['value'])) {
            throw new ParameterDoesntExists('value');
        }

        if (false === is_string($content['value'])) {
            throw new ParameterIsNotValid('value');
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}