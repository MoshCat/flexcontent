<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$video = new FieldsBuilder('video');

$video
    ->addOembed('video');

return $video;
