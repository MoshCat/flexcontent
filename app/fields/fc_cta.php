<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cta = new FieldsBuilder('cta');
$cta
    ->addTab('content', ['placement' => 'left'])
        ->addImage('image', ['preview_size' => 'medium'])
        ->addGroup('content')
            ->addWysiwyg('editor', ['wrapper' => ['class' => 'autosize']])
            ->addFields(get_field_partial('components.button_content'))
        ->endGroup()
    ->addTab('options')
        ->addFields(get_field_partial('partials.container_width'))
        ->addFields(get_field_partial('partials.bg_color'))
        ->addCheckbox('options', ['allow_custom' => 1, 'label' => __('Options', 'sage')])
            ->addChoice('mb', __('Margin bottom', 'sage'))
            ->addChoice('bg-img', __('Background image', 'sage'))
        ->addGroup('bg_image', ['label' => __('Background image', 'sage')])
            ->conditional('options', '==', 'bg-img')
            ->addFields(get_field_partial('partials.bg_img'))
        ->endGroup()
    ->addTab('cta_options')
        ->addRadio('layout', ['label' => __('Layout', 'sage')])
                ->addChoice('layout-1', __('Layout 1', 'sage'))
                ->addChoice('layout-2', __('Layout 2', 'sage'))
        ->addGroup('layout_1_options', ['label' => __('Layout 1 Options', 'sage')])
            ->conditional('layout', '==', 'layout-1')
            // ->addFields(get_field_partial('partials.bg_color'))
        ->endGroup()
        ->addGroup('layout_2_options', ['label' => __('Layout 2 Options', 'sage')])
            ->conditional('layout', '==', 'layout-2')
            ->addRadio('color', ['label' => __('Color', 'sage')])
                ->addChoice('color-1', __('Color 1', 'sage'))
                ->addChoice('color-2', __('Color 2', 'sage'))
        ->endGroup();
    
return $cta;
