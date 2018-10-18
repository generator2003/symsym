<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthorizationController extends AbstractController
{
    /**
     * @Route("/autorization2", name="autorization")
     */
    public function index()
    {
        return $this->render('autorization/index.html.twig', [
            'controller_name' => 'AutorizationController',
        ]);
    }
}
