<?php

namespace App\Controller;

use App\Entity\Voiture;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
     //pour récupérer les voitures en base de donnée 
     private $entityManager;
     public function __construct(EntityManagerInterface $entityManager)
     {
         $this ->entityManager = $entityManager;
     }
     
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        //je récupère avec entity manager tout mes produits en base de donnée avec findAll()
        $voiture = $this->entityManager->getRepository(Voiture::class)->findAll();

        return $this->render('home/index.html.twig', [
            //j'envoie ma variable voiture a ma vue template
            'voiture' => $voiture
            
        ]);
    }

    #[Route('/{slug}', name: 'app_voiture')]
    public function show($slug): Response
    {  
          //slug
        //récupère le slug du véhicule dans la base de donnée
        $voiture = $this->entityManager->getRepository(Voiture::class)->findOneBySlug($slug);

        

        return $this->render('showroom_voiture/index.html.twig', [
             //j'envoie ma variable voiture a ma vue template
            'voiture'=>$voiture,
        ]);
    }
}
