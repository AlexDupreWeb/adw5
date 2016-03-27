<?php

namespace Adw\Bundle\AdwBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Adw\Bundle\AdwBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer")
     */
    private $idPage;

    /**
     * @var int
     *
     * @ORM\Column(name="id_carousel", type="integer")
     */
    private $idCarousel;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=4)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var bool
     *
     * @ORM\Column(name="display_title", type="boolean")
     */
    private $displayTitle;

    /**
     * @var bool
     *
     * @ORM\Column(name="display_carousel", type="boolean")
     */
    private $displayCarousel;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


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
     * Set idPage
     *
     * @param integer $idPage
     * @return Article
     */
    public function setIdPage($idPage)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set idCarousel
     *
     * @param integer $idCarousel
     * @return Article
     */
    public function setIdCarousel($idCarousel)
    {
        $this->idCarousel = $idCarousel;

        return $this;
    }

    /**
     * Get idCarousel
     *
     * @return integer 
     */
    public function getIdCarousel()
    {
        return $this->idCarousel;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Article
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Article
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set displayTitle
     *
     * @param boolean $displayTitle
     * @return Article
     */
    public function setDisplayTitle($displayTitle)
    {
        $this->displayTitle = $displayTitle;

        return $this;
    }

    /**
     * Get displayTitle
     *
     * @return boolean 
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Set displayCarousel
     *
     * @param boolean $displayCarousel
     * @return Article
     */
    public function setDisplayCarousel($displayCarousel)
    {
        $this->displayCarousel = $displayCarousel;

        return $this;
    }

    /**
     * Get displayCarousel
     *
     * @return boolean 
     */
    public function getDisplayCarousel()
    {
        return $this->displayCarousel;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Article
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return Article
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}
