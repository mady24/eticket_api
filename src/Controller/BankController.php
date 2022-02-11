<?php

namespace App\Controller;

use DateTime;
use App\Entity\File;
use App\Entity\Ticket;
use App\Repository\FileRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BankController extends AbstractController
{
    /** 
     * @Route("/test", name="test")
    */
    public function test(): Response
    {
        print_r('test');
        $response = json_encode('test');
        return new Response($response);
    }

    /**
     * @Route("/addFile/{data}", name="addFile")
     */
    public function addFile(ManagerRegistry $doctrine, $data): Response
    {
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();

        $now = new \DateTime();

        $agence = new File();
        $agence->setIDAgence($data['idAgence']);
        $agence->setCount(0);
        $agence->setCall(0);
        $agence->setDate($now->format('Y-m-d'));
        $agence->setStatut(true);
    
        $entityManager->persist($agence);

        $entityManager->flush();

        return new Response('file added',  200);
    }

    /**
     * @Route("/showFile", name="showAllFile")
     */
    public function showFile(SerializerInterface $serializer, FileRepository $fileRepository): Response
    {
        $file = $fileRepository->getFiles();
        $file1 = array();
        foreach($file as $data){
            $id = $data['IDFile'];
            $file1[$id]['nomAgence'] = $data['NomAgence'];
            $file1[$id]['IDAgence'] = $data['IDAgence'];
            $file1[$id]['Count'] = $data['Count'];
            $file1[$id]['Call'] = $data['CalledNumber'];
            $file1[$id]['Date'] = $data['DateFile'];
        }
        
        $file1 = $serializer->serialize($file1, 'json');
        $response = new Response($file1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/showFileByID/{id}", name="showFileByID")
     */
    public function showAgenceByID(FileRepository $fileRepository, SerializerInterface $serializer,$id): Response
    {
        $file = $fileRepository->getFilesByID($id);
        $file1 = array();
        foreach($file as $data){
            $id = $data['IDFile'];
            $file1[$id]['nomAgence'] = $data['NomAgence'];
            $file1[$id]['IDAgence'] = $data['IDAgence'];
            $file1[$id]['Count'] = $data['Count'];
            $file1[$id]['Call'] = $data['CalledNumber'];
            $file1[$id]['Date'] = $data['DateFile'];
        }
        $file1 = $serializer->serialize($file1, 'json');
        $response = new Response($file1);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * @Route("/addTicket/{data}", name="addTicket")
     */
    public function addTicket(ManagerRegistry $doctrine, SerializerInterface $serializer,$data)
    {
        $data = json_decode($data,true);

        $entityManager = $doctrine->getManager();
        $ticket = new Ticket();
        $ticket->setIDAgence($data['IDAgence']);
        $ticket->setIDUser($data['IDUser']);
        $ticket->setDate(new \DateTime($data['dateT']));
        $ticket->setTime(new \DateTime($data['timeT']));
        $ticket->setScheduled(false);
        $ticket->setStatut(true);

        $date = new \DateTime($data['dateT']);
        $file = $doctrine->getRepository(File::class)->findBy(['IDAgence'=>$data['IDAgence'], 'DateFile'=>$date]);
        if(!empty($file)){
        $ticket->setNumero($file[0]->getCount()+1);
        $file[0]->setNumero($file[0]->getCount()+1);
        }
        else{
            $ticket->setNumero(1);
            $file = new File();
            $file->setIDAgence($data['IDAgence']);
            $file->setCount(1);
            $file->setCall(0);
            $file->setDate($date->format('Y-m-d'));
            $file->setStatut(true);
        }
        $entityManager->persist($ticket);
        $entityManager->persist($file);

        $entityManager->flush();

        return new Response('ticket added',200);
    }
}