<?php

namespace AppBundle\EventDispatcher;

use AppBundle\Entity\User;
use AppBundle\Entity\Workshop;
use Symfony\Component\EventDispatcher\Event;

class WorkshopEvent extends Event
{
    /**
     * @var Workshop
     */
    private $workshop;

    /**
     * @var User
     */
    private $user;

    /**
     * @param Workshop $workshop
     * @param User     $user
     */
    public function __construct(Workshop $workshop, User $user)
    {
        $this->workshop = $workshop;
        $this->user = $user;
    }

    /**
     * @return Workshop
     */
    public function getWorkshop()
    {
        return $this->workshop;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
