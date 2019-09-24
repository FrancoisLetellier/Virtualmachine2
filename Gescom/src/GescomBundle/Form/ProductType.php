<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 04/05/17
 * Time: 17:05
 */

namespace GescomBundle\Form;


use GescomBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('nom', TextType::class, ['label' => 'Nom du Produit'])
        ->add('description', TextareaType::class, [
            'label' => 'Description',
            'attr'  => [
                'rows' => '5',
    ],
    ])
        ->add('category')
        ->add('productSupplier', SupplierListType::class)
        ->add('submit', SubmitType::class, ['label' => 'Enregistrer']);
}

  public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => Product::class,
    ));
}

    public function getBlockPrefix()
{
    return 'gescom_bundle_product_type';
}



}