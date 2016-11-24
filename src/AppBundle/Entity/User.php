<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Workshop", inversedBy="users")
     * @ORM\JoinTable(name="users_workshops")
     */
    protected $workshops;

    public function __construct()
    {
        parent::__construct();
        $this->workshops = new ArrayCollection();
    }

    /**
     * @return Workshop[]|ArrayCollection
     */
    public function getWorkshops()
    {
        return $this->workshops;
    }

    /**
     * @param Workshop $workshop
     */
    public function addWorkshop(Workshop $workshop)
    {
        $workshop->addUser($this);
        $this->workshops[] = $workshop;
    }

    /**
     * @param Workshop $workshop
     */
    public function removeWorkshop(Workshop $workshop)
    {
        $this->workshops->removeElement($workshop);
    }
}
