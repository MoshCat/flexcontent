<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$content = new FieldsBuilder('content');
$content
    ->addTab('content', ['label' => __('Content', 'sage')])
        ->addFlexibleContent('content', ['button_label' => __('Add content', 'sage')])
            ->addLayout(get_field_partial('components.tabs'), ['label' => __('Tabs', 'sage')])
            ->addLayout(get_field_partial('components.accordion'), ['label' => __('Dropdowns', 'sage')])
            ->addLayout(get_field_partial('components.video'), ['label' => __('Video', 'sage')])
            ->addLayout(get_field_partial('components.gallery'), ['label' => __('Gallery', 'sage')])
            ->addLayout(get_field_partial('components.quote'), ['label' => __('Quote', 'sage')])
            ->addLayout(get_field_partial('components.alertbox'), ['label' => __('Alertbox', 'sage')])
            ->addLayout(get_field_partial('components.table'), ['label' => __('Table', 'sage')])
            ->addLayout(get_field_partial('components.button'), ['label' => __('Button', 'sage')])
            ->addLayout(get_field_partial('components.editor'), ['label' => __('Text Editor', 'sage')])
        ->endFlexibleContent()
    ->addTab('options', ['label' => __('Options', 'sage')])
        ->addFields(get_field_partial('partials.column_options'));

return $content;
