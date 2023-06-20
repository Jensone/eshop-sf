<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    // Personnalisation du formulaire de création d'un produit
    public function configureFields(
        string $pageName,
        ): iterable
        {
        return [
            FormField::addPanel('Quel est le nom de votre produit ?')
                ->setIcon('cube')
                ->setHelp('Saisissez un nom facile à retenir'),
            TextField::new('name'),

            FormField::addPanel('Quel est le prix de votre produit ?')
                ->setIcon('euro')
                ->setHelp('Votre marge est importante !'),
            IntegerField::new('price'),

            FormField::addPanel('Description courte')
                ->setIcon('bullhorn')
                ->setHelp('Donnez envie d\'acheter votre produit'),
            TextField::new('short_description'),

            FormField::addPanel('Description longue')
                ->setIcon('list')
                ->setHelp('L\'information c\'est bien, mais captivez vos prospects c\'est mieux !'),
            TextEditorField::new('long_description'),

            FormField::addPanel('Catégorie')
                ->setIcon('book')
                ->setHelp('Choisissez une catégorie'),
            AssociationField::new('category')
                ->setCrudController(CategoryCrudController::class),

            FormField::addPanel('Un produit avec une image se vend mieux !')
                ->setIcon('image')
                ->setHelp('Ajouter une image'),
            ImageField::new('image')
                ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]')
                ->setBasePath('images/products/')
                ->setUploadDir('public/images/products/'),

            FormField::addPanel('Mettre en avant')
                ->setIcon('star')
                ->setHelp('Souhaitez-vous mettre en avant ce produit ?'),
            BooleanField::new('isFeatured'),

            FormField::addPanel('Publier le produit')
                ->setIcon('eye')
                ->setHelp('Souhaitez-vous publier ce produit dans la boutique?'),
            BooleanField::new('isPublished'),
        ];
    }
}
