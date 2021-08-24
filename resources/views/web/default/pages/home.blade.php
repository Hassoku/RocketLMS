@extends(getTemplate().'.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
@endpush

@section('content')
<section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 dis-flex">
          <div class="content">
            <h2 class="hd"><i class="fas fa-caret-right mr-2"></i>Learn from the world’s best</h2>
            <h2 class="sec-heading">Choose <strong>2500+</strong> Online Video Courses With <strong>New Additions..</strong></h2>
            <p>Enroll Today Get 70% off  For All Courses</p>
            <form class="d-flex"  action="/search" method="get">
              <input class="form-control me-2" type="text" name="search" placeholder="Search Courses" aria-label="Search">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-6 dis-flex">
          <div class="img-box">
            <img src="{{ asset('frontend/assets/images/a (30).png') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </div>
</section>
  <!-- Banner -->
  <!-- Logos -->
<section class="logos">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <ul class="list-unstyled">
            <li><img src="{{ asset('frontend/assets/images/logo (1).png') }}" class="img-fluid" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/logo (2).png') }}" class="img-fluid" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/logo (3).png') }}" class="img-fluid" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/logo (4).png') }}" class="img-fluid" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/logo (5).png') }}" class="img-fluid" alt=""></li>
          </ul>
        </div>
      </div>
    </div>
</section>
  <!-- Logos -->
  <!-- Steps -->
<section class="steps">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="sec-heading">Achieve your goals with <strong>MOJAVI</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="{{ asset('frontend/assets/images/a (14).png') }}" class="img-fluid" alt="">
          <h2 class="hd">Learn the latest skills</h2>
          <p>like business analytics, graphic design, Python, and more</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="{{ asset('frontend/assets/images/a (15).png') }}" class="img-fluid" alt="">
          <h2 class="hd">Learn the latest skills</h2>
          <p>like business analytics, graphic design, Python, and more</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="{{ asset('frontend/assets/images/a (16).png') }}" class="img-fluid" alt="">
          <h2 class="hd">Learn the latest skills</h2>
          <p>like business analytics, graphic design, Python, and more</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="{{ asset('frontend/assets/images/a (27).png') }}" class="img-fluid" alt="">
          <h2 class="hd">Learn the latest skills</h2>
          <p>like business analytics, graphic design, Python, and more</p>
        </div>
      </div>
    </div>
</section>
  <!-- Steps -->
  <!-- Team member -->
@if(!empty($bestRateWebinars) and !$bestRateWebinars->isEmpty())
  <section class="home-sections container">
      <div class="d-flex justify-content-between">
          <div>
              <h2 class="section-title">{{ trans('home.best_rates') }}</h2>
              <p class="section-hint">{{ trans('home.best_rates_hint') }}</p>
          </div>

          <a href="/classes?sort=best_rates" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
      </div>

      <div class="mt-10 position-relative">
          <div class="swiper-container best-rates-webinars-swiper px-12">
              <div class="swiper-wrapper py-20">
                  @foreach($bestRateWebinars as $bestRateWebinar)
                      <div class="swiper-slide">
                          @include('web.default.includes.webinar.grid-card',['webinar' => $bestRateWebinar])
                      </div>
                  @endforeach
              </div>
          </div>

          <div class="d-flex justify-content-center">
              <div class="swiper-pagination best-rates-webinars-swiper-pagination"></div>
          </div>
      </div>
  </section>
@endif
  <!-- Team member -->
  <!-- Courses -->
<section class="courses">
    <div class="container">
      <div class="row">
        @if(!empty($latestWebinars) and !$latestWebinars->isEmpty())
        <section class="home-sections home-sections-swiper container">
            <div class="d-flex justify-content-between ">
                <div>
                    <h2 class="section-title">{{ trans('home.latest_classes') }}</h2>
                    <p class="section-hint">{{ trans('home.latest_webinars_hint') }}</p>
                </div>

                <a href="/classes?sort=newest" class="btn btn-border-white">{{ trans('home.view_all') }}</a>
            </div>

            <div class="mt-10 position-relative">
                <div class="swiper-container latest-webinars-swiper px-12">
                    <div class="swiper-wrapper py-20">
                        @foreach($latestWebinars as $latestWebinar)
                            <div class="swiper-slide">
                                @include('web.default.includes.webinar.grid-card',['webinar' => $latestWebinar])
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="swiper-pagination latest-webinars-swiper-pagination"></div>
                </div>
            </div>
       </section>
    @endif

      </div>

    </div>
