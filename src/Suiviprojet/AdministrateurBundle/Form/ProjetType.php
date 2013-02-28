<?php

namespace Suiviprojet\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text',array('label'=>'nom :'))
                ->add('clientclient', 'entity', array('label'=>'client :', 'class' => 'SuiviprojetAdministrateurBundle:Client', 'property' => 'societe'))
                ->add('dateDebut', 'date',array('label'=>'Début :'))
                ->add('dateFin', 'date',array ('label'=>'Fin :'))
                ->add('description', 'textarea',array('label'=>'Description :'))
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
