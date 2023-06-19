<div class="swiper slider-why">
  <div class="swiper-wrapper">
    @foreach($options_why['why_numbers'] as $options)
    <section class="section-why swiper-slide" style="background-image: url('<?php echo $options['why_imagem_background']['url'] ?>');">
      <div class="container">
        <div class="wrapper text-center">
          <h1 class="section-why__title">{!! $options_why['why_title'] !!}</h1>
          <h5 class="section-why__subtitle">{!! $options_why['why_subtitle'] !!}</h5>
        </div>
        <div class="section-why__content col-md-8">
          <span class="section-why__content__number">{!! $options['why_number'] !!}</span>
          <h3>{!! $options['why_number_title'] !!}</h3>
          <p>{!! $options['why_number_content'] !!}</p>
        </div>
      </div>
    </section>
    @endforeach
  </div>
</div>