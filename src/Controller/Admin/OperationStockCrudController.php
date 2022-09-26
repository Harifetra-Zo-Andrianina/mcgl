<?php

namespace App\Controller\Admin;

use App\Entity\OperationStock;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class OperationStockCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OperationStock::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [ 'code','description','selectable'
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Les types d\'opération en stock')
            ->setPageTitle('new','Nouveau type d\'opération')
            ->setPageTitle('edit','Editer le type d\'opération')

            //mettre en ligne les boutons
            ->showEntityActionsInlined();
            }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            ->update(Crud::PAGE_INDEX, Action::NEW,function(Action $action)
            {
               $action->setIcon('fa fa-plus');
               $action->setLabel('Nouveau type');
               return $action;

            })
            ->update(Crud::PAGE_INDEX, Action::EDIT,function(Action $action)
            {
                $action->setIcon('fa fa-marker');
                $action->setLabel('Editer');
                return $action;

            })
            ->update(Crud::PAGE_INDEX, Action::DELETE,function(Action $action)
            {
                $action->setIcon('fa fa-trash');
                $action->setLabel('Supprimer');
                return $action;

            })

            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN,function(Action $action)
            {
                $action->setIcon('fa fa-save');
                $action->setLabel('Enregistrer');
                return $action;

            })

            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE,function(Action $action)
            {
                $action->setIcon('fa fa-save');
                $action->setLabel('Enregistrer et rester');
                return $action;

            })

            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN,function(Action $action)
            {
                $action->setIcon('fa fa-save');
                $action->setLabel('Enregistrer');
                return $action;

            })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER,function(Action $action)
            {
                $action->setIcon('fa fa-save');
                $action->setLabel('Enregistrer et créer un autre');
                return $action;

            })

            ;
    }
}
