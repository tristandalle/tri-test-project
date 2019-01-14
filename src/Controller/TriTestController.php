<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TriTestController extends AbstractController
{
    /**
     * @Route("/tri/test", name="tri_test")
     */
    public function index()
    {
        return $this->render('tri_test/index.html.twig', [
            'controller_name' => 'TriTestController',
        ]);
    }
}
