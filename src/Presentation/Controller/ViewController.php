<?php

declare(strict_types=1);

namespace Ardiakov\Autocomplete\Presentation\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ViewController
 *
 * @author Artem Diakov <adiakov.work@gmail.com>
 */
final class ViewController
{
    /**
     * @Route("/", name="main")
     * @Template("main.html.twig")
     */
    public function main()
    {
    }
}