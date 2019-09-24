<?php

namespace GescomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GescomBundle\Entity\supplier;
use GescomBundle\Entity\product;

/**
 *
 * @ORM\Table(name="product_supplier")
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
     * @var Supplier
     *
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\supplier", inversedBy="productSupplier")
     */
    private $supplier;


    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="GescomBundle\Entity\product", inversedBy="productSupplier")
     */
    private $product;




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
     * Set supplier
     *
     * @param \GescomBundle\Entity\supplier $supplier
     *
     * @return Product_Supplier
     */
    public function setSupplier(\GescomBundle\Entity\supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \GescomBundle\Entity\supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set product
     *
     * @param \GescomBundle\Entity\product $product
     *
     * @return Product_Supplier
     */
    public function setProduct(\GescomBundle\Entity\product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \GescomBundle\Entity\product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
