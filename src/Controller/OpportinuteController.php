<?php

namespace App\Controller;

use App\Entity\Opportinute;
use App\Form\OpportinuteType;
use App\Repository\OpportinuteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CandidatureType;
use App\Entity\Candidature;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Security;




#[Route('/opportinute')]
class OpportinuteController extends AbstractController
{
    #[Route('/', name: 'app_opportinute_index', methods: ['GET'])]
    public function index(OpportinuteRepository $opportinuteRepository): Response
    {
        return $this->render('opportinute/index.html.twig', [
            'opportinutes' => $opportinuteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_opportinute_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $opportinute = new Opportinute();
        $form = $this->createForm(OpportinuteType::class, $opportinute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($opportinute);
            $entityManager->flush();

            return $this->redirectToRoute('app_opportinute_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('opportinute/new.html.twig', [
            'opportinute' => $opportinute,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_opportinute_show', methods: ['GET'])]
    public function show(Opportinute $opportinute): Response
    {
        return $this->render('opportinute/show.html.twig', [
            'opportinute' => $opportinute,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_opportinute_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Opportinute $opportinute, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OpportinuteType::class, $opportinute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_opportinute_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('opportinute/edit.html.twig', [
            'opportinute' => $opportinute,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_opportinute_delete', methods: ['POST'])]
    public function delete(Request $request, Opportinute $opportinute, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$opportinute->getId(), $request->request->get('_token'))) {
            $entityManager->remove($opportinute);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_opportinute_index', [], Response::HTTP_SEE_OTHER);
    }




    
    #[Route('/{id}/candidature', name: 'candidature_create',methods: ['POST'])]
    #[ParamConverter("Opportinute", class: "App\Entity\Opportinute")]

    public function createCandidature(Request $request, EntityManagerInterface $entityManager, OpportinuteRepository $opportuniteRepository, Security $security, $id): Response
     {
        $etudiant = $security->getUser();

        $opportunite = $opportuniteRepository->find($id);
        $candidature = new Candidature();
        $candidature->setEtudiantEsprit($etudiant);
        $candidature->setOpportinute($opportunite);
        $form = $this->createForm(CandidatureType::class, $candidature);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
            
            $opportinuteId = $candidature->getOpportinute()->getId();
            $entityManager->persist($candidature);
            $entityManager->flush();

          
            return $this->redirectToRoute('app_dashboard_index'); 
        }

        return $this->render('opportinute/candidature.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    



}
