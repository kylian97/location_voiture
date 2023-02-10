<?php

namespace App\Controller\Admin;

use App\Entity\Voiture;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VoitureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Voiture::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('marque'),
            TextField::new('modele'),
            SlugField::new('slug')->setTargetFieldName('marque','modele'), //champ de type slug qui se base sur le nom du produit
            TextField::new('chevaux'),
            IntegerField::new('nombre_siege'),
            TextField::new('boite_vitesse'),
            TextField::new('essence'),
            BooleanField::new('siege_bebe'),
            BooleanField::new('gps'),
            BooleanField::new('lavage_vehicule'),
            BooleanField::new('conducteur_additionnel'),
            BooleanField::new('climatisation'),
            
            ImageField::new('image') //champ de type image
            ->setBasePath('uploads')   //gère le téléchargement des images vers le backend dans le dossier uploads
            ->setUploadDir('public/uploads')                    //chemin pour upload les images
            ->setUploadedFileNamePattern('[randomhash].[extension]') //hasher le nom des image
            ->setRequired(false) ,     //option pas obligatoire
            MoneyField::new('tarif')->setCurrency('EUR')
        
            
         
        ];
    }
    
}
