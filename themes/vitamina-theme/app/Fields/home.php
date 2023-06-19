<?php

namespace App\Admin\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home = new FieldsBuilder('options_home');

$home
  ->addGroup('options_history', ['label' => 'Seção de História'])
    ->addText('history_title', ['label' => 'Titulo da seção'])
    ->addText('history_subtitle', ['label' => 'Subtitulo da seção'])
    ->addWysiwyg('history_content', ['label' => 'Conteúdo da seção'])
    ->addRepeater('history_years', ['label' => 'Anos de história'])
      ->addText('history_year', ['label' => 'Ano'])
      ->addImage('history_image', ['label' => 'Imagem do ano'])
      ->addText('hitory_year_title', ['label' => 'Título do ano'])
      ->addText('hitory_year_content', ['label' => 'Conteúdo do ano'])
    ->endRepeater()
    ->addText('history_content_footer', ['label' => 'Conteúdo do rodapé da seção'])
  ->endGroup();
  
$home
  ->addGroup('options_why', ['label' => 'Seção de Porquê'])
    ->addText('why_title', ['label' => 'Título da seção'])
    ->addText('why_subtitle', ['label' => 'Subtítulo da seção'])
    ->addRepeater('why_numbers', ['label' => 'Números'])
      ->addImage('why_imagem_background', ['label' => 'Imagem de fundo'])
      ->addNumber('why_number', ['label' => 'Número'])
      ->addText('why_number_title', ['label' => 'Título'])
      ->addWysiwyg('why_number_content', ['label' => 'Conteúdo do número'])
    ->endRepeater()
  ->endGroup();
  
$home
  ->addGroup('options_differents', ['label' => 'Seção Diferenciais'])
    ->addText('differents_text', ['label' => 'Texto da seção'])
    ->addLink('differents_cta', ['label' => 'Botão de CTA(Call to Action)'])
    ->addText('differents_content_footer', ['label' => 'Conteúdo do rodapé da seção'])
  ->endGroup();
  
$home
 ->addGroup('options_latest_news', ['label' => 'Seção de últimas notícias'])
  ->addText('latest_news_title', ['label' => 'Título da seção'])
  ->addText('latest_news_subtitle', ['label' => 'Subtítulo da seção'])
  ->addRepeater('latest_news', ['label' => 'Últimas notícias'])
    ->addImage('latest_news_image', ['label' => 'Imagem'])
    ->addText('latest_news_title', ['label' => 'Título'])
  ->endRepeater()
 ->endGroup();
 
$home
  ->addGroup('options_contact_benefits', ['label' => 'Seção de contato e benefícios'])
    ->addImage('contact_benefits_background', ['label' => 'Imagem de fundo'])
    ->addText('contact_benefits_title', ['label' => 'Título da seção'])
    ->addGroup('options_contact', [
      'label' => 'Card de contato',
      'wrapper' => [
        'width' => '50'
      ]
    ])
      ->addImage('contact_image', ['label' => 'Imagem contato'])
      ->addWysiwyg('contact_title', ['label' => 'Título contato'])
      ->addWysiwyg('contact_content', ['label' => 'Conteúdo contato'])
      ->addLink('contact_cta', ['label' => 'Botão contato'])
    ->endGroup()
    
    ->addGroup('options_benefits', [
      'label' => 'Card de benefícios',
      'wrapper' => [
        'width' => '50'
      ]
    ])
      ->addImage('benefits_image', ['label' => 'Imagem benefícios'])
      ->addWysiwyg('benefits_title', ['label' => 'Título benefícios'])
      ->addWysiwyg('benefits_content', ['label' => 'Conteúdo benefícios '])
      ->addLink('benefits_cta', ['label' => 'Botão benefícios'])
    ->endGroup();

$home
  ->setLocation('page_template', '==', 'views/template-home.blade.php');

return $home;
