<?php
namespace App\Controller;

use App\Entity\Agence;
use App\Repository\AgenceRepository;
use App\Entity\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Region;

class AdminController extends AbstractController
{
    /**
     * @Route("/addRegion/{data}", name="addRegion", methods={"GET"})
     */
    public function addRegion(ManagerRegistry $doctrine, $data): Response
    {
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();

        $region = new Region();
        $region->setNomRegion($data['nomRegion']);
        $region->setStatut(true);

        $entityManager->persist($region);

        $entityManager->flush();

        return new Response('region added',  200);

    }

    /**
     * @Route("/showRegion", name="showAllRegion")
     */
    public function showRegion(ManagerRegistry $doctrine, SerializerInterface $serializer): Response
    {
        $region = $doctrine->getRepository(Region::class)->findAll();
        
        foreach($region as $data){
            $id = $data->getIDRegion();
            $region1[$id]['nomRegion'] = $data->getNomRegion();
            $region1[$id]['Statut'] = $data->getStatut();
        }
        $region1 = $serializer->serialize($region1, 'json');
        $response = new Response($region1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/showRegionByID/{id}", name="showRegionByID")
     */
    public function showRegionByID(ManagerRegistry $doctrine, SerializerInterface $serializer,$id): Response
    {
        $region = $doctrine->getRepository(Region::class)->find($id);
        
        foreach($region as $data){
            $id = $data->getIDRegion();
            $region1[$id]['nomRegion'] = $data->getNomRegion();
            $region1[$id]['Statut'] = $data->getStatut();
        }
        $region1 = $serializer->serialize($region1, 'json');
        $response = new Response($region1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/addBank/{data}", name="addBank")
     */
    public function addBank(ManagerRegistry $doctrine, $data): Response
    {
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();

        $bank = new Bank();
        $bank->setNomBank($data['nomBank']);
        $bank->setAddress($data['address']);
        $bank->setPhone($data['phone']);
        $bank->setStatut(true);
    
        $entityManager->persist($bank);

        $entityManager->flush();

        return new Response('bank added',  200);
    }

    /**
     * @Route("/showBank", name="showAllBank")
     */
    public function showBank(ManagerRegistry $doctrine, SerializerInterface $serializer): Response
    {
        $bank = $doctrine->getRepository(Bank::class)->findAll();
        
        foreach($bank as $data){
            $id = $data->getIDBank();
            $bank1[$id]['nomRegion'] = $data->getNomBank();
            $bank1[$id]['address'] = $data->getAddress();
            $bank1[$id]['phone'] = $data->getPhone();
            $bank1[$id]['Statut'] = $data->getStatut();
        }
        $bank1 = $serializer->serialize($bank1, 'json');
        $response = new Response($bank1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/showBankByID/{id}", name="showBankByID")
     */
    public function showBankByID(ManagerRegistry $doctrine, SerializerInterface $serializer,$id): Response
    {
        $bank = $doctrine->getRepository(Bank::class)->find($id);
        
        foreach($bank as $data){
            $id = $data->getIDBank();
            $bank1[$id]['nomRegion'] = $data->getNomBank();
            $bank1[$id]['address'] = $data->getAddress();
            $bank1[$id]['phone'] = $data->getPhone();
            $bank1[$id]['Statut'] = $data->getStatut();
        }
        $bank1 = $serializer->serialize($bank1, 'json');
        $response = new Response($bank1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/addAgence/{data}", name="addAgence")
     */
    public function addAgence(ManagerRegistry $doctrine, $data): Response
    {
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();

        $agence = new Agence();
        $agence->setNomAgence($data['nomAgence']);
        $agence->setIDBank($data['IDBank']);
        $agence->setIDRegion($data['IDRegion']);
        $agence->setAddress($data['address']);
        $agence->setPhone($data['phone']);
        $agence->setStatut(true);
    
        $entityManager->persist($agence);

        $entityManager->flush();

        return new Response('agence added',  200);
    }

    /**
     * @Route("/showAgence", name="showAllAgence")
     */
    public function showagence(ManagerRegistry $doctrine, SerializerInterface $serializer, AgenceRepository $agenceRepository): Response
    {
        $agence = $agenceRepository->getAgences();
        //print_r($agence);
        foreach($agence as $data){
            $id = $data->getIDBank();
            $bank1[$id]['nomAgence'] = $data->getNomAgence();
            $bank1[$id]['address'] = $data->getAddress();
            $bank1[$id]['phone'] = $data->getPhone();
            $bank1[$id]['Statut'] = $data->getStatut();
        }
        
        $bank1 = $serializer->serialize($bank1, 'json');
        $response = new Response($bank1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/showAgenceByID/{id}", name="showAgenceByID")
     */
    public function showAgenceByID(ManagerRegistry $doctrine, SerializerInterface $serializer,$id): Response
    {
        $bank = $doctrine->getRepository(Agence::class)->getAgenceByID($id);
        
        foreach($bank as $data){
            $id = $data['IDAgence'];
            $bank1[$id]['nomAgence'] = $data['NomAgence'];
            $bank1[$id]['address'] = $data['Address'];
            $bank1[$id]['phone'] = $data['Phone'];
            $agence1[$id]['bank'] = $data['NomBank'];
            $bank1[$id]['Statut'] = $data['Statut'];
        }
        $bank1 = $serializer->serialize($bank1, 'json');
        $response = new Response($bank1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}