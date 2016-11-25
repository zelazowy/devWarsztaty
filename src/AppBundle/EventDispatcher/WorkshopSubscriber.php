<?php

namespace AppBundle\EventDispatcher;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class WorkshopSubscriber implements EventSubscriberInterface
{

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            Events::WORKSHOP_ADD => 'onAddWorkshop',
        ];
    }

    /**
     * @param WorkshopEvent $event
     */
    public function onAddWorkshop(WorkshopEvent $event)
    {
        $workshop = $event->getWorkshop();
        $user     = $event->getUser();

//        mail($user->getEmail(), sprintf('Właśnie dodałeś warsztaty "%s"', $workshop->getName()));
    }
}
