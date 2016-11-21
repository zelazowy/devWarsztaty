<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopController extends Controller
{
    /**
     * @Route("/", name="workshop_list")
     */
    public function listAction()
    {
        $workshops = [
            [
                'name'        => 'Podstawy Symfony',
                'description' => 'Lorem ipsum',
                'duration'    => '5h',
                'prelegent'   => 'Bolek i Lolek',
            ],
            [
                'name'        => 'Podstawy JAVY',
                'description' => 'Dolor sit amet',
                'duration'    => '2h',
                'prelegent'   => 'Flip i Flap',
            ]
        ];

        return $this->render(':workshop:list_anonymous.html.twig', ['workshops' => $workshops]);
    }
}
