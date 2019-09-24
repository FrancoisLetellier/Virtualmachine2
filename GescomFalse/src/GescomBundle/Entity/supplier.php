<?php


namespace GescomBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use GescomBundle\Entity\Product_Supplier;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * supplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity(repositoryClass="GescomBundle\Repository\fournisseurRepository")
 */
class supplier
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
     * @var
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotEqualTo("name")
     * @Assert\NotEqualTo("email")
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    protected $adresse;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255)
     */
    private $motDePasse;

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
     * @var \DateTime
     *
     * @ORM\Column(name="délai_de_livraison", type="date")
     */
    private $délaiDeLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="GescomBundle\Entity\Product_Supplier", mappedBy="supplier")
     */
    private $productSupplier;


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
     * @return supplier
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
     * @return supplier
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
     * @return supplier
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
     * Set motDePasse
     *
     * @param string $motDePasse
     *
     * @return supplier
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return supplier
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
     * @return supplier
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
     * @return supplier
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
     * @return supplier
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
     * @param \DateTime $délaiDeLivraison
     *
     * @return supplier
     */
    public function setDélaiDeLivraison($délaiDeLivraison)
    {
        $this->délaiDeLivraison = $délaiDeLivraison;

        return $this;
    }

    /**
     * Get délaiDeLivraison
     *
     * @return \DateTime
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
     * @return supplier
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
     * Set pays
     *
     * @param string $pays
     *
     * @return supplier
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return supplier
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productSupplier = new ArrayCollection();
    }

    /**
     * Add productSupplier
     *
     * @param \GescomBundle\Entity\Product_Supplier $productSupplier
     *
     * @return supplier
     */
    public function addProductSupplier(\GescomBundle\Entity\Product_Supplier $productSupplier)
    {
        $this->productSupplier[] = $productSupplier;

        return $this;
    }

    /**
     * Remove productSupplier
     *
     * @param \GescomBundle\Entity\Product_Supplier $productSupplier
     */
    public function removeProductSupplier(\GescomBundle\Entity\Product_Supplier $productSupplier)
    {
        $this->productSupplier->removeElement($productSupplier);
    }

    /**
     * Get productSupplier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductSupplier()
    {
        return $this->productSupplier;
    }
}
