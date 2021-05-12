<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CocktailController extends AbstractController
{
    /**
     * @Route("/cocktail", name="cocktail")
     */
    public function index(CallApiService $callApiService): Response
    {
  /*      dd($callApiService->getApiCocktail());*/
        return $this->render('cocktail/index.html.twig', [
            'cocktail' => $callApiService->getApiCocktail(),
        ]);
    }
}

