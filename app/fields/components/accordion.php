<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$accordion = new FieldsBuilder('accordion');

$accordion
    ->addRepeater('accordion', [
        'layout' => 'block',
        'button_label' => __('Add dropdown', 'sage'),
        'collapsed' => 'title'
    ])
        ->addText('title', ['placeholder' => __('Title', 'sage')])
        ->addWysiwyg('content')
    ->endRepeater();

return $accordion;
