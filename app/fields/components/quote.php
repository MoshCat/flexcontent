<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$quote = new FieldsBuilder('quote');

$quote
    ->addTextArea('quote', [
        'rows' => 4,
        'placeholder' => __('Quote', 'sage'),
        'new_lines' => 'br'
    ])
    ->addText('by', ['placeholder' => __('By', 'sage')])
    ->addText('source', ['placeholder' => __('Source', 'sage')])
    ->addSelect('align')
        ->addChoice('text-left', __('Left', 'sage'))
        ->addChoice('text-center', __('Center', 'sage'))
        ->addChoice('text-right', __('Right', 'sage'))
        ->setDefaultValue('text-center');

return $quote;
