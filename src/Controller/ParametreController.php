<?php

namespace App\Controller;

use App\Entity\Parametre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ParametreController extends AbstractController
{
    /**
     * @Route("/parametre", name="parametre")
     */
    private $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine=$doctrine;
    }

    public function index(): Response
    {
        return $this->render('parametre/index.html.twig', [
            'controller_name' => 'ParametreController',
        ]);
    }

    public function getDevise(){
     $result=$this->doctrine->getRepository(Parametre::class)->findBy(["code","DEVISE"]);
     return $result['valeur'];
    }

}
