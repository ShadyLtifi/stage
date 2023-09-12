<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Candidature;
use App\Form\Candidature1Type;
use App\Repository\CandidatureRepository;
use Doctrine\ORM\EntityManagerInterface;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard_index', methods: ['GET'])]
    public function index(CandidatureRepository $candidatureRepository): Response
    {
        $user = $this->getUser(); // Get the authenticated user
        $candidatures = $candidatureRepository->findBy(['EtudiantEsprit' => $user]);

        return $this->render('dashboardFaculte/dashboardFac.html.twig', [
            'candidatures' => $candidatures,
        ]);
    }


    #[Route('/dashboard/{id}', name: 'app_dashboard_show', methods: ['GET'])]
    public function show(Candidature $candidature): Response
    {
        return $this->render('dashboardFaculte/dashboardFac.html.twig', [
            'candidature' => $candidature,
        ]);
    }
}
