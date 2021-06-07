<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="nos_chambres")
     */
    public function chambres(): Response
    {
        return $this->render('chambre/chambre.html.twig');
    }
}
