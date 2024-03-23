<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MovieRepository $movieRepository, ParameterBagInterface $parameterBagInterface): Response
    {
        $websiteName = "Moviz";
        return $this->render('page/index.html.twig', [
            'websiteName' => $websiteName,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $websiteName = "Moviz";
        return $this->render('page/about.html.twig', [
            'websiteName' => $websiteName,
        ]);
    }
}
