<?php

namespace App\Controller;

use App\Form\SubscribReservationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubscribReservationController extends AbstractController
{
    /**
     * @Route("/subscrib/reservation", name="subscrib_reservation")
     */
    public function souscription(Request $request): Response
    {
        $form = $this->createForm(SubscribReservationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sendReservation = $form->getData();

            dd($sendReservation);
        }


        return $this->render('subscrib_reservation/formulaire_reservation.html.twig',[
            'reservationForm' => $form->createView(),
        ]);
    }
}
