<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Workshop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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

        if (false === $this->getUser() instanceof User) {
            return $this->render(':workshop:list_anonymous.html.twig', ['workshops' => $workshops]);
        }

        return $this->render(':workshop:list_authenticated.html.twig', ['workshops' => $workshops]);
    }

    /**
     * @Route("/workshop/enrol/{id}", name="workshop_enrol")
     * @Method("POST")
     */
    public function enrolAction(Workshop $workshop)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        /** @var User $user */
        $user = $this->getUser();

        $user->addWorkshop($workshop);

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();

        $this->addFlash("success", sprintf('Zapisałeś się na warsztat "%s"', $workshop->getName()));

        return $this->redirectToRoute("workshop_list");
    }

    /**
     * @Route("/workshop/unenrol/{id}", name="workshop_unenrol")
     * @Method("POST")
     */
    public function unenrolAction(Workshop $workshop)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        /** @var User $user */
        $user = $this->getUser();

        $user->removeWorkshop($workshop);

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($user);
        $manager->flush();

        $this->addFlash("success", sprintf('Wypisałeś się z warsztatu "%s"', $workshop->getName()));

        return $this->redirectToRoute("workshop_list");
    }

    /**
     * @Route("/my-workshops", name="my_workshops")
     */
    public function myWorkshopsAction()
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        /** @var User $user */
        $user = $this->getUser();
        $workshops = $user->getWorkshops();

        return $this->render(':workshop:list_my.html.twig', ['workshops' => $workshops]);
    }
}
