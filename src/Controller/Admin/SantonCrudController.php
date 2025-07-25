<?php

namespace App\Controller\Admin;

use App\Entity\Santon;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SantonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Santon::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextareaField::new('descriptionDetaillee'),
            ImageField::new('image')
                ->setBasePath('images/upload/')
                ->setUploadDir('public/images/upload/'),
            AssociationField::new('commentaires')->onlyOnDetail(),
        ];
    }
}