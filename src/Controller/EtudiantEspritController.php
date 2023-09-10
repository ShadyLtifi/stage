<?php

namespace App\Controller;

use App\Entity\EtudiantEsprit;
use App\Form\EtudiantEspritType;
use App\Repository\EtudiantEspritRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant/esprit')]
class EtudiantEspritController extends AbstractController
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    #[Route('/', name: 'app_etudiant_esprit_index', methods: ['GET'])]
    public function index(EtudiantEspritRepository $etudiantEspritRepository): Response
    {
        return $this->render('etudiant_esprit/index.html.twig', [
            'etudiant_esprits' => $etudiantEspritRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_etudiant_esprit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $etudiantEsprit = new EtudiantEsprit();
        $form = $this->createForm(EtudiantEspritType::class, $etudiantEsprit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             // Crypter le mot de passe
             $encodedPassword = $this->passwordEncoder->encodePassword($etudiantEsprit, $etudiantEsprit->getPassword());
             $etudiantEsprit->setPassword($encodedPassword);
 
             // Enregistrer l'entité
            $entityManager->persist($etudiantEsprit);
            $entityManager->flush();

            return $this->redirectToRoute('app_etudiant_esprit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('etudiant_esprit/new.html.twig', [
            'etudiant_esprit' => $etudiantEsprit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etudiant_esprit_show', methods: ['GET'])]
    public function show(EtudiantEsprit $etudiantEsprit): Response
    {
        return $this->render('etudiant_esprit/show.html.twig', [
            'etudiant_esprit' => $etudiantEsprit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_etudiant_esprit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EtudiantEsprit $etudiantEsprit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EtudiantEspritType::class, $etudiantEsprit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_etudiant_esprit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('etudiant_esprit/edit.html.twig', [
            'etudiant_esprit' => $etudiantEsprit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etudiant_esprit_delete', methods: ['POST'])]
    public function delete(Request $request, EtudiantEsprit $etudiantEsprit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etudiantEsprit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($etudiantEsprit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_etudiant_esprit_index', [], Response::HTTP_SEE_OTHER);
    }
}
