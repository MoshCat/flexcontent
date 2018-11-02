<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$bg_color = new FieldsBuilder('bg_color');
$bg_color
    ->addRadio('bg_color', ['label' => __('Background Color', 'sage')])
        ->addChoice('none', __('None', 'sage'))
        ->addChoice('bg-light', __('Light', 'sage'))
        ->addChoice('bg-dark', __('Dark', 'sage'))
        ->addChoice('bg-primary', __('Color 1', 'sage'))
        ->addChoice('bg-secondary', __('Color 2', 'sage'))
        ->setDefaultValue('none');

return $bg_color;
