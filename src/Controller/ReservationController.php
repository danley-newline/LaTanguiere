<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="les_reservations")
     */
    public function reserveChambre(): Response
    {
        return $this->render('reservation/reservation.html.twig');
    }
}
