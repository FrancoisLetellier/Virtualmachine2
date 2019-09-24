<?php

namespace GescomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GescomBundle\Entity\Category;
use GescomBundle\Entity\Product_Supplier;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="GescomBundle\Repository\productRepository")
 */
class product
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
     * @Assert\Length(
     *      min = 3,
     *      max = 200
     *)
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=255)
     *
     */
    private $nom;

    /**
     * @var string
     * @Assert\Length(
     *      min = 10,
     *      max = 255
     *)
     * @Assert\NotBlank()
     * @ORM\Column(name="description", type="string", length=255)
     */
    protected $description;

    /**
     * @var Category
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\Category", inversedBy="products")
     */
    public $category;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="GescomBundle\Entity\Product_Supplier", mappedBy="product")
     */
    private $productSupplier;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productSupplier = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return product
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
     * Set description
     *
     * @param string $description
     *
     * @return product
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
     * Set category
     *
     * @param \GescomBundle\Entity\Category $category
     *
     * @return product
     */
    public function setCategory(\GescomBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \GescomBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add productSupplier
     *
     * @param \GescomBundle\Entity\Product_Supplier $productSupplier
     *
     * @return product
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
