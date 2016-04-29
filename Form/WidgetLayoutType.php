<?php

namespace Victoire\Widget\LayoutBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetLayout form type.
 */
class WidgetLayoutType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = [
            'widget_layout.form.layout.choice.once.label'               => 'once',
            'widget_layout.form.layout.choice.third.label'              => 'third',
            'widget_layout.form.layout.choice.third12.label'            => 'third12',
            'widget_layout.form.layout.choice.third21.label'            => 'third21',
            'widget_layout.form.layout.choice.half.label'               => 'half',
            'widget_layout.form.layout.choice.halfquarterquarter.label' => 'halfquarterquarter',
            'widget_layout.form.layout.choice.quarterhalfquarter.label' => 'quarterhalfquarter',
            'widget_layout.form.layout.choice.quarterquarterhalf.label' => 'quarterquarterhalf',
            'widget_layout.form.layout.choice.quarters.label'           => 'quarters',
            'widget_layout.form.layout.choice.fifth.label'              => 'fifth',
            'widget_layout.form.layout.choice.2575.label'               => '2575',
            'widget_layout.form.layout.choice.7525.label'               => '7525',
            'widget_layout.form.layout.choice.sixth.label'              => 'sixth',
        ];
        $builder->add('layoutXs', ChoiceType::class, [
            'label'             => 'widget_layout.form.layoutXs.label',
            'choices'           => $choices,
            'choices_as_values' => true,
            'required'          => false,
            'placeholder'       => 'widget_layout.form.layout.placeholder',
        ])
        ->add('layoutSm', ChoiceType::class, [
            'label'             => 'widget_layout.form.layoutSm.label',
            'choices'           => $choices,
            'choices_as_values' => true,
            'required'          => false,
            'placeholder'       => 'widget_layout.form.layout.placeholder',
        ])
        ->add('layoutMd', ChoiceType::class, [
            'label'             => 'widget_layout.form.layoutMd.label',
            'choices'           => $choices,
            'choices_as_values' => true,
            'required'          => true,
            'placeholder'       => 'widget_layout.form.layout.placeholder',
        ])
        ->add('layoutLg', ChoiceType::class, [
            'label'             => 'widget_layout.form.layoutLg.label',
            'choices'           => $choices,
            'choices_as_values' => true,
            'required'          => false,
            'placeholder'       => 'widget_layout.form.layout.placeholder',
        ])
            ->add('hasContainer', null, [
                'label'          => 'widget_layout.form.layout.hasContainer.label',
                'vic_help_block' => 'widget_layout.form.layout.hasContainer.vic_help_block',
            ]);

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\LayoutBundle\Entity\WidgetLayout',
            'widget'             => 'Layout',
            'translation_domain' => 'victoire',
        ]);
    }
}
