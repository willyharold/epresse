<?php

namespace Nano\EpresseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="Nano\EpresseBundle\Repository\CommentaireRepository")
 */
class Commentaire {

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
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdd", type="datetime")
     */
    private $dateAdd;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\EpresseBundle\Entity\Abonne", inversedBy="commentaire")
     * @ORM\JoinColumn(name="abonne", referencedColumnName="id",nullable=false)
     */
    private $abonne;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\EpresseBundle\Entity\Article", inversedBy="commentaire")
     * @ORM\JoinColumn(name="article", referencedColumnName="id")
     */
    private $article;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Commentaire
     */
    public function setDateAdd($dateAdd) {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd() {
        return $this->dateAdd;
    }

}
