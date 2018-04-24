<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Tatoo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tatoo;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="TeteAffiche", type="boolean")
     */
    private $teteAffiche;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function setTatoo(Tatoo $tatoo)
    {
        $this->tatoo = $tatoo;

        return $this;
    }


    public function getTatoo()
    {
        return $this->tatoo;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Photo
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set teteAffiche
     *
     * @param boolean $teteAffiche
     *
     * @return Photo
     */
    public function setTeteAffiche($teteAffiche)
    {
        $this->teteAffiche = $teteAffiche;

        return $this;
    }

    /**
     * Get teteAffiche
     *
     * @return bool
     */
    public function getTeteAffiche()
    {
        return $this->teteAffiche;
    }
}

