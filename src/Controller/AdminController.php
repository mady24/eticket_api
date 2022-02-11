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
        $region1 = array();
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
        $region1 = array();
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
        $data = str_replace('%20',' ',$data);
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();

        $bank = new Bank();
        $bank->setNomBank($data['nomBank']);
        $bank->setAddress($data['address']);
        $bank->setPhone($data['phone']);
        $bank->setImageName($data['image']);
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
        $bank1 = array();
        foreach($bank as $data){
            $id = $data->getIDBank();
            $bank1[$id]['nomBank'] = $data->getNomBank();
            $bank1[$id]['address'] = $data->getAddress();
            $bank1[$id]['phone'] = $data->getPhone();
            $bank1[$id]['image'] = $data->getImageName();
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
        $bank = $doctrine->getRepository(Bank::class)->findBy(['IDBank'=>$id]);
        $bank1 = array();
        foreach($bank as $data){
            $id = $data->getIDBank();
            $bank1[$id]['nomBanque'] = $data->getNomBank();
            $bank1[$id]['address'] = $data->getAddress();
            $bank1[$id]['phone'] = $data->getPhone();
            $bank1[$id]['image'] = $data->getImageName();
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
        $data = str_replace('%20',' ',$data);
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
        $agence1 = array();
        foreach($agence as $data){
            $id = $data['IDAgence'];
            $agence1[$id]['nomAgence'] = $data['NomAgence'];
            $agence1[$id]['address'] = $data['Address'];
            $agence1[$id]['phone'] = $data['Phone'];
            $agence1[$id]['Statut'] = $data['Statut'];
            $agence1[$id]['nomBank'] = $data['NomBank'];
            $agence1[$id]['nomRegion'] = $data['NomRegion']; 
        }
        
        $agence1 = $serializer->serialize($agence1, 'json');
        $response = new Response($agence1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/showAgenceByID/{id}", name="showAgenceByID")
     */
    public function showAgenceByID(AgenceRepository $agenceRepository, SerializerInterface $serializer,$id): Response
    {
        $agence = $agenceRepository->getAgenceByID($id);
        $agence1 = array();
        foreach($agence as $data){
            $id = $data['IDAgence'];
            $agence1[$id]['nomAgence'] = $data['NomAgence'];
            $agence1[$id]['address'] = $data['Address'];
            $agence1[$id]['phone'] = $data['Phone'];
            $agence1[$id]['bank'] = $data['NomBank'];
            $agence1[$id]['Statut'] = $data['Statut'];
        }
        $agence1 = $serializer->serialize($agence1, 'json');
        $response = new Response($agence1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
    
    /**
     * @Route("/showAgenceByBank/{id}", name="showAgenceByID")
     */
    public function showAgenceByBank(AgenceRepository $agenceRepository, SerializerInterface $serializer,$id): Response
    {
        $agence = $agenceRepository->getAgenceByBank($id);
        $agence1 = array();
        foreach($agence as $data){
            $id = $data['IDAgence'];
            $agence1[$id]['nomAgence'] = $data['NomAgence'];
            $agence1[$id]['address'] = $data['Address'];
            $agence1[$id]['phone'] = $data['Phone'];
            $agence1[$id]['region'] = $data['NomRegion'];
            $agence1[$id]['Statut'] = $data['Statut'];
        }
        $agence1 = $serializer->serialize($agence1, 'json');
        $response = new Response($agence1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
    
    /**
     * @Route("/showAgenceByBankRegion/{id}/{region}", name="showAgenceByID")
     */
    public function showAgenceByBankRegion(AgenceRepository $agenceRepository, SerializerInterface $serializer,$id,$region): Response
    {
        $agence = $agenceRepository->getAgenceByBankRegion($id,$region);
        $agence1 = array();
        foreach($agence as $data){
            $id = $data['IDAgence'];
            $agence1[$id]['nomAgence'] = $data['NomAgence'];
            $agence1[$id]['address'] = $data['Address'];
            $agence1[$id]['phone'] = $data['Phone'];
            $agence1[$id]['region'] = $data['NomRegion'];
            $agence1[$id]['Statut'] = $data['Statut'];
        }
        $agence1 = $serializer->serialize($agence1, 'json');
        $response = new Response($agence1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}