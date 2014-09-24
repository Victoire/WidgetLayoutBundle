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
        $builder->add('layout', 'choice', array(
            'label' => 'widget_layout.form.layout.label',
            'choices' => array(
                'once'                => 'widget_layout.form.layout.choice.once.label',
                'third'               => 'widget_layout.form.layout.choice.third.label',
                'third2'              => 'widget_layout.form.layout.choice.third2.label',
                'halfhalf'            => 'widget_layout.form.layout.choice.half.label',
                'halfquarterquarter'  => 'widget_layout.form.layout.choice.halfquarterquarter.label',
                'quarterhalfquarter'  => 'widget_layout.form.layout.choice.quarterhalfquarter.label',
                'quarterquarterhalf'  => 'widget_layout.form.layout.choice.quarterquarterhalf.label',
                'quarterquarterhalf'  => 'widget_layout.form.layout.choice.quarterquarterhalf.label'
            )
        ));
        $builder->add('containerTag', 'choice', array(
            'label' => 'widget_layout.form.containerTag.label',
            'vic_help_block' => 'widget_layout.form.containerTag.help_block',
            'choices' => array_combine(WidgetLayout::$tags, WidgetLayout::$tags)
        ));
        $builder->add('containerClass', null, array(
            'label' => 'widget_layout.form.containerClass.label',
            'required' => false
        ));
        $builder->add('containerWidth', null, array(
            'label' => 'widget_layout.form.containerWidth.label',
            'vic_help_block' => 'widget_layout.form.containerWidth.help_block',
            'required' => false
        ));
        $builder->add('containerMargin', null, array(
            'label' => 'widget_layout.form.containerMargin.label',
            'vic_help_block' => 'widget_layout.form.containerMargin.help_block',
            'required' => false
        ));
        $builder->add('containerPadding', null, array(
            'label' => 'widget_layout.form.containerPadding.label',
            'vic_help_block' => 'widget_layout.form.containerPadding.help_block',
            'required' => false
        ));
        $builder->add('containerBackground', null, array(
            'label' => 'widget_layout.form.containerBackground.label',
            'vic_help_block' => 'widget_layout.form.containerBackground.help_block',
            'required' => false
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
            'translation_domain' => 'victoire'
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
