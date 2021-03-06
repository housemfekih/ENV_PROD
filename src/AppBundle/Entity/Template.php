<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Template
 *
 * @ORM\Table(name="template")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemplateRepository")
 */
class Template
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
     * @ORM\Column(name="nomTemplate", type="string", length=255)
     */
    private $nomTemplate;

     /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @Assert\NotBlank(message="Please, upload the template file as a HTML file.")
     * @Assert\File(mimeTypes={ "text/html" })
     */
    private $fichierTemplate;

    
   /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Groupe",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $groupeID;
	
	
	/**
     * @var text
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


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
     * Set nomTemplate
     *
     * @param string $nomTemplate
     *
     * @return Template
     */
    public function setNomTemplate($nomTemplate)
    {
        $this->nomTemplate = $nomTemplate;

        return $this;
    }

    /**
     * Get nomTemplate
     *
     * @return string
     */
    public function getNomTemplate()
    {
        return $this->nomTemplate;
    }

    /**
     * Set fichierTemplate
     *
     * @param string $fichierTemplate
     *
     * @return Template
     */
    public function setFichierTemplate($fichierTemplate)
    {
        $this->fichierTemplate = $fichierTemplate;

        return $this;
    }

    /**
     * Get fichierTemplate
     *
     * @return string
     */
    public function getFichierTemplate()
    {
        return $this->fichierTemplate;
    }

    /**
     * Set groupeID
     *
     * @param integer $groupeID
     *
     * @return Template
     */
    public function setGroupeID($groupeID)
    {
        $this->groupeID = $groupeID;

        return $this;
    }

    /**
     * Get groupeID
     *
     * @return int
     */
    public function getGroupeID()
    {
        return $this->groupeID;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Template
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
