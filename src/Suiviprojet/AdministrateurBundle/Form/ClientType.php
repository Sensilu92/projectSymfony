<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('societe', 'text')
            ->add('nomContact', 'text')
            ->add('prenomContact', 'text')
            ->add('telephoneContact', null)
            ->add('identifiantconnection', 'text')
            ->add('passwordconnection', 'password')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suiviprojet\AdministrateurBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'suiviprojet_administrateurbundle_clienttype';
    }
}
