<section class="section-history">
  <div class="container">
    <div class="row">
      <div class="section-history__content">
        <h1>{!! $options_history['history_title'] !!}</h1>
        <h5>{!! $options_history['history_subtitle'] !!}</h5>
        <p>{!! $options_history['history_content'] !!}</p>
      </div>
    </div>
    <div class="section-history__slide-years card-container">
      <div class="swiper slider-history">
        <div class="swiper-wrapper">
          @foreach($options_history['history_years'] as $history)
          <div class="swiper-slide">
            <span class="section-history__slide-years__year">{!! $history['history_year'] !!}</span>
            <div class="card">
              <img class="card-img-top" src="{!! $history['history_image']['url'] !!}" alt="">
              <div class="card-body">
                <h5 class="card-title">{!! $history['hitory_year_title'] !!}</h5>
                <p class="card-text">{!! $history['hitory_year_content'] !!}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <p class="section-history__slide-years__final">{!! $options_history['history_content_footer']!!}</p>
    </div>
  </div>
  </div>
</section>