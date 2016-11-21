<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Workshop;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class WorkshopController extends Controller
{
    /**
     * @Route("/", name="workshop_list")
     */
    public function listAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $workshops = $manager->getRepository("AppBundle:Workshop")->findAll();

        return $this->render(':workshop:list_anonymous.html.twig', ['workshops' => $workshops]);
    }
}
