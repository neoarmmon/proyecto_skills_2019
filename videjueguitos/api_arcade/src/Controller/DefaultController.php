<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_user_default')]
    public function __invoke(): Response
    {
        $html="<h1>Default</h1>";
        return new Response(
            "<html><body>".$html."</body></html>"
        );
    }
}