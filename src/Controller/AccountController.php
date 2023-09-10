<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\EtudiantEspritController;
use App\Entity\EtudiantEsprit;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EtudiantEspritRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Opportinute;
use App\Controller\OpportinuteController;



class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(Request $request, EtudiantEspritRepository $etudiantEspritRepository): Response
    {
        $opportinute = $this->getDoctrine()->getRepository(Opportinute::class)->findAll();
        return $this->render('account/index.html.twig', [
            'opportinute' => $opportinute,
            'accounts' => $etudiantEspritRepository->findAll(),
        ]);
    }
}
