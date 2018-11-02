<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$columns_list = new FieldsBuilder('columns_list');
$columns_list
    ->addTab('content', ['placement' => 'left'])
        ->addRepeater('list', ['button_label' => 'Add Item', 'layout' => 'block'])
            ->addImage('image', ['return_format' => 'id', 'preview_size' => 'medium'])
            ->addGroup('content')
                ->addWysiwyg('editor', ['wrapper' => ['class' => 'autosize']])
                ->addFields(get_field_partial('components.button_content'))
                ->endGroup()
        ->endRepeater()
    ->addTab('options')
        ->addFields(get_field_partial('partials.container_width'))
        ->addFields(get_field_partial('partials.bg_color'))
        ->addCheckbox('options', ['allow_custom' => 1, 'label' => __('Options', 'sage'), 'default_value' => [1 => 'text-center']])
            ->addChoice('mb', __('Margin bottom', 'sage'))
            ->addChoice('bg-img', __('Background image', 'sage'))
            ->addChoice('text-center', __('Center text', 'sage'))
        ->addGroup('bg_image', ['label' =>  __('Background image', 'sage')])
            ->conditional('options', '==', 'bg-img')
            ->addFields(get_field_partial('partials.bg_img'))
        ->endGroup()
    ->addTab('columns_list_options')
        ->addRadio('layout', ['label' =>  __('Layout', 'sage')])
            ->addChoice('columns', __('Columns', 'sage'))
            ->addChoice('rows', __('Rows', 'sage'))
        ->addGroup('layout_column_options', ['label' =>  __('Column layout', 'sage')])
            ->conditional('layout', '==', 'columns')
            ->addSelect('column_amount', ['label' => __('Column amount', 'sage')])
                ->addChoice('2')
                ->addChoice('3')
                ->addChoice('4')
                ->setDefaultValue('4')
        ->endGroup()
        ->addGroup('layout_row_options', ['label' =>  __('Row layout', 'sage')])
            ->conditional('layout', '==', 'rows')
            ->addCheckbox('options', ['label' => __('Options', 'sage'), 'default_value' => [0 => 'alternate', 1 => 'lg-img']])
                ->addChoice('alternate', __('Alternate rows', 'sage'))
                ->addChoice('lg-img', __('Large images', 'sage'))
        ->endGroup()
        ->addGroup('buttons', ['label' => __('Buttons', 'sage')])
            ->addFields(get_field_partial('components.button_options'))
        ->endGroup()
        ->addRadio('image_shape', ['label' =>  __('Image shape', 'sage')])
            ->addChoice('normal', __('Normal', 'sage'))
            ->addChoice('square', __('Square', 'sage'))
            ->addChoice('round', __('Round', 'sage'))
            ->setDefaultValue('round');

return $columns_list;
