<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page_options = new FieldsBuilder('page_options', ['style' => 'seamless']);
$page_options
    ->setLocation('post_type', '==', 'page')
        ->or('post_type', '==', 'teacher')
    ->setGroupConfig('position', 'side')
    ->addCheckbox('page_options', ['label' => __('Page options', 'sage')])
        ->addChoice('hide_pagetitle', __('Hide page title', 'sage'));

return $page_options;
