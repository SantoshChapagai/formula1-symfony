<?php

namespace App\Controller;

use App\Service\GetRace;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Formula1Controller extends AbstractController
{
    #[Route('/', name: 'app_formula',)]
    public function getData(GetRAce $GetRace): Response
    {
       

        return $this->render('race/index.html.twig', [
            //'schedule' => $schedule,
            'data' => $GetRace->getRacesIn2023()
        ]);
    }
}
