<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$editor = new FieldsBuilder('editor');

$editor
    ->addWysiwyg('editor', ['wrapper' => ['class' => 'autosize']]);

return $editor;
