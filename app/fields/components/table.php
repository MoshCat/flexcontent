<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$editor = new FieldsBuilder('table');

$editor
    ->addField('table', 'table', ['use_header' => 0])
        ->addSelect('table_use_borders')
            -> addChoice('', 'Normal')
            -> addChoice('table-borderless', 'No borders')
            ->setDefaultValue('')
        ->addTruefalse('table_small', ['message' => 'Use small table']);

return $editor;
