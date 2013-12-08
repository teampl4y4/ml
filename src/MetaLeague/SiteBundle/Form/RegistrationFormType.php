<?php

namespace MetaLeague\SiteBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //TODO - probably don't need to ask this on registration, can set up a profile possibly..
        //$builder->add('name');

        parent::buildForm($builder, $options);

        // we map username to e-mail, so users can simply login with their email...
        $builder->remove('username');
    }

    public function getName()
    {
        return 'meta_league_registration';
    }

} 