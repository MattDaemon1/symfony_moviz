<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MovieRepository $movieRepository): Response
    {
        
        $movies = $movieRepository->findBy([], ['id' => 'DESC'],3);

        $websiteName = "Moviz";
        return $this->render('page/index.html.twig', [
            'websiteName' => $websiteName,
            'movies'      => $movies,
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
