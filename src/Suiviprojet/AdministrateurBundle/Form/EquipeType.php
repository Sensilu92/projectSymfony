<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
           
            //->add('nbdifficulte')
            //->add('developperdevelopper')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suiviprojet\AdministrateurBundle\Entity\Equipe'
        ));
    }

    public function getName()
    {
        return 'suiviprojet_administrateurbundle_equipetype';
    }
}
