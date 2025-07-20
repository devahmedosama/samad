@section('styles')
    <link rel="stylesheet" href="{{ URL::to('assets') }}/site/css/pagestyle.css">
    <link rel="stylesheet" href="{{ URL::to('assets') }}/site/css/work.css">
@endsection
@extends('site.content.layout')
@section('content')
  <body class="relative">

    <div class="header-agency">
      @include('site.content.menu')
    </div>


    <section class="mainheaderWork">
    <div class="headerWork" role="main" aria-labelledby="mainheading">
      <div class="left">
        <h1 id="mainheading">{{ $page->name }}</h1>
        <h2>
          {{  $page->sub_title  }}
        </h2>
      </div>
      <!--  -->
      <div class="right" aria-label="Description about crafting impactful experiences">
        <article class="article-text">
          <p class="">
            {{ $page->text }}   
          </p>
        </article>
        <div class="bottom-nav" aria-label="View mode selection">
          <span class="active"> &nbsp; &nbsp; &nbsp;</span><span class="inactive"> &nbsp; &nbsp; &nbsp;</span>
        </div>
      </div>
      <!--  -->
    </div>
    </section>

    <!-- <div class="agency-section-image">
              <img src="{{ URL::to('assets') }}/site/images/agency-bg.png" alt="" class="agency-bg">
          </div> -->
    <!--  -->
    <!-- end nav -->

      <!-- featured-section -->
    <section class="featured-section">
      <div class="row">
        <!-- <div class="container"> -->

          
        @foreach ($allData as $key=>$item )
          @if ($key%2==0)
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="faet_body">
                <div class="white-cursor"><i class="fas fa-arrow-right"></i></div>
                <div class="_feat featTop1" style="position: relative">
                  <div class="color-overlay" data-color="red"></div>
                  <div class="featImg">
                    <img src="{{ URL::to($item->image) }}" alt="#" class="" />
                  </div>
                  <div class="faet_box">
                    <div class="">
                      <?php $cats  = explode(',',$item->sub_title); ?>
                        <ul class="faet_content_top">
                            @foreach ($cats as $cat)
                                <li>
                                    <a href="{{ URL::to('single-project/'.$item->id) }}"> {{ $cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  -->
                    <a href="{{ URL::to('single-project/'.$item->id) }}">
                      <div class="faet_content_bottom">
                        <p>{{ $item->name }}<span> {{ $item->sub_title2 }}</span></p>
                        <p class="_text">{{ $item->text }}</p>
                      </div>
                    </a>
                    
                  </div>
                  <!--  -->
                </div>
              </div>
            </div>
          @else
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="faet_body">
                <div class="_feat" style="position: relative">
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
                                    <a href="{{ URL::to('single-project/'.$item->id) }}"> {{ $cat }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--  -->
                    <div class="faet_content_bottom">
                      <p>Branding for<span> Financial Services</span></p>
                      <p class="_text">RDP Advisory</p>
                    </div>
                  </div>
                  <!--  -->
                </div>
              </div>
            </div>
          @endif
        
        
        <!-- / faet_body-->
        @endforeach
         


  




        <!-- / faet_body-->
      </div>
      <!-- </div> -->
    </section>
    <!--  /featured-section -->

    {{ $allData->links('vendor.pagination.custom') }}
@endsection

@section('scripts')
      <script src="{{ URL::to('assets/site') }}/js/script.js"></script>
      <script src="{{ URL::to('assets/site') }}/js/footerAnimation.js"></script>
      <script src="{{ URL::to('assets/site') }}/js/animitionScrolling.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
      <!-- <script src="assets/js/jquery.nicescroll.js"></script> -->
      <!-- Fluid Splash Effect for Footer Only -->
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