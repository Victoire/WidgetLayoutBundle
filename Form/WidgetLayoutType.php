<?php

namespace Victoire\Widget\LayoutBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Widget\LayoutBundle\Entity\WidgetLayout;

/**
 * WidgetLayout form type
 */
class WidgetLayoutType extends WidgetType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array(
            'once'                => 'widget_layout.form.layout.choice.once.label',
            'third'               => 'widget_layout.form.layout.choice.third.label',
            'third12'             => 'widget_layout.form.layout.choice.third12.label',
            'third21'             => 'widget_layout.form.layout.choice.third21.label',
            'half'                => 'widget_layout.form.layout.choice.half.label',
            'halfquarterquarter'  => 'widget_layout.form.layout.choice.halfquarterquarter.label',
            'quarterhalfquarter'  => 'widget_layout.form.layout.choice.quarterhalfquarter.label',
            'quarterquarterhalf'  => 'widget_layout.form.layout.choice.quarterquarterhalf.label',
            'quarters'            => 'widget_layout.form.layout.choice.quarters.label',
            'fifth'               => 'widget_layout.form.layout.choice.fifth.label',
            '2575'                => 'widget_layout.form.layout.choice.2575.label',
            '7525'                => 'widget_layout.form.layout.choice.7525.label',
        );
        $builder->add('layoutXs', 'choice', array(
            'label'        => 'widget_layout.form.layoutXs.label',
            'choices'      => $choices,
            'required' => false,
            'placeholder' => 'widget_layout.form.layout.placeholder',
        ))
        ->add('layoutSm', 'choice', array(
            'label'        => 'widget_layout.form.layoutSm.label',
            'choices'      => $choices,
            'required' => false,
            'placeholder' => 'widget_layout.form.layout.placeholder',
        ))
        ->add('layoutMd', 'choice', array(
            'label'        => 'widget_layout.form.layoutMd.label',
            'choices'      => $choices,
            'required' => false,
            'placeholder' => 'widget_layout.form.layout.placeholder',
        ))
        ->add('layoutLg', 'choice', array(
            'label'        => 'widget_layout.form.layoutLg.label',
            'choices'      => $choices,
            'required' => false,
            'placeholder' => 'widget_layout.form.layout.placeholder',
        ))
            ->add('hasContainer', null, array(
                'label' => 'widget_layout.form.layout.hasContainer.label',
                'vic_help_block' => 'widget_layout.form.layout.hasContainer.vic_help_block',
            ));

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetLayout entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\LayoutBundle\Entity\WidgetLayout',
            'widget'             => 'Layout',
            'translation_domain' => 'victoire',
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_layout';
    }
}
