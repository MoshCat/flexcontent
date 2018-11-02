<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button_options = new FieldsBuilder('button_options');
$button_options
    ->addSelect('button_size', ['label' => __('Size', 'sage')])
        ->addChoice('btn-sm', __('Small', 'sage'))
        ->addChoice('btn-md', __('Normal', 'sage'))
        ->addChoice('btn-lg', __('Large', 'sage'))
        ->setDefaultValue('btn-md')
    ->addSelect('button_color', ['label' => __('Color', 'sage')])
        ->addChoice('btn-primary', __('Color 1', 'sage'))
        ->addChoice('btn-outline-primary', __('Color 1 outline', 'sage'))
        ->addChoice('btn-secondary', __('Color 2', 'sage'))
        ->addChoice('btn-outline-secondary', __('Color 2 outline', 'sage'))
        ->addChoice('btn-light', __('Light', 'sage'))
        ->addChoice('btn-outline-light', __('Light outline', 'sage'))
        ->addChoice('btn-link', __('Link', 'sage'))
        ->setDefaultValue('btn-primary')
    ->addSelect('button_align', ['label' => __('Alignment', 'sage')])
        ->addChoice('d-inline-block', __('Left', 'sage'))
        ->addChoice('d-table mx-auto', __('Center', 'sage'))
        ->addChoice('d-table ml-auto', __('Right', 'sage'))
        ->addChoice('btn-block', __('Block', 'sage'))
        ->setDefaultValue('d-inline-block');

return $button_options;
