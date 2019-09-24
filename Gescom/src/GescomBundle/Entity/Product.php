<?php

namespace GescomBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="GescomBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     *
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\Category", inversedBy="products")
     *
     */
    private $category;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="GescomBundle\Entity\Product_Supplier", mappedBy="product")
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
     * @return Product
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
     * @return Product
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
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
     * @return Product
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
