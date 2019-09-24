<?php

namespace GescomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity(repositoryClass="GescomBundle\Repository\SupplierRepository")
 */
class Supplier
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="siret", type="integer")
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="site_web", type="string", length=255)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="délai_de_livraison", type="string", length=255)
     */
    private $délaiDeLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="GescomBundle\Entity\Product_Supplier", mappedBy="supplier")
     */
    private $product_supplier;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Supplier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Supplier
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Supplier
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Supplier
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Supplier
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set siret
     *
     * @param integer $siret
     *
     * @return Supplier
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return int
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return Supplier
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set délaiDeLivraison
     *
     * @param string $délaiDeLivraison
     *
     * @return Supplier
     */
    public function setDélaiDeLivraison($délaiDeLivraison)
    {
        $this->délaiDeLivraison = $délaiDeLivraison;

        return $this;
    }

    /**
     * Get délaiDeLivraison
     *
     * @return string
     */
    public function getDélaiDeLivraison()
    {
        return $this->délaiDeLivraison;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Supplier
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product_supplier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add productSupplier
     *
     * @param \GescomBundle\Entity\Product_Supplier $productSupplier
     *
     * @return Supplier
     */
    public function addProductSupplier(\GescomBundle\Entity\Product_Supplier $productSupplier)
    {
        $this->product_supplier[] = $productSupplier;

        return $this;
    }

    /**
     * Remove productSupplier
     *
     * @param \GescomBundle\Entity\Product_Supplier $productSupplier
     */
    public function removeProductSupplier(\GescomBundle\Entity\Product_Supplier $productSupplier)
    {
        $this->product_supplier->removeElement($productSupplier);
    }

    /**
     * Get productSupplier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductSupplier()
    {
        return $this->product_supplier;
    }
}
