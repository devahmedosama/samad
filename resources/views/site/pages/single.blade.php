@section('styles')
    <link rel="stylesheet" href="{{ URL::to('assets') }}/site/css/pagestyle.css">
    <link rel="stylesheet" href="{{ URL::to('assets') }}/site/css/approch.css">
    <link rel="stylesheet" href="{{ URL::to('assets') }}/site/css/interaudi.css">
    <style>
        .navbar .row ._tab a.link_show , .fa-regular, .far{
            color: #000 !important;
        }
        .navbar .row ._tab{
            border: 1px solid black;
        }
        .mobile-close-btn{
            display: none
        }
        .img-responsive{
            max-width: 100%;
            
        }
        video{
            max-width: 100%;
        }
      </style>
@endsection
@extends('site.content.layout')
@section('content')
  <body class="">

    <div class="header-agency">
      @include('site.content.menu')
    </div>

     
      <!-- section header text -->
      <main class="header_all">
         <div class="_showMob2024">
            <a href="#">← All Work</a>
            <span>2025 <i class="fa-regular fa-face-smile"></i></span>
         </div>
         <div class="text_header">
             <?php $cats  = explode(',',$data->sub_title); ?>
             @foreach ($cats as $cat )
                 <span> {{ $cat }}
                 </span>
             @endforeach
         </div>
         <div class="big-inter">{{ $data->name }} </div>
         <div class="custm-subheading">{{ $data->name }} <span class="myfont-kattan">{{ $data->sub_title2 }} </span></div>
         <div class="_hiddMob2024">
            <div id="rotate-vertical-text" class="rotate-vertical-text"> 2025 <i class="fa-regular fa-face-smile"></i></div>
            <div class="linkes_header">
               <div class="linkes_lift "><a href="{{ URL::to('/') }}">Home</a> / <a href="{{ URL::to('work') }}">All Work</a>
                 / <a  class="bank">{{ $data->name  }}</a></div>
               <a href="#" class="linkBank">{{ $data->link  }}</a> 
            </div>
         </div>
         </div>
      </main>
      <hr/>
      <div class="faet_body">
         <div class="_feat featTop1" style="position: relative">
            <div class="color-overlay" data-color="red"></div>
            <div class="featImg">
               <img 
                  src="{{ URL::to($data->image2) }}"
                  alt="#"
                  class="imogggg"
                  />
            </div>
         </div>
      </div>
   
      @foreach ($data->items  as $key=>$item)
            <section class="section-fore">
                <div class="container_bank">
                        <!-- Right Sticky Section -->
                        @if ($key%2 == 0)
                                <div class="sticky-sidebar">
                                        <div class="section-number">0{{ $key+1 }}</div>
                                        <div class="section-title-bank"><span>{{ $item->sub_title }}</span> </div>
                                </div>
                                <div class="divider"></div>
                                <!-- Left Scrollable Section -->
                                <div class="scrollable-content">
                                        <div class="main-text">
                                            <strong>{{ $item->name }}</strong>
                                            <p>
                                                {{ $item->text }}
                                            </p>
                                        </div>
                                        @if ($item->video)
                                          <video autoplay muted playsinline loop class="" 
                                          src="https://x5ausmalr0axbi2v.public.blob.vercel-storage.com/Project%20Detail%20Pages/Interaudi%20Bank/S2-Interaudi%20Bank-uVmN9jbchvihaV8O2MksKRXQMn7WMr.mp4"></video>
                                        @else
                                             <img class="img-responsive" src="{{ URL::to($item->image) }}" alt=""> 
                                        @endif
                                            
                                </div>
                        @else
                                <!-- Left Scrollable Section -->
                                <div class="scrollable-content">
                                        <div class="main-text">
                                            <strong>{{ $item->name }}</strong>
                                            <p>
                                                {{ $item->text }}
                                            </p>
                                        </div>
                                        @if ($item->video)
                                             <video height="350" controls>
                                                <source src="{{ URL::to($item->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @else
                                             <img class="img-responsive" src="{{ URL::to($item->image) }}" alt=""> 
                                        @endif   
                                </div>
                                <div class="divider"></div>
                                <div class="sticky-sidebar">
                                        <div class="section-number">0{{ $key+1 }}</div>
                                        <div class="section-title-bank"><span>{{ $item->sub_title }}</span> </div>
                                </div>
                                
                        @endif
                        
                </div>
            </section>
      @endforeach
@endsection
@section('scripts')
    <script src="{{ URL::to('assets/site') }}/js/script.js"></script>
    <script src="{{ URL::to('assets/site') }}/js/footerAnimation.js"></script>
    <script src="{{ URL::to('assets/site') }}/js/animitionScrolling.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ URL::to('assets/site') }}/js/interaudi.js"></script>

    <!-- Fluid Splash Effect for Footer Only -->

    <!-- scroll navbar -->
     <script>
     window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  const windowHeight = window.innerHeight;
  const docHeight = document.documentElement.scrollHeight;

  const scrollPercent = (scrollY / (docHeight - windowHeight)) * 100;
  const arrows = document.querySelector(".arrowsBank");

  if (scrollPercent >= 1 && scrollPercent <= 95) {
    arrows.style.opacity = "1";
  } else {
    arrows.style.opacity = "0";
  }
});
</script>
    <script>
    (function() {
      const canvas = document.getElementById('footer-fluid-canvas');
      const container = document.getElementById('footer-fluid-canvas-container');
      if (!canvas || !container) return;

      // Resize canvas to fit container
      function resizeCanvas() {
        canvas.width = container.offsetWidth;
        canvas.height = container.offsetHeight;
      }
      resizeCanvas();
      window.addEventListener('resize', resizeCanvas);

      // Simple splash effect (for demo, not full fluid sim)
      let ctx = canvas.getContext('2d');
      let splashes = [];

      function addSplash(x, y) {
        splashes.push({x, y, r: 0, alpha: 1});
      }

      // Listen only on footer
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
        // Remove faded splashes
        splashes = splashes.filter(s => s.alpha > 0.05);
        requestAnimationFrame(animate);
      }
      animate();
    })();
    </script>
@endsection