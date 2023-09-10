<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Form\Candidature2Type;
use App\Repository\CandidatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/candidature')]
class CandidatureController extends AbstractController
{
    #[Route('/', name: 'app_candidature_index', methods: ['GET'])]
    public function index(CandidatureRepository $candidatureRepository): Response
    {
        return $this->render('candidature/index.html.twig', [
            'candidatures' => $candidatureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_candidature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $candidature = new Candidature();
        $form = $this->createForm(Candidature2Type::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidature/new.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_candidature_show', methods: ['GET'])]
    public function show(Candidature $candidature): Response
    {
        return $this->render('candidature/show.html.twig', [
            'candidature' => $candidature,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_candidature_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Candidature $candidature, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Candidature2Type::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidature/edit.html.twig', [
            'candidature' => $candidature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_candidature_delete', methods: ['POST'])]
    public function delete(Request $request, Candidature $candidature, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidature->getId(), $request->request->get('_token'))) {
            $entityManager->remove($candidature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_candidature_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/rechercher', name: 'rechercher_candidatures')]
    public function rechercherCandidatures(Request $request, CandidatureRepository $repository): Response
    {
        $faculteNom = $request->query->get('faculteNom');
        $candidatures = $repository->findByFaculteNom($faculteNom);

        return $this->render('candidature/index.html.twig', [
            'candidatures' => $candidatures,
        ]);
    }
    
    #[Route('/search', name: 'search_candidatures')]
    public function search(Request $request, CandidatureRepository $repository): Response
    {
        $faculteNom = $request->query->get('faculteNom');
        $candidatures = $repository->findByFaculteNom($faculteNom);

        return $this->render('candidature/search.html.twig', [
            'faculteNom' => $faculteNom,
            'candidatures' => $candidatures,
        ]);
    }

    #[Route('/Search/candidature/{id}', name: 'app_candidature_modif', methods: ['GET', 'POST'])]
    public function modif(Request $request, int $id, EntityManagerInterface $entityManager): Response
    { 
        $jsonData = json_decode($request->getContent(), true);

        // Use Doctrine to find the Candidature entity
        $candidature = $entityManager->getRepository(Candidature::class)->find($id);

        if (!$candidature) {
            throw $this->createNotFoundException('Candidature not found for id ' . $id);
        }

        // Check and update the 'resultat' field using Doctrine ORM
        if (isset($jsonData['resultat'])) {
            // Update 'resultat' in the entity
            $candidature->setResultat($jsonData['resultat']);
            
            // Use EntityManager to persist and flush changes
            try {
                $entityManager->flush();
            } catch (\Exception $e) {
                return new JsonResponse(['error' => 'Database update failed'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            return new JsonResponse(['message' => 'Modification réussie']);
        } else {
            return new JsonResponse(['error' => 'Missing "resultat" in JSON data'], Response::HTTP_BAD_REQUEST);
        }
    }

}

