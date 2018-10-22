<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrivateAreaController extends AbstractController
{
    /**
     * @Route("/private", name="private_area")
     */
    public function index()
    {
        return $this->render('private_area/index.html.twig', [
            'controller_name' => 'PrivateAreaController',
        ]);
    }
}
