<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tatoo
 *
 * @ORM\Table(name="tatoo")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\TatooRepository")
 */
class Tatoo
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
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Tag")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tags;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Famille")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Famille;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tatoo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tatoo
     */
    public function setDate()
    {
        $this->date = new Datetime();

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function setTags(Tag $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTags()
    {
        return $this->tags;
    }
    
    public function setFamille(Tag $Famille)
    {
        $this->Famille = $Famille;

        return $this;
    }

    public function getFamille()
    {
        return $this->Famille;
    }
}

