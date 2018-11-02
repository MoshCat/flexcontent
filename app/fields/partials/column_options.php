<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$column_options = new FieldsBuilder('column_options');
$column_options
    ->addFields(get_field_partial('partials.bg_color'))
    ->addCheckbox('options', ['allow_custom' => 1, 'label' => __('Options', 'sage')])
        ->addChoice('bg-img', __('Background image', 'sage'))
    ->addGroup('bg_image', ['label' => __('Background image', 'sage')])
        ->conditional('options', '==', 'bg-img')
        ->addFields(get_field_partial('partials.bg_img'))
    ->endGroup();

return $column_options;
