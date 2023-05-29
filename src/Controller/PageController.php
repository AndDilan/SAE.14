<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_dil')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
      
    }
   
    #[Route('/dil/cv', name: 'app_dil_cv')]
    public function cv(): Response
    {
        return $this->render('page/CV.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/dil/cv/pf', name: 'app_dil_pf')]
    public function pf(): Response
    {
        return $this->render('page/pf.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/dil/cv/pf/plus', name: 'app_dil_plus')]
    public function plus(): Response
    {
        return $this->render('page/plus.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/dil/cv/pf/plus/cv1', name: 'app_dil_cv1')]
    public function CV2(): Response
    {
        return $this->render('page/cv1.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
