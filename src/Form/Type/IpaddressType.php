<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class IpaddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ipString', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }
/*
    public function configureOptions(OptionsResolver $resolver)//: void
    {
        $resolver->setDefaults([
            'data_class' => Ipaddress::class,
        ]);
    }*/
}