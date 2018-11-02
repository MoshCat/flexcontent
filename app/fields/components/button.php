<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button = new FieldsBuilder('button');
$button
    ->addFields(get_field_partial('components.button_content'))
    ->addFields(get_field_partial('components.button_options'));

return $button;
