<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

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
}