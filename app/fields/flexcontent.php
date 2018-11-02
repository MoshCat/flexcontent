<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$flexcontent = new FieldsBuilder('fc', [
    'style' => 'seamless',
    'hide_on_screen' => [0 => 'the_content']
]);

$flexcontent
    ->setLocation('page_template', '==', 'views/template-flexcontent.blade.php')
    ->addFlexibleContent('fc', ['button_label' => __('Add Section', 'sage')])
        ->addLayout(get_field_partial('fc_columns'), ['label' => __('Columns', 'sage')])
        ->addLayout(get_field_partial('fc_columns_list'), ['label' => __('Columns list', 'sage')])
        ->addLayout(get_field_partial('fc_cta'), ['label' => __('Call to action', 'sage')])
    ->endFlexibleContent();

return $flexcontent;
