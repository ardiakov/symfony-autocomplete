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
     * @var string|null
     */
    private string $query;

    public function __construct(array $content)
    {
        $this->validateContent($content);
        $this->validateValue($content);

        $this->query = $content['query'];
    }

    private function validateContent(array $content): void
    {
        if (true === empty($content)) {
            throw new RequestIsNotValid();
        }
    }

    private function validateValue(array $content): void
    {
        if (false === isset($content['query'])) {
            throw new ParameterDoesntExists('query');
        }

        if (false === is_string($content['query'])) {
            throw new ParameterIsNotValid('query');
        }
    }

    public function query(): string
    {
        return $this->query;
    }
}
