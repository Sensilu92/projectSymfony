<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DevelopperType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add ('equipe', new EquipeType())
            //->add('role')
           // ->add('login')
            //->add('password')
            //->add('craHebdomadairecraHebdomadaire')
            //->add('equipeequipe')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suiviprojet\AdministrateurBundle\Entity\Developper'
        ));
    }

    public function getName()
    {
        return 'suiviprojet_administrateurbundle_developpertype';
    }
}
