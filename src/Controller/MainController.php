<?php

namespace App\Controller;

use App\Entity\Centre;
use App\Entity\Intrant;
use App\Entity\Rapport;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Psr\Log\LoggerInterface;

class MainController extends AbstractController
{
    private ManagerRegistry $doctrine;
    private LoggerInterface $Logger;

    public function __construct(ManagerRegistry $doctrine, LoggerInterface $logger)
    {
        $this->doctrine = $doctrine;
        $this->Logger=$logger;
    }


    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/api_centre", name="api_centre")
     */
    public function APICentre(): JsonResponse
    {
        $result = $this->doctrine->getRepository(Centre::class)->findAll();
        return $this->json(['result' => $result]);

    }

    /**
     * @Route("/test", name="test")
     */

    public function test(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $rapport = new Rapport();

        dd(new DateTime('2022-09-19'));
        //$rapport->setDate($jsonObj->date);
        $rapport->setLocal('dsqdqs');
        //$rapport->setModifie(0);
        //$rapport->setP1($jsonObj->data->p1);
        //$rapport->setP2($jsonObj->data->p2);
        $em->persist($rapport);
        $em->flush();
        return $this->json(['statut' => 'ok']);
    }

    function validateParams($array_params){

        for ($i=0;$i<sizeof($array_params);$i++){
            if ($array_params[$i]=='NaN') { $array_params[$i]=0 ; }
        }
    }

    /**
     * @Route("/api/push/rapport/", name="api_push_rapport")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return JsonResponse
     */
    public function rapport(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $message='';
        // retrieve JSON from POST body
        $jsonStr = file_get_contents('php://input');
        $jsonStr=str_replace('NaN','0',$jsonStr);
        $jsonObj = json_decode($jsonStr);
        $source = json_decode($jsonObj->data);
        $type = $jsonObj->type;
        $this->Logger->info($type);

        if (sizeof($source) < 1) {
            return $this->json(['message' => 'Il n\'y a pas de '.$this->type($type).' à enregistrer sur le serveur', 'statut' => 'ok']);
        }

        foreach ($source as $data) {
            dump($data);
            $date = new DateTime($data->date);
            $dateHeure = date('d-m-y h:i:s');
            $centre = $this->doctrine->getRepository(Centre::class)->find($data->centre);

            if ($type < 4) {
                //rapport 1 2 3
                //verifier l'existence de l'enregistrement
                $verif = $this->doctrine->getRepository(Rapport::class)->findBy(['local' => $data->num]);
                if (count($verif) > 0) {
                    $rapport = $verif[0];
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setP1($data->p1);
                    $rapport->setP2($data->p2);
                    $rapport->setP3($data->p3);
                    $rapport->setP4($data->p4);
                    $rapport->setP5($data->p5);
                    $rapport->setP6($data->p6);
                    $rapport->setP7($data->p7);
                    $rapport->setP8($data->p8);
                    $rapport->setP9($data->p9);
                    $rapport->setP10($data->p10);
                } else {
                    $rapport = new Rapport();
                    $rapport->setDateSync($dateHeure);
                    $rapport->setType($type);
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setModifie(0);
                    $rapport->setP1($data->p1);
                    $rapport->setP2($data->p2);
                    $rapport->setP3($data->p3);
                    $rapport->setP4($data->p4);
                    $rapport->setP5($data->p5);
                    $rapport->setP6($data->p6);
                    $rapport->setP7($data->p7);
                    $rapport->setP8($data->p8);
                    $rapport->setP9($data->p9);
                    $rapport->setP10($data->p10);
                    $rapport->setCentre($centre);
                    $em->persist($rapport);
                }
            } elseif ($type == 4) {
                //raport 4
                //verifier l'existence de l'enregistrement
                $verif = $this->doctrine->getRepository(Rapport::class)->findBy(['local' => $data->num]);
                if (count($verif) > 0) {
                    $rapport = $verif[0];
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setP1($data->p1);
                    $rapport->setP3($data->p2);
                    $rapport->setP4($data->p3);
                    $rapport->setP5($data->p4);
                    $rapport->setP6($data->p5);
                    $rapport->setRemarque($data->remarque);
                } else {
                    $rapport = new Rapport();
                    $rapport->setDateSync($dateHeure);
                    $rapport->setDateSync($dateHeure);
                    $rapport->setType($type);
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setModifie(0);
                    $rapport->setP1($data->p1);
                    $rapport->setP3($data->p2);
                    $rapport->setP4($data->p3);
                    $rapport->setP5($data->p4);
                    $rapport->setP6($data->p5);
                    $rapport->setRemarque($data->remarque);
                    $rapport->setCentre($centre);
                    $em->persist($rapport);
                }

            } elseif ($type > 4) {
                //verifier l'existence de l'enregistrement
                $verif = $this->doctrine->getRepository(Intrant::class)->findBy(['local' => $data->num]);

                if ($type == 5) {
                    //intrant
                    $type_intrant = 1;
                } else {
                    //stock
                    $type_intrant = 2;
                }

                if (count($verif) > 0) {
                    $rapport = $verif[0];
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setP1($data->p1);
                    $rapport->setP2($data->p2);
                    $rapport->setP3($data->p3);
                    $rapport->setP4($data->p4);
                } else {
                    $rapport = new Intrant();
                    $rapport->setDateSync($dateHeure);
                    $rapport->setType($type_intrant);
                    $rapport->setDate($date);
                    $rapport->setLocal($data->num);
                    $rapport->setModifie(0);
                    $rapport->setP1($data->p1);
                    $rapport->setP2($data->p2);
                    $rapport->setP3($data->p3);
                    $rapport->setP4($data->p4);
                    $rapport->setCentre($centre);
                    $em->persist($rapport);
                }

            }
            $em->flush();
        }
        return $this->json(['message' => 'Les ' . sizeof($source) . ' enregistrements liés aux '.$this->type($type).' ont été enregistrés sur le serveur', 'statut' => 'ok']);
    }

    function type($p){
        switch ($p){
            case 1:
                return 'Rapport sur la 1er dose';
            case 2:
                return 'Rapport sur la 2é dose';
            case 3:
                return 'Rapport sur les personnes ayant reçus une dose additionnel';
            case 4:
                return 'Fiche sur les cas de MAPI';
            case 5:
                return 'Fiche intrant';
            case 6:
                return 'Fiche de stock';
        }




    }

    /**
     * @Route("/api/get/rapport/{centre}", name="api_get_rapport")
     */
    public function recupData(Centre $centre): JsonResponse
    {
        $res=$this->doctrine->getRepository(Rapport::class)->findBy(['centre'=>$centre->getId()]);
        $rapports=[];
        foreach($res as $element){
            $rapports[]=$element;
        }

        $res =$this->doctrine->getRepository(Intrant::class)->findBy(['centre'=>$centre->getId()]);
        $intrants=[];
        foreach($res as $element){
            $intrants[]=$element;
        }

        return $this->JSON(['rapport'=>$rapports, 'intrant'=>$intrants]);
    }
}
