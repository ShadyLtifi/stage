<?php

namespace App\Controller;
use App\Entity\Opportinute;
use App\Controller\OpportinuteController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    { // Exemple : Récupérer des données depuis la base de données
        $opportinute = $this->getDoctrine()->getRepository(Opportinute::class)->findAll();

        return $this->render('baseFront.html.twig', [
            'opportinute' => $opportinute,
        ]);
    }
}
