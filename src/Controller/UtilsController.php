<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UtilsController extends AbstractController
{
    public function menu()
    {
        return $this->render('utils/menu.html.twig', ['user' => $this->getUser()]);
    }
}