<?php

use function App\config;

$background_footer = config('theme.uri') . '/resources/assets/images/footer-background.png';
?>

<footer class="footer" style="background-image: url('{!! $background_footer !!}')">
  <div class="container">
    <div class="text-center">
      <img class="mt-3" src="@asset('images/logo-desjoyaux-footer.png')" alt="">
    </div>
    <div class="row justify-content-between footer__columns">
      <div class="col-md-3">
        <h5 class="footer__columns__title">{!! $options_footer_column_one['footer_menu_column_1_title'] !!}</h5>
        <ul class="navbar-nav">
          @foreach ($options_footer_column_one['footer_menu_column_1_links'] as $column)
          <li class="nav-item">
            <a class="nav-link" href="{!! $column['footer_menu_column_1_links']['url'] !!}">{!! $column['footer_menu_column_1_link']['title'] !!}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer__columns__title">{!! $options_footer_column_two['footer_menu_column_2_title'] !!}</h5>
        <ul class="navbar-nav">
          @foreach ($options_footer_column_two['footer_menu_column_2_links'] as $column)
          <li class="nav-item">
            <a class="nav-link" href="{!! $column['footer_menu_column_2_links']['url'] !!}">{!! $column['footer_menu_column_2_link']['title'] !!}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="footer__columns__title">FALE COM A GENTE</h5>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link pl-0" href="tel:+55{!! $options_footer['footer_phone'] !!}">
              {!! $options_footer['footer_phone'] !!}
            </a>
          </li>
        </ul>
        <h5 class="footer__columns__title">E-MAIL</h5>
        <p>{!! $options_footer['footer_email'] !!}</p>
        <h5 class="footer__columns__title">ENDEREÇO</h5>
        <p>{!! $options_footer['footer_address'] !!}</p>
        <a href="{!! $options_footer['footer_cta']['url'] !!}" class="btn btn-primary footer__columns__cta">{!! $options_footer['footer_cta']['title'] !!}</a>
      </div>
      <div class="col-md-3">
        <h5 class="footer__columns__title">REDES SOCIAIS</h5>
        <ul class="nav footer__columns__nav">
          <li class="nav-item">
            <a class="nav-link" href="{!! $options_footer['footer_facebook'] !!}">
              <img src="@asset('images/icons/facebook.svg')" alt=""> / {!! $options_footer['footer_facebook'] !!}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! $options_footer['footer_twitter'] !!}">
              <img src="@asset('images/icons/twitter.svg')" alt=""> / {!! $options_footer['footer_twitter'] !!}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! $options_footer['footer_instagram'] !!}">
              <img src="@asset('images/icons/instagram.svg')" alt=""> / {!! $options_footer['footer_instagram'] !!}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! $options_footer['footer_linkedin'] !!}">
              <img src="@asset('images/icons/linkedin.svg')" alt=""> / {!! $options_footer['footer_linkedin'] !!}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! $options_footer['footer_youtube'] !!}">
              <img src="@asset('images/icons/youtube.svg')" alt=""> / {!! $options_footer['footer_youtube'] !!}
            </a>
          </li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="footer-cookies text-center">
      <p>Este site usa cookies e dados pessoais de acordo com os nossos Termos de Uso e Política de Privacidade.</p>
      <span>Configuração de Cookies</span>
    </div>
    <div class="row justify-content-center justify-content-md-between">
      <span class="copyright">Desjoyaux | Todos os Direitos Reservados</span>
      <span>DESENVOLVIMENTO: <img src="@asset('images/logo-vitamina-web.png')" alt=""></span>
    </div>
  </div>
</footer>