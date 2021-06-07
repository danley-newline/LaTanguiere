<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecouverteController extends AbstractController
{
    /**
     * @Route("/decouverte", name="nos_decouverte")
     */
    public function decouverte(): Response
    {
        return $this->render('decouverte/decouverte.html.twig');
    }
}
