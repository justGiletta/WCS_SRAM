<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TimeController extends AbstractController
{
    /**
     * @Route("/time", name="time")
     */
    public function index(CallApiService $callApiService): Response
    {
      /*dd($callApiService->getApiData());*/
             return $this->render('time/index.html.twig', [
            'data' => $callApiService->getApiData(),
        ]);
    }


}
