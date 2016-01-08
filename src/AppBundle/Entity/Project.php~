<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="construct_begin", type="datetime", nullable=true)
     */
    private $constructBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="construct_end", type="datetime", nullable=true)
     */
    private $constructEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=25)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=25)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="team", type="string", length=255)
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(name="collaboration", type="string", length=255)
     */
    private $collaboration;

    /**
     * @var string
     *
     * @ORM\Column(name="photography", type="string", length=255)
     */
    private $photography;
    
    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string")
     */
    private $thumbnail;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="isSlide", type="boolean", nullable=true)
     */
    private $isSlide;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="slideImage", type="string", nullable=true)
     */
    private $slideImage;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="quote", type="string")
     */
    private $quote;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="projects")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    /**
     * @ORM\OneToMany(targetEntity="ProjectPhoto", mappedBy="project")
     */
    private $projectPhotos;
    
    public function __construct()
    {
        $this->projectPhotos = new ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set constructBegin
     *
     * @param \DateTime $constructBegin
     * @return Project
     */
    public function setConstructBegin($constructBegin)
    {
        $this->constructBegin = $constructBegin;

        return $this;
    }

    /**
     * Get constructBegin
     *
     * @return \DateTime 
     */
    public function getConstructBegin()
    {
        return $this->constructBegin;
    }

    /**
     * Set constructEnd
     *
     * @param \DateTime $constructEnd
     * @return Project
     */
    public function setConstructEnd($constructEnd)
    {
        $this->constructEnd = $constructEnd;

        return $this;
    }

    /**
     * Get constructEnd
     *
     * @return \DateTime 
     */
    public function getConstructEnd()
    {
        return $this->constructEnd;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Project
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Project
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Project
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set team
     *
     * @param string $team
     * @return Project
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set collaboration
     *
     * @param string $collaboration
     * @return Project
     */
    public function setCollaboration($collaboration)
    {
        $this->collaboration = $collaboration;

        return $this;
    }

    /**
     * Get collaboration
     *
     * @return string 
     */
    public function getCollaboration()
    {
        return $this->collaboration;
    }

    /**
     * Set photography
     *
     * @param string $photography
     * @return Project
     */
    public function setPhotography($photography)
    {
        $this->photography = $photography;

        return $this;
    }

    /**
     * Get photography
     *
     * @return string 
     */
    public function getPhotography()
    {
        return $this->photography;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     * @return Project
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set isSlide
     *
     * @param boolean $isSlide
     * @return Project
     */
    public function setIsSlide($isSlide)
    {
        $this->isSlide = $isSlide;

        return $this;
    }

    /**
     * Get isSlide
     *
     * @return boolean 
     */
    public function getIsSlide()
    {
        return $this->isSlide;
    }

    /**
     * Set slideImage
     *
     * @param string $slideImage
     * @return Project
     */
    public function setSlideImage($slideImage)
    {
        $this->slideImage = $slideImage;

        return $this;
    }

    /**
     * Get slideImage
     *
     * @return string 
     */
    public function getSlideImage()
    {
        return $this->slideImage;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return Project
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string 
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Add projectPhotos
     *
     * @param \AppBundle\Entity\ProjectPhoto $projectPhotos
     * @return Project
     */
    public function addProjectPhoto(\AppBundle\Entity\ProjectPhoto $projectPhotos)
    {
        $this->projectPhotos[] = $projectPhotos;

        return $this;
    }

    /**
     * Remove projectPhotos
     *
     * @param \AppBundle\Entity\ProjectPhoto $projectPhotos
     */
    public function removeProjectPhoto(\AppBundle\Entity\ProjectPhoto $projectPhotos)
    {
        $this->projectPhotos->removeElement($projectPhotos);
    }

    /**
     * Get projectPhotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjectPhotos()
    {
        return $this->projectPhotos;
    }

    /**
     * Set quote
     *
     * @param string $quote
     * @return Project
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string 
     */
    public function getQuote()
    {
        return $this->quote;
    }
}
