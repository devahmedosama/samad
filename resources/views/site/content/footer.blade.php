<!-- ./big_wrapper_section -->
<footer class="footer" id="footer">
  <div class="footerBg"></div>

  <div class="footerItemTop">
    <span>{{ $page10->name }}</span>
    <div class="footerAnimitionText">
      <ul class="footerAnimitionTextlist">
        <?php $cats = explode(',',$page10->sub_title); ?>
        @foreach ($cats as $cat)
            <li>
                <span class="footerAnimitionHover1 dis-block">
                    {{ $cat }}
                </span>
                <span class="footerAnimitionHidd dis-block">
                    {{ $cat }}
                </span>
            </li>
        @endforeach.  
      </ul>
    </div>
  </div>
  <!-- ./footerItemTop -->

  <div class="">
    <div class="footerItemCenter">
      <ul class="footerItemMenu">
        <li><a >
            {{  $page10->sub_title  }}
            </a></li>
        <li><a href="#"></a></li>
      </ul>

      <div class="footerTimer">
        <div class="timer">
          <span id="dateTime"></span>
          <p id="greeting"></p>
        </div>
      </div>

      <div class="demo-container">
        <div class="progress-bar">
          <div class="progress-bar-value"></div>
        </div>
      </div>
    </div>
    <!-- ./footerItemCenter -->

    <div class="footerItemBottom">
      <ul class="footerMenuBottom">
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms</a></li>
        <li>BYTE® © 2025</li>
      </ul>

      <div class="dropdownfooterToggel">
        <div id="toggleGBT">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>

        <div id="menuGBT">
          <div class="dropdownF" id="fatherItim">
            <div class="ppf">
              <ul class="fourBtn">
                <li class="_fli">
                  <a href="{{ URL::to('work') }}" class="fhow">Our work</a>
                  <a href="{{ URL::to('work') }}" class="fhidd">Our work</a>
                </li>
                <li class="_fli">
                  <a href="{{ URL::to('our-agency') }}" class="fhow">Our agency</a>
                  <a href="{{ URL::to('our-agency') }}" class="fhidd">Our agency</a>
                </li>
              </ul>

              <ul class="fItemBtn">
                <li class="_fli">
                  <a href="#" class="fhow">Digital marketing</a>
                  <a href="#" class="fhidd">Digital marketing</a>
                </li>
                <li class="_fli">
                  <a href="#" class="fhow">Brand Identity</a>
                  <a href="#" class="fhidd">Brand Identity</a>
                </li>
                <li class="_fli">
                  <a href="#" class="fhow">Digital Strategy</a>
                  <a href="#" class="fhidd">Digital Strategy</a>
                </li>
               
              </ul>
            </div>
          </div>
        </div>
        <!-- ./menuGBT -->
      </div>
      <!-- ./dropdownfooterToggel -->
    </div>
    <!-- ./footerItemBottom -->
  </div>

  <!-- Footer canvas animation container -->
  <div id="footer-fluid-canvas-container" style="position: absolute; left:0; top:0; width:100%; height:100%; pointer-events:none; z-index:1;">
    <canvas id="animationCanvas" style="width:100%;height:100%;display:block;"></canvas>
  </div>
</footer>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
@yield('scripts')

</script>
