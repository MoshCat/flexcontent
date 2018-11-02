<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page_subtitle = new FieldsBuilder('page_subtitle', ['style' => 'seamless']);
$page_subtitle
    ->setLocation('post_type', '==', 'page')
        ->or('post_type', '==', 'teacher')
    ->setGroupConfig('position', 'acf_after_title')
    ->addText('page_subtitle', [
        'label' => __('Page subtitle', 'sage'),
        'placeholder' => __('Page subtitle', 'sage')
    ]);

return $page_subtitle;
