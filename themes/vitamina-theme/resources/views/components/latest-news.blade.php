<section class="section-latest-news">
  <div class="container">
    <div class="wrapper text-center">
      <h1 class="section-latest-news__title">{!! $options_latest_news['latest_news_title'] !!}</h1>
      <p class="section-latest-news__subtitle">{!! $options_latest_news['latest_news_subtitle'] !!}</p>
    </div>
    <div class="section-latest-news__content">
      <div class="swiper slider-latest-news">
        <div class="swiper-wrapper align-items-baseline">
          @foreach ($options_latest_news['latest_news'] as $latest_news)
          <div class="card swiper-slide">
            <img class="card-img-top" src="{!! $latest_news['latest_news_image']['url'] !!}" alt="">
            <div class="card-body">
              <h5 class="card-title">{!! $latest_news['latest_news_title'] !!}</h5>
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-news-pagination"></div>
      </div>
    </div>
  </div>
  </div>
</section>