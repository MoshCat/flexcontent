<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$gallery = new FieldsBuilder('gallery');

$gallery
    ->addGallery('gallery')
    ->addSelect('gallery_columns')
        ->addChoice('1', '1 Column', 'sage')
        ->addChoice('2', '2 Columns', 'sage')
        ->addChoice('3', '3 Columns', 'sage')
        ->addChoice('4', '4 Columns', 'sage')
        ->addChoice('5', '5 Columns', 'sage')
        ->addChoice('6', '6 Columns', 'sage')
        ->setDefaultValue('3')
    ->addSelect('gallery_size')
        ->addChoice('thumbnail', 'Thumbnail', 'sage')
        ->addChoice('medium', 'Medium', 'sage')
        ->addChoice('large', 'Large', 'sage')
        ->addChoice('full', 'Full', 'sage')
        ->setDefaultValue('medium')
    ->addSelect('gallery_link')
        ->addChoice('none', 'None', 'sage')
        ->addChoice('file', 'File', 'sage')
        ->setDefaultValue('none');

return $gallery;
