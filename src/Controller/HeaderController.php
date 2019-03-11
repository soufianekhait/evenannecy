<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeaderController extends AbstractController
{
    /**
     * @Route("/header", name="header")
     */
    public function index()
    {
        $server_url = substr($request->getRequestUri(), strrpos($request->getRequestUri(), '/'));
        
        return $this->render('includes/header.html.twig', [
            'controller_name' => 'HeaderController', ['server_url' => $server_url]
        ]);
    }
}
