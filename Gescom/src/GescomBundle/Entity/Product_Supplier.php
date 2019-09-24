<?php

namespace GescomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product_Supplier
 *
 * @ORM\Table(name="product__supplier")
 * @ORM\Entity(repositoryClass="GescomBundle\Repository\Product_SupplierRepository")
 */
class Product_Supplier
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
     *
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\Product", inversedBy="product_supplier")
     */
    private $product;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\Supplier", inversedBy="product_supplier")
     */
    private $supplier;


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
     * Set products
     *
     * @param \GescomBundle\Entity\Product $products
     *
     * @return Product_Supplier
     */
    public function setProducts(\GescomBundle\Entity\Product $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \GescomBundle\Entity\Product
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set suppliers
     *
     * @param \GescomBundle\Entity\Supplier $suppliers
     *
     * @return Product_Supplier
     */
    public function setSuppliers(\GescomBundle\Entity\Supplier $suppliers = null)
    {
        $this->suppliers = $suppliers;

        return $this;
    }

    /**
     * Get suppliers
     *
     * @return \GescomBundle\Entity\Supplier
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }

    /**
     * Set product
     *
     * @param \GescomBundle\Entity\Product $product
     *
     * @return Product_Supplier
     */
    public function setProduct(\GescomBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \GescomBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set supplier
     *
     * @param \GescomBundle\Entity\Supplier $supplier
     *
     * @return Product_Supplier
     */
    public function setSupplier(\GescomBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \GescomBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }
}
