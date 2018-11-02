<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$bg_img = new FieldsBuilder('bg_img');
$bg_img
    ->addImage('image', ['return_format' => 'id', 'label' => __('Image', 'sage')])
    ->addRadio('position', ['label' => __('Position', 'sage')])
        ->addChoice('top', __('Top', 'sage'))
        ->addChoice('center', __('Center', 'sage'))
        ->addChoice('bottom', __('Bottom', 'sage'))
        ->setDefaultValue('center')
    ->addTrueFalse('repeat', ['label' => __('Repeat', 'sage'), 'ui' => 1]);

return $bg_img;
