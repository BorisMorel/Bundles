<?php

namespace BOMO\ApiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MeasureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('v')
            ->add('ht')
            ->add('dl')
            ->add('dr')
            ->add('wci')
            ->add('wct')
            ->add('ec')
            ->add('ea')
            ->add('el')
            ->add('ev')
            ->add('tid')
            ->add('ds')
            ->add('cn')
            ->add('cs')
            ->add('cm')
            ->add('ck')
            ->add('cc')
            ->add('sn')
            ->add('an')
            ->add('av')
            ->add('qt')
            ->add('z')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BOMO\BaseBundle\Model\Measure',
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ));
    }
    
    public function getName()
    {
        return '';
    }
}