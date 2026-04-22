<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LibrosController extends AbstractController
{
    #[Route('/libros', name: 'app_libros')]
    public function index(): Response
    {
        return $this->render('libros/index.html.twig', [
            'controller_name' => 'LibrosController',
        ]);
    }
}
