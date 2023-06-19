<?php

namespace App\Admin\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$theme_options = new FieldsBuilder('theme_options', ['title' => 'Opções do tema']);

$theme_options
  ->addGroup('footer_options', ['label' => 'Geral'])
    ->addText('footer_phone', [
      'label' => 'Fale com a gente (número)',
      'wrapper' => [
        'width' => '50'
      ]
    ])
    ->addEmail('footer_email', [
      'label' => 'Email',
      'wrapper' => [
        'width' => '50'
      ]
    ])
    ->addWysiwyg('footer_address', ['label' => 'Endereço'])
    ->addLink('footer_cta', ['label' => 'CTA (Call to Action)'])
    ->addText('footer_facebook', ['label' => 'Facebook'])
    ->addText('footer_twitter', ['label' => 'Twitter'])
    ->addText('footer_instagram', ['label' => 'Instagram'])
    ->addText('footer_linkedin', ['label' => 'Linkedin'])
    ->addText('footer_youtube', ['label' => 'Youtube'])
  ->endGroup();

$theme_options
  ->addGroup('footer_column_1', [
    'label' => 'Configurações do rodapé coluna 1',
    'wrapper' => [
      'width' => '50'
    ]
  ])
    ->addText('footer_menu_column_1_title', ['label' => 'Titulo da Coluna'])
    ->addRepeater('footer_menu_column_1_links', ['label' => 'Items do menu'])
      ->addLink('footer_menu_column_1_link', ['label' => 'Itens do menu'])
    ->endRepeater()
  ->endGroup();

$theme_options
  ->addGroup('footer_column_2',  [
    'label' => 'Configurações do rodapé coluna 2',
    'wrapper' => [
      'width' => '50'
    ]
  ])
    ->addText('footer_menu_column_2_title', ['label' => 'Titulo da Coluna'])
    ->addRepeater('footer_menu_column_2_links', ['label' => 'Itens do menu'])
      ->addLink('footer_menu_column_2_link', ['label' => 'Coluna 2'])
    ->endRepeater()
  ->endGroup();

$theme_options
    ->setLocation('options_page', '==', 'theme-general-settings');
    
return $theme_options;