</section>
  <!-- Courses -->
  <!-- Join -->
<section class="join">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <ul class="list-unstyled">
            <li class="list-inline-item"><h2><strong>JOIN WITH US</strong>20% Offer Running - Join Today</h2></li>
            <li><a href="{{ empty($authUser) ? '/login' : (($authUser->isUser()) ? '/become_instructor' : '/panel/webinars/new') }}" class="btn btn-business">Get Started</a></li>
          </ul>
        </div>
      </div>
    </div>
</section>
  <!-- Join -->
  <!-- Category -->
  <section class="category">
    <div class="container">
      <div class="row">
        @if(!empty($trendCategories) and !$trendCategories->isEmpty())
        <section class="home-sections home-sections-swiper container">
            <h2 class="section-title">{{ trans('home.trending_categories') }}</h2>
            <p class="section-hint">{{ trans('home.trending_categories_hint') }}</p>

            <div class="row mt-40">
                @foreach($trendCategories as $trend)
                    <div class="col-6 col-md-3 col-lg-2 mt-20 mt-md-0">
                        <a href="{{ $trend->category->getUrl() }}">
                            <div class="trending-card d-flex flex-column align-items-center w-100">
                                <div class="trending-image d-flex align-items-center justify-content-center w-100" style="background-color: {{ $trend->color }}">
                                    <div class="icon mb-3">
                                        <img src="{{ $trend->getIcon() }}" width="10" class="img-cover" alt="{{ $trend->category->title }}">
                                    </div>
                                </div>

                                <div class="item-count px-10 px-lg-20 py-5 py-lg-10">{{ $trend->category->webinars_count }} {{ trans('product.course') }}</div>

                                <h3>{{ $trend->category->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
      </div>
    </div>
  </section>
  <!-- Category -->
  <!-- Instruction -->
<section class="instruction">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <div class="content">
            <h2>Become an instructor</h2>
            <p>Top instructors from around the world teach millions of students on My Mojavi. We provide the tools and skills to teach what you love</p>




            <a href="{{ empty($authUser) ? '/login' : (($authUser->isUser()) ? '/become_instructor' : '/panel/webinars/new') }}" class="btn btn-business">
                {{ (empty($authUser) or !$authUser->isUser()) ? trans('navbar.start_a_live_class') : ($authUser->isUser() ? trans('site.become_instructor') : '') }}
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- Instruction -->
  <!-- testimonials -->
<section class="client">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="sec-heading">What People Says <strong>About US</strong></h2>
          <div id="client">
            <div class="item">
              <div class="box">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <div class="media"><img src="{{ asset('frontend/assets/images/') }}a (18).png" class="img-thumbnail" alt="">
                  <div class="media-body"><h4>John Clark</h4></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="box">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <div class="media"><img src="{{ asset('frontend/assets/images/a (18).png') }}" class="img-thumbnail" alt="">
                  <div class="media-body"><h4>John Clark</h4></div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="box">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                <div class="media"><img src="{{ asset('frontend/assets/images/a (18).png') }}" class="img-thumbnail" alt="">
                  <div class="media-body"><h4>John Clark</h4></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- testimonials -->

  <!-- video-section -->
<section class="video-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <button id="playme" onclick="revealVideo('video','youtube')">
          <span class="img-box1"><img src="{{ asset('frontend/assets/images/Group566.jpg') }}" class="img-fluid" alt="">
            <img src="{{ asset('frontend/assets/images/Group 56.png') }}" class="img-fluid play-icon" alt="">
          </span>

          </button>
          <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
            <div class="lightbox-container">
              <div class="lightbox-content">
                <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                Close | ✕
                </button>
                <div class="video-container">
                  <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 dis-flex-start">
          <div class="content">
            <h2>We Have Special Programs For Challenged Students</h2>
            <p>Adam Jacob launched a new career in software development by taking courses </p>
            <a href="{{ empty($authUser) ? '/login' : (($authUser->isUser()) ? '/become_instructor' : '/panel/webinars/new') }}" class="btn btn-business">Check Now</a>
          </div>
        </div>
      </div>
</div>

</section>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>
    <script src="{{ asset('frontend/assets/slick-slider/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
@endpush
