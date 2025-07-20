@section('styles')
    <link rel="preload" href="{{ URL::to('assets/site') }}/js/agency.js" as="script">
    <link rel="preload" href="{{ URL::to('assets/site') }}/js/script.js" as="script">
    <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/main.css" />
    <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/media.css" /> 
    <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/animation.css" />
    <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/agency.css" />
@endsection
@extends('site.content.layout')
@section('content')
    <body class="">
        <div class="header-agency">
            @include('site.content.menu')
        </div>
        <!-- header agency page -->
        <div class="topAgencyHeader relative">
        <div class="agency-section">
            <div class="agency-section2">
                <div class="agency-section-image zoom_effect">
                    <img src="{{ URL::to($page13->image) }}" alt="" class="agency-bg" />
                </div>
                <div class="flex-style">
                    <span class="agency-c-title"
                    >Company<i class="fa-regular fa-face-smile"></i>
                    </span>
                    <div class="scroll-animate">
                    <span class="agency-sm-title"
                        >Company<i class="fa-regular fa-face-smile"></i>
                    </span>
                    <h2 class="agency-header-title scroll-animate">
                        {{ $page13->name }}
                        <span class="myfont-kattan">
                            {{ $page13->sub_title }}
                        </span>
                    </h2>
                    <p class="scroll-animate agency-p-title">
                        {{  $page13->text }}
                    </p>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        </div>
        <!-- header agency page -->
        <main class="mainWrapper relative">
        <!-- <div class="wrapperVfullscreen"> -->
        <video
            id="v0"
            class="video_effect fixed z-0 min-h-screen w-screen object-cover transition-all duration-700"
            muted=""
            playsinline=""
            >
            <source
                src="https://x5ausmalr0axbi2v.public.blob.vercel-storage.com/enc-company-video-25-uy0jISGvabRJtSD3EgBX0gpmP49Hza.mp4"
                />
        </video>
        <!-- </div> -->
         <section class="partners-agency">
            <div class="textLine1">
                <p
                    class="scroll-animate"
                    style="
                    translate: none;
                    rotate: none;
                    scale: none;
                    opacity: 1;
                    transform: translate(0px, 0px);
                    "
                    >
                    Nice work.
                    <span
                    class="myfont-kattan scroll-animate"
                    style="
                    translate: none;
                    rotate: none;
                    scale: none;
                    opacity: 1;
                    transform: translate(0px, 0px);
                    "
                    >
                    You found us.</span
                    >
                </p>
            </div>
            <!--  -->
            <div class="partnerContant tt-c">
                <div class="row">
                    <!-- <div class="container"> -->
                    <div class="col-lg-4">
                    <div class="">
                        <!-- <div class="white-cursor"><i class="fas fa-arrow-right"></i></div> -->
                        <div class="_bigtext scroll-animate">
                            <p class="tt-c">
                                 {{ $page14->name }}<span class="myfont-kattan">Digital</span>
                                <span class="myfont-kattan" style="display: block"
                                >{{ $page14->sub_title }}</span
                                >
                            </p>
                        </div>
                        <ul class="hoverList tt-c scroll-animate" style="margin-bottom: 20px;">
                            <li class="t1">
                                <!-- <span> -->
                                <a href="#" class="t2">{{ $page14->sub_title2 }}</a>
                                <a href="#" class="t3">{{ $page14->sub_title2 }}</a>
                                <!-- </span> -->
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-8">
                    <div class="agency-video">
                        <div
                            class="scroll-animate text-bold-1"
                            style="
                            translate: none;
                            rotate: none;
                            scale: none;
                            opacity: 1;
                            transform: translate(0px, 0px);
                            "
                            >
                            <p
                                class="scroll-animate"
                                style="
                                translate: none;
                                rotate: none;
                                scale: none;
                                opacity: 1;
                                transform: translate(0px, 0px);
                                "
                                >
                                {{ $page14->text }}
                            </p>
                        </div>
                        <div class="video-box scroll-animate">
                            <div class="">
                                <video
                                autoplay=""
                                loop=""
                                muted=""
                                plays-inline=""
                                class="object-cover"
                                src="{{ URL::to($page14->video) }}"
                                ></video>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- </div> -->
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ partners-agency -->
        <!-- big_wrapper_section -->
        <section class="big_wrapper_section padding-section relative">
            <!-- <div class="digital_section"> -->
            <!-- animateScroll20  -->
            <div class="animateScroll20">
                <div class="scroller20" data-speed="fast">
                    <ul class="tag-listScroull scroller__inner">
                        <?php $cats = explode(',',$page5->sub_title); ?>
                        @foreach ($cats as $cat)
                            <li>
                                {!! $cat !!}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="scroller20" data-direction="right" data-speed="slow">
                    <ul class="tag-listScroull scroller__inner">
                        <?php $cats = explode(',',$page5->sub_title); ?>
                        @foreach ($cats as $cat)
                            <li>
                                {!! $cat !!}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ./animateScroll20 -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="colBoxLeft margin-top-section scroll-animate">
                    <div class="bg_box scroll-animate">
                        <h2
                            class="title_head"
                            style="
                            translate: none;
                            rotate: none;
                            scale: none;
                            opacity: 1;
                            transform: translate(0px, 0px);
                            "
                            >
                            {{ $page15->name }}<span class="myfont-kattan"
                                >{{ $page15->sub_title }} </span
                                >
                        </h2>
                        <p
                            class="pr-11em pr-2em"
                            style="
                            translate: none;
                            rotate: none;
                            scale: none;
                            opacity: 1;
                            transform: translate(0px, 0px);
                            "
                            >
                            {{ $page15->text }}
                        </p>
                    </div>
                    <!-- /digital_box -->
                    @isset($page15->items[0])
                       <?php $item = $page15->items[0] ?>
                        <div class="blueBoxAg bg-White scroll-animate">
                            <div class="contentBox colorBlack">
                                <h2 class="title4">{{ $item->name }}</h2>
                                <div>
                                    <h3 class="title3 pb-10px">{{ $item->sub_title}}</h3>
                                    <p class="p-description1">
                                      {{ $item->text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endisset
                    
                    <!-- /digital_box -->
                    </div>
                </div>
                <!-- /col -->
                <div class="col-lg-6 col-md-12">
                    <div class="scroll-animate">
                    <!-- /digital_box -->
                    @isset($page15->items[1])
                        <?php $item = $page15->items[1] ?>
                        <div class="blueBoxAg backgroundBlue scroll-animate">
                            <div class="contentBox">
                                <h2 class="title4">{{ $item->name }}</h2>
                                <div>
                                    <h3 class="title3 pb-10px">{{ $item->sub_title }}</h3>
                                    <p class="p-description1">
                                    {{ $item->text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="divImg scroll-animate">
                            <img
                                src="{{ URL::to($item->image) }}" class="img-responsive"
                                alt=""
                                />
                        </div>
                    @endisset
                    
                    <!-- /webBox -->
                    </div>
                </div>
                <!-- ./row -->
            </div>
            <!-- </div> -->
        </section>
        <!--./big_wrapper_section  -->
        <div class="big-text-wrapper bg-White relative scroll-animate">
            <div class="">
                <h1>
                    {{ $page16->name }}<span class="spanLINEcenter">{{ $page16->sub_title }}</span>
                    <span class="myfont-kattan" style="font-weight: 400"
                    >{{ $page16->sub_title2 }}</span
                    >
                </h1>
                <p class="p-description1 colorBlack">
                    {{ $page16->text }}
                </p>
            </div>
        </div>
        <!-- precision_section -->
        <section class="precision_section bgBlueLite min-h-screen relative">
            <div class="section">
                 @include('site.parts.pricing')
                <!--  -->
            </div>
        </section>
        <!-- --------------------------------- -->
        <!-- slideshowagencylogo -->
        <!-- big_wrapper_section -->
        <section class="_animateWrapper w-100 over-h relative" id="gSectionColar">
            <div>
                <h3
                    class="Ttext_Globale title4 tsome"
                    style="text-align: right; padding-right: 20px"
                    >
                    {{ $page17->name }}<span class="myfont-kattan"> </span>
                </h3>
                <div class="text-egy relative" style="padding-top: 3em">
                    <div class="">
                    <p class="p-description1 cWhite">
                        {{ $page17->sub_title }}<br />
                       {{ $page17->sub_title2 }}
                    </p>
                    </div>
                    <div class="slideshowagencylogo">
                    <div class="container-slideshow _grid _grid-cols-5 gap-1">
                        @foreach ($page17->items as $item)
                            <div class="grid-item-logo relative">
                                <img class="logo-img animated-logo active" src="{{ URL::to($item->image) }}" alt="Logo 1" />
                                <img class="logo-img animated-logo" src="{{ URL::to($item->image2) }}" alt="Logo 2" />
                            </div>
                        @endforeach
                        
                    </div>
                    <!--  -->
                    <style>
                        .grid-item-logo {
                        position: relative;
                        width: 100%;
                        height: 80px;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        }
                        .logo-img.animated-logo {
                        position: absolute;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        object-fit: contain;
                        opacity: 0;
                        pointer-events: none;
                        transform: translateY(100%);
                        transition: opacity 0.2s, transform 0.2s;
                        z-index: 1;
                        }
                        .logo-img.animated-logo.active {
                        opacity: 1;
                        pointer-events: auto;
                        transform: translateY(0);
                        z-index: 2;
                        }
                    </style>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            document.querySelectorAll('.grid-item-logo').forEach(function(gridItem) {
                            const imgs = gridItem.querySelectorAll('.logo-img.animated-logo');
                            let idx = 0;
                            setInterval(function() {
                                imgs[idx].classList.remove('active');
                                idx = (idx + 1) % imgs.length;
                                imgs[idx].classList.add('active');
                            }, 5000);
                            });
                        });
                    </script>
                    </div>
                </div>
            </div>
            <div class="relative animate-black">
                <!-- animateScroll20  -->
                <div class="animateScroll20 ">
                    @include('site.parts.merquree')
                </div>
                <!-- ./animateScroll20 -->
                <div class="min-hScreen1 relative padding-section hiddenLGScrean ">
                    <div class="m1 relative justify-between items-start flex">
                    
                    <div class="relative dt-basis-352px scroll-animate">
                        <div class="b2 relative">
                            @isset($page18->items[0])
                                <?php $item = $page18->items[0]; ?>
                                @include('site.parts.member')

                            @endisset
                            
                        </div>
                    </div>
                    <!--  -->
                    <div class="relative dt-basis-352px mt-150px scroll-animate">
                        <div class="b2 relative">
                           @isset($page18->items[1])
                                <?php $item = $page18->items[1]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    </div>
                    <!--  -->
                    <div class="m1 relative justify-between items-start flex">
                    <div class="relative dt-basis-352px mt-200px scroll-animate">
                        <div class="b2 relative">
                            @isset($page18->items[2])
                                <?php $item = $page18->items[2]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    <div class="relative dt-basis-352px mt-200-px scroll-animate">
                        <div class="b2 relative">
                            @isset($page18->items[3])
                                <?php $item = $page18->items[3]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    <div class="relative dt-basis-352px mt-200px scroll-animate">
                        <div class="b2 relative">
                           @isset($page18->items[4])
                                <?php $item = $page18->items[4]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    </div>
                    <!--  -->
                    <div class="m1 relative justify-between items-start flex">
                    <div
                        class="relative dt-basis-352px m1-34 ml-45px scroll-animate"
                        >
                        <div class="b2 relative">
                            @isset($page18->items[5])
                                <?php $item = $page18->items[5]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    </div>
                    <!--  -->
                    <div class="m1 relative justify-between items-start flex">
                    <div class="relative dt-basis-352px scroll-animate">
                        <div class="b2 relative">
                           @isset($page18->items[6])
                                <?php $item = $page18->items[6]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    <div class="relative dt-basis-352px mt-150px scroll-animate">
                        <div class="b2 relative">
                            @isset($page18->items[7])
                                <?php $item = $page18->items[7]; ?>
                                @include('site.parts.member')

                            @endisset
                        </div>
                    </div>
                    <!--  -->
                    </div>
                    <!--  -->
                </div>
                <!-- Swiper Mobile Section -->
                <div class="swiper-mobile-section ">
                    <!-- Swiper -->
                    <div class="swiper-container">
                    <!-- <div class="row"> -->
                    <div class="swiper-wrapper">
                        @foreach ($page18->items as $item)
                        <div class="swiper-slide">
                            <div
                                class="relative scroll-animate w-100"
                                style="
                                translate: none;
                                rotate: none;
                                scale: none;
                                opacity: 1;
                                transform: translate(0px, 0px);
                                "
                                >
                                <div class="b2 relative w-100">
                                <div class="relative hei1-402px w-100">
                                    <video
                                        autoplay=""
                                        muted=""
                                        playsinline=""
                                        loop=""
                                        class="fit object-cover"
                                        src="{{ URL::to($item->video) }}"
                                        ></video>
                                </div>
                                <div class="bg-white p-15px text-left">
                                    <h3 class="title4">{{ $item->name }}</h3>
                                    <h4 class="title4Decorated">{{ $item->sub_title }}</h4>
                                </div>
                                </div>
                            </div>
                            <!--  /swiper-slide -->
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Scrollbar -->
                    <div class="swiper-scrollbar"></div>
                    <!-- </div> -->
                    </div>
                </div>
                <!-- ./swiper-mobile-section -->
            </div>
            <!-- agencyportoliovideo -->
        </section>
        <!-- big_wrapper_section -->
        <!--./big_wrapper_section  -->
        <!-- -------------------------------------------------- -->
        <!-- ✅ عنصر الصورة المتحركة (خارج العناصر - يظهر مرة واحدة بس) -->
        <div class="precision-section-image-hover" style="display: none"></div>
        </div>
        <!-- عنصر الصورة المتحركة (خارج كل العناصر) -->
        <div class="precision-section-image-hover" style="display: none"></div>
        <!--  -->
        <!-- </div> -->
        </main>
        <!--  /heroWrapper_section -->
        @include('site.parts.hero')
     
@endsection

@section('scripts')
    <script src="{{ URL::to('assets/site') }}/js/agency.js" ></script>
    <script src="{{ URL::to('assets/site') }}/js/script.js" ></script>
    <script src="{{ URL::to('assets/site') }}/js/footerAnimation.js" ></script>
    <script src="{{ URL::to('assets/site') }}/js/jquery-3-7-1.js" ></script>

  <!-- Fluid Splash Effect for Footer Only -->
  <script>
       
    (function () {
      const canvas = document.getElementById("footer-fluid-canvas");
      const container = document.getElementById(
        "footer-fluid-canvas-container"
      );
      if (!canvas || !container) return;

      // Resize canvas to fit container
      function resizeCanvas() {
        canvas.width = container.offsetWidth;
        canvas.height = container.offsetHeight;
      }
      resizeCanvas();
      window.addEventListener("resize", resizeCanvas);

      // Simple splash effect (for demo, not full fluid sim)
      let ctx = canvas.getContext("2d");
      let splashes = [];

      function addSplash(x, y) {
        splashes.push({ x, y, r: 0, alpha: 1 });
      }

      // Listen only on footer
      container.parentElement.addEventListener("mousemove", function (e) {
        const rect = container.getBoundingClientRect();
        if (e.clientY >= rect.top && e.clientY <= rect.bottom) {
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          addSplash(x, y);
        }
      });

      function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        splashes.forEach((splash) => {
          ctx.beginPath();
          ctx.arc(splash.x, splash.y, splash.r, 0, 2 * Math.PI);
          ctx.strokeStyle = `rgba(100,200,255,${splash.alpha})`;
          ctx.lineWidth = 2 + 6 * splash.alpha;
          ctx.stroke();
          splash.r += 2;
          splash.alpha *= 0.94;
        });
        // Remove faded splashes
        splashes = splashes.filter((s) => s.alpha > 0.05);
        requestAnimationFrame(animate);
      }
      animate();
    })();
  </script>
@endsection