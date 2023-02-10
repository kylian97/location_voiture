<?php

// namespace App\Controller;

// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class ShowroomVoitureController extends AbstractController
// {

//      //pour récupérer les voitures en base de donnée 
//      private $entityManager;
//      public function __construct(EntityManagerInterface $entityManager)
//      {
//          $this ->entityManager = $entityManager;
//      }
     
//     #[Route('/{slug}', name: 'app_showroom_voiture')]
//     public function index($slug): Response
//     {
//         $voiture = $this->entityManager->getRepository(Voiture::class)->findOneBySlug($slug);

//         return $this->render('showroom_voiture/index.html.twig', [
//             'voiture' => $voiture
//         ]);
//     }
// }
