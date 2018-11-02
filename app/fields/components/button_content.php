<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$button_content = new FieldsBuilder('button_content');
$button_content
    ->addText('button_text', ['placeholder' => __('Button text', 'sage')])
    ->addLink('button_link', ['placeholder' => __('Button link', 'sage')]);

return $button_content;
