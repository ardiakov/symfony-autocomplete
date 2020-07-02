<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Api\V1_0\Http;

use Ardiakov\Autocomplete\Api\V1_0\Request\AutocompleteRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AutocompleteController
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class AutocompleteController
{
    public function autocomplete(Request $request): Response
    {
        $request = new AutocompleteRequest($request->query->all());


    }
}