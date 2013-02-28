<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   //construit les champs des formulaires
        $builder
            ->add('societe', 'text',array('label'=> 'societé :'))
            ->add('nomContact', 'text',array('label'=> 'nom :'))
            ->add('prenomContact', 'text',array('label'=> 'prénom :'))
            ->add('telephoneContact', null,array('label'=> 'téléphone :'))
            ->add('identifiantconnection', 'text',array('label'=> 'identifiant :'))
            ->add('passwordconnection', 'password',array('label'=> 'mot de passe :'))
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
