<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SprintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('nbdifficultemax')
            ->add('datedebut')
            ->add('datefin')
            //->add('userStorieUserStorie')
           // ->add('equipeequipe')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Suiviprojet\AdministrateurBundle\Entity\Sprint'
        ));
    }

    public function getName()
    {
        return 'suiviprojet_administrateurbundle_sprinttype';
    }
}
