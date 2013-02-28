<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text')
                ->add('clientclient', 'entity', array('class' => 'SuiviprojetAdministrateurBundle:Client', 'property' => 'societe'))
                ->add('dateDebut', 'date')
                ->add('dateFin', 'date')
                ->add('description', 'textarea')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Suiviprojet\AdministrateurBundle\Entity\Projet'
        ));
    }

    public function getName() {
        return 'suiviprojet_administrateurbundle_projettype';
    }

}
