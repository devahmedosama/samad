@extends('site.content.layout')
@section('content')
   <body>
    <header>
      <div class="back_video">
        <div class="headergradientBg"></div>
        <video
          autoplay
          loop
          muted
          plays-inline
          class="object-cover main-bg-video"
          src="{{ URL::to($page1->video) }}"
        ></video>
      </div>
      <!-- Overlay Video Modal -->
      <div id="videoOverlay" class="video-overlay">
        <span class="close-btn" id="closeOverlay">&times;</span>
        <video id="fullscreenVideo" controls autoplay></video>
      </div>
      <!-- scroll bar -->
      <div class="scroller"></div>
      @include('site.content.menu')
      
     
      <div id="sidebar-overlay" class="sidebar-overlay" onclick="toggleSidebar()"></div>
      
      <div class="_header">
        <div class="header_section">
          <!-- Custom Cursor Button -->
          <div class="custom-cursor">
            <button class="showreel-btn">
              <span class="watch-text">Watch</span>
              <span class="showreel-text">Show Reel</span>
            </button>
          </div>

          <div class="hero-top-bar">
            <hr class="hero-hr" />
            <span class="hero-mini-title">{{ $page1->name }}</span>
          </div>
          <div class="textHeader">
            
            <h1 class="hero-main-title">{{ $page1->sub_title }}</h1>
             <h2 class="hero-sub-title">
              <p class="hero-ny ">
                <span class="hero-style"> From</span> 
                <span class="hero-style">Atlanta</span> 
              </p>
            </h2>
            <!-- <div class="hero_lineHeader"> -->
              
            <p class="hero-desc">
              <span class="hero_lineHeader">
              <i class="fa-regular fa-face-smile link_hidd"></i>
            </span>
             {{ $page1->text }}
            </p>
          </div>
          <div class="hero-actions-bar">
            <a href="#" class="hero-action discover-action"
              >Discover Our Work</a
            >
            <a href="#" class="hero-action">Meet the Agency</a>
            <a href="#" class="hero-action">Start a Project</a>
          </div>
        </div>
      </div>
    </header>
    <!--  -->
    <!-- end nav -->
    <!-- section -->

    <section class="wrapper-section text-center py-5">
      <div class="container">
        <h1 class="main-title scroll-animate">{{ $page2->name }}</h1>
        <h2 class="sub-title scroll-animate">{{ $page2->sub_title }}</h2>
      </div>
    </section>
    <!--  /section -->

      <!-- featured-section -->
    <section class="featured-section featured-dis-none">
      <div class="row">
        <!-- <div class="container"> -->
        @if(isset($page2->items[0]))
            <?php $item = $page2->items[0]; ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="featText">
                <p class="_featText scroll-animate">Featured Projects</p>
                <a href="{{ URL::to('work') }}" class="featShow scroll-animate">
                <span class="featanimit1">Show me more</span>
                <span class="featanimit2">Show me more</span>
                
                </a>
            </div>

            <div class="faet_body">
                <div class="white-cursor"><i class="fas fa-arrow-right"></i></div>
                <div class="_feat featTop1" style="position: relative">
                <div class="color-overlay" data-color="red"></div>
                <div class="featImg">
                    <img
                    src="{{ URL::to($item->image) }}"
                    alt="#"
                    class=""
                    />
                </div>
                <div class="faet_box">
                    <div class="">
                        <?php $cats  = explode(',',$item->sub_title); ?>
                        <ul class="faet_content_top">
                            @foreach ($cats as $cat)
                                <li>
                                    <a > {{ $cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  -->
                    <div class="faet_content_bottom">
                    <p>
                        {{  $item->text }}
                    </p>
                    <p class="_text">{{ $item->name }}</p>
                    </div>
                </div>
                <!--  -->
                </div>
            </div>
            </div>
        @endif
        <!-- / faet_body-->
        @if(isset($page2->items[1]))
            <?php $item = $page2->items[1]; ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="featText">
                <!-- <a href="#" class="featShow">Show me more</a> -->
            </div>
            <div class="faet_body">
                <div class="_feat featTop2" style="position: relative">
                <div class="color-overlay" data-color="yellow"></div>
                <div class="featImg">
                    <img src="{{ URL::to($item->image) }}"  class="" />
                </div>
                <div class="faet_box">
                    <div class="">
                        <?php $cats  = explode(',',$item->sub_title); ?>
                        <ul class="faet_content_top">
                            @foreach ($cats as $cat)
                                <li>
                                    <a > {{ $cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  -->
                    <div class="faet_content_bottom">
                    <p>
                       {{  $item->text }}
                    </p>
                    <p class="_text">{{ $item->name }}</p>
                    </div>
                </div>
                <!--  -->
                </div>
            </div>
            <!-- /col -->
            </div>
        @endif
        <!-- / faet_body-->
        @if(isset($page2->items[2]))
            <?php $item = $page2->items[2]; ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="featText HiddMdScrean">
                    <p class="divText scroll-animate ">
                      {{ $page2->text }}
                    </p>
                </div>
                <div class="faet_body">
                    <div class="_feat featTop3" style="position: relative">
                    <div class="color-overlay" data-color="blue"></div>
                    <div class="featImg">
                        <img src="{{ URL::to($item->image) }}" alt="#" class="" />
                    </div>
                    <div class="faet_box">
                        <div class="">
                        <?php $cats  = explode(',',$item->sub_title); ?>
                        <ul class="faet_content_top">
                            @foreach ($cats as $cat)
                                <li>
                                    <a > {{ $cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                        </div>
                        <!--  -->
                        <div class="faet_content_bottom">
                        <p>
                            {{ $item->sub_title2 }}
                        </p>
                        <p class="_text">{{ $item->name }}</p>
                        </div>
                    </div>
                    <!--  -->
                    </div>
                </div>
            </div>
        @endif
        
        <!-- / faet_body-->
      </div>
      <!-- </div> -->
    </section>
    <!--  /featured-section -->

    
    <!-- <section class="slider_progress_mobileScrean"> -->

    <!-- </section>  -->

    <section class="swiper-mobile-section">
            <div class="featTextMobile">
                <p class="text-center scroll-animate ">
                {{ $page2->text }}
                </p>
            </div>
            <!-- Swiper -->
            <div class="featTextMobile">
                <p class="textMoble scroll-animate">Featured Projects</p>
                <a href="{{ URL::to('work') }}" class="featShowMobile scroll-animate">Show me more</a>
            </div>
                <div class="swiper-container">
                <!-- <div class="row"> -->
                <div class="swiper-wrapper">
                @foreach ($page2->items as $item)
                        <div class="swiper-slide ">
                            <div class="featText">
                                <!-- <a href="#" class="featShow">Show me more</a> -->
                            </div>
                            <div class="faet_body">
                                <div class="_feat" style="position: relative">
                                <div class="color-overlay" data-color="yellow"></div>
                                <div class="featImg">
                                    <img src="{{ URL::to($item->image) }}" alt="#" class="" />
                                </div>
                                <div class="faet_box">
                                    <div class="">
                                        <?php $cats = explode(',',$item->sub_title) ?>
                                    <ul class="faet_content_top">
                                        @foreach($cats as $cat)
                                        <li>
                                        <a > {{ $cat }} </a>
                                        </li>
                                        @endforeach
                                    
                                    </ul>
                                    </div>
                                    <!--  -->
                                    <div class="faet_content_bottom scroll-animate">
                                    <p>
                                    {{ $item->text }}
                                    </p>
                                    <p class="_text">{{ $item->name }}</p>
                                    </div>
                                </div>
                                <!--  -->
                                </div>
                            </div>
                        </div>
                @endforeach
                
                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>
                <!-- </div> -->
                </div>


    </section>

    <!-- big_wrapper_section -->
    <section class="big_wrapper_section">
      <div class="bacaground_dark"></div>
      <div class="digital_section">
        <div class="back_video">
       <video autoplay="" loop="" muted="" plays-inline="" class="object-cover" src="{{ URL::to($page3->video) }}">
                  <!-- <source src="{{ URL::to('assets/site') }}/images/video-bg2.mp4" type="video/mp4"> -->
                </video>
      </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 ">
            <div class="digital_box_left card-animate ">
              <div class="bg_box ">
                <h2 class="title_head">
                  {{ $page3->name }}<span>  {{ $page3->sub_title }}</span>
                </h2>
                <p class="">
                  {{  $page3->text  }}
                </p>
              </div>
              <!-- /digital_box -->
               <!-- <div class="_box-animit-top-scroll"> -->
           <div class="digital_box_left_content card-animate">
                @foreach ($page3->items->take(2) as $item )
                    <div class="box_left">
                        <div class="dgBox" data-image="{{ URL::to($item->image) }}">
                            <h2 class="">{{ $item->name }}</h2>
                            <p class="">
                                {{  $item->text }}
                            </p>
                        </div>
                    </div>
                @endforeach
           </div>
              <!-- </div> -->
              <!-- /digital_box -->

            </div>
          </div>
          <!-- /col -->
          <div class="col-lg-6 col-md-12">
            <div class="digital_box_right  card-animate">
              <!-- <div class="_box-animit-top-scroll"> -->
              @foreach ($page3->items as $key=>$item)
                  @if ($key > 1)
                    <div class="box_right">
                        <div class="dgBox" data-image="{{ URL::to($item->image) }}">
                        <h2 class="">{{ $item->name }}</h2>
                        <p class="">
                            {{ $item->text }}
                        </p>
                        </div>
                    </div>
                  @endif
              @endforeach
              
             
              <!-- /digital_box -->
              <div class="dgBoxImg card-animate">
                <img
                  src="{{ URL::to($page3->image) }}"
                  alt="#"
                />
              </div>
              <!-- /dgBoxImg -->
            </div>
          </div>
          <!-- /col -->
        </div>
        <!-- </div> -->
      </div>
      <!-- /digital_section -->
      <div class="BgWrapper">
      
        <div class="bacaground_dark"></div>
        <!-- <div class="container-fluid"> -->
        <div class="back_video">
          <video
            autoplay
            loop
            muted
            plays-inline
            class="object-cover"
            src="{{ URL::to($page3->video) }}"
          >
            <!-- <source src="{{ URL::to('assets/site') }}/images/video-bg.mp4" type="video/mp4"> -->
          </video>
        </div>

        <!-- ./BgWrapper -->
        
        <section class="animateScroll20">
                @include('site.parts.merquree')
        </section>



        <div class="priceSection">
          <div class="container-fluid">
            <h2 class="scroll-float price-title">{{ $page4->name }}</h2>
            <h2 class=" scroll-float approach-title">{{ $page4->sub_title }}</h2>
          </div>
        </div>
        <!-- priceSection -->
        <!--  ./carouselBg-->
      </div>
      <!-- ./ carouselBg section -->
    </section>
    <!--./big_wrapper_section  -->

    <div class="textSection scroll-animate">
      <div class="container-fluid">
        <p class="">
         {{ $page4->text }}
        </p>
      </div>
    </div>
    <!-- textSection -->
    <section class="project_section">
      <div class="container-fluid">
        <div class="row">
          @foreach ($page4->items->take(2) as $item)
                <div class="col-lg-6 col-md-12">
                    <div class="project_body faet_body">
                    <div class="white-cursor"><i class="fas fa-arrow-right"></i></div>
                    <div class="color-overlay" data-color="red"></div>
                    <div class="featImg">
                        <img
                        src="{{ URL::to($item->image) }}"
                        alt="#"
                        class=""
                        />
                    </div>
                    <div class="faet_box">
                        <div class="">
                        <ul class="faet_content_top">
                            <?php $cats = explode(',',$item->sub_title); ?>
                            @foreach ($cats as $cat)
                                <li>
                                    <a>
                                        {{ $cat }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <h2 class="ourText">{{ $item->name }}</h2>
                        </div>
                        <!--  -->
                        <div class="faet_content_bottom">
                        <p>
                            {{ $item->sub_title2 }}
                        </p>
                        </div>
                    </div>
                    <!--  -->
                    <!-- </div> -->
                    </div>
                </div>
          @endforeach
          
        </div>
        <!-- </div> -->
      </div>
    </section>
    <!--  /project_section -->







  <!--  /projectmobilesection -->

    <section class="_textLine">
      <div class="container-fluid">
        <!-- <p class=""> -->
        <ul class="textList">
          <li>{{ $page7->name }}</li>
          <li class="t1">
            <!-- <span> -->
            <a class="t2">{{ $page7->sub_title }}</a>
            <a  class="t3">{{ $page7->sub_title2 }}</a>
            <!-- </span> -->
          </li>
        </ul>

        <!-- </p> -->
      </div>
    </section>
    <!-- _textLine -->
    <section class="tenacity_section">
      <div class="container-fluid">
        <div class="back_video">
          <div class="tenBgDark"></div>
          <video autoplay loop muted plays-inline class="object-cover"
            src="{{ URL::to($page7->video) }}"
          ></video>
        </div>
        <span class="s1"
          >{{ $page7->text }} <i class="fa-regular fa-face-smile"></i>
        </span>
       @isset($page7->items[0])
           <div class="scroll-animate">
                <h2 class="scroll-animate">{{ $page7->items[0]->name }}</h2>
                <p class="scroll-animate">
                    {{ $page7->items[0]->text }}
                </p>
            </div>
       @endisset
           
        
      </div>
      <!-- </div> -->
    </section>
    <!-- ./tenacity_section -->
    <div class="textMore">
      <p class="scroll-animate">{{ $page6->name }} </p>
    </div>

    <section class="fastestsMobileSection">
        <div class="fastestMobileText">

       <h1>{{ $page6->sub_title }}</h1>
          <p>
             {{ $page6->text }}
          </p>
        </div>


<!-- Swiper -->
<div class="swiper-fastest">
         
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="image-section">
        <img
          src="{{ URL::to($page6->image) }}"
          alt="Description of image"
        />
      </div>
      <!--  -->
    </div>
    <div class="swiper-slide">
      <div class="text-section">
        
        <div class="amImg">
          <img src="{{ URL::to($page6->image2) }}" alt="" />
        </div>
      </div>
      <!--  -->
    </div>
  </div>
  <!-- Add Scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

<!-- Swiper -->

</section>

<section class="fastestLGSccrean">

    <div class="fastest">
      <!-- <div class="container"> -->
      <div class="image-section">
        <div class="white-cursor"><i class="fas fa-arrow-right"></i></div>
            <div class="image-parent" style="position: relative">
              <div class="color-overlay" data-color="red"></div>
        <img
          src="{{ URL::to($page6->image) }}"
          alt="Description of image"
        />
      </div>
      </div>
      <div class="text-section">
        <div class="scroll-animate  ">
          <h1 class="scroll-animate">{{ $page6->sub_title }}</h1>
          <p class="scroll-animate">
            {{ $page6->text }}
          </p>
        </div>
        <div class="amImg">
          <div class="white-cursor"><i class="fas fa-arrow-right"></i></div>
            <div class="image-parent" style="position: relative">
              <div class="color-overlay" data-color="yellow"></div>
              <div class="image-child">
          <img src="{{ URL::to($page6->image2) }}" alt="" />
              </div>
        </div>
      </div>
      <!-- </div> -->
    </div>


    </section>
    <!-- ./fastest -->
    <body>
    <!-- precision_section -->
    <div>
      <div class="precision_section">
        <div class="section">
           @include('site.parts.pricing')
        </div>
      </div>
      <div class="precision-section-image-hover" style="display: none;"></div>
    </div>
    <!-- ./ precision_section  -->

    
    
    </body>
    
    <!-- عنصر الصورة المتحركة (خارج كل العناصر) -->
    <div class="precision-section-image-hover" style="display: none;"></div>
    
    @include('site.parts.hero')
@endsection

@section('scripts')
<script src="{{ URL::to('assets/site') }}/js/script.js"></script>
<script src="{{ URL::to('assets/site') }}/js/footerAnimation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Fluid Splash Effect Script -->
<script>
(function() {
  const canvas = document.getElementById('footer-fluid-canvas');
  const container = document.getElementById('footer-fluid-canvas-container');
  if (!canvas || !container) return;

  function resizeCanvas() {
    canvas.width = container.offsetWidth;
    canvas.height = container.offsetHeight;
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  let ctx = canvas.getContext('2d');
  let splashes = [];

  function addSplash(x, y) {
    splashes.push({x, y, r: 0, alpha: 1});
  }

  container.parentElement.addEventListener('mousemove', function(e) {
    const rect = container.getBoundingClientRect();
    if (e.clientY >= rect.top && e.clientY <= rect.bottom) {
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      addSplash(x, y);
    }
  });

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    splashes.forEach(splash => {
      ctx.beginPath();
      ctx.arc(splash.x, splash.y, splash.r, 0, 2 * Math.PI);
      ctx.strokeStyle = `rgba(100,200,255,${splash.alpha})`;
      ctx.lineWidth = 2 + 6 * splash.alpha;
      ctx.stroke();
      splash.r += 2;
      splash.alpha *= 0.94;
    });
    splashes = splashes.filter(s => s.alpha > 0.05);
    requestAnimationFrame(animate);
  }
  animate();
})();
@endsection