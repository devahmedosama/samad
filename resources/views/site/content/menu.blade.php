<nav class="navbar">
  <div class="row">
      <!-- logo -->
      <div class="col">
        <div class="nav_item logoLg">
            <a href="{{ URL::to('/') }}" class="logo" id="navLogo">
              @if (Request::is('/'))
                  <img src="{{ URL::to('assets/site') }}/images/Logo Byte.svg" alt="logo" id="logoimg">
              @else
                 <img src="{{ URL::to('assets/site') }}/images/Logo Byte - Black.svg" alt="logo"> 
              @endif
              
              <!-- <img src="{{ URL::to('assets/site') }}/images/Logo Byte - Black.svg" alt="logo"> -->
            </a>
        </div>
      </div>
      <!-- ./logo lg screen -->
      <!-- dropdown -->
      <div class="col col_expertise">
        <div class="nav_item {{ isset($black)?'balck':'' }}">
            <div class="_tab">
              <a  class="link_show" 
                  >Expertise
              <i
                  class="fa-regular fa-hand-peace"
                  style="font-size: 20px; color: white"
                  ></i>
              </a>
              <a  class="link_hidd"
                  >
                  Expertise 
                  <!-- <i class="fa-regular fa-hand-peace" style="color: red;"></i> -->
                  <i
                    class="fa-regular fa-hand-peace"
                    style="font-size: 20px; color: white"
                    ></i>
              </a>
            </div>
            <div class="dropdown-content">
              <!-- <hr class="menuHR"> -->
              <!-- <span class="dataTabNav"></span> -->
              <div class="dropdown_tab">
                  <div class="tabs">
                    @foreach ($page12->items as $key=>$item)
                      <div class="tabEffect">
                          <div class="tab _tabShow" data-content="content{{ $key+1 }}">
                            {{ $item->name }}
                          </div>
                          <div class="tab _tabHidd" data-content="content{{ $key+1 }}">
                            {{ $item->name }}
                          </div>
                      </div>
                    @endforeach
                  </div>
                  <!-- -->
                  <div class="tab-content">
                    @foreach ($page12->items as $key=>$item)
                    <div id="content{{ $key+1 }}" class="content {{ $key==0?'active':'' }}">
                        <img
                          src="{{ URL::to($item->image) }}"
                          alt="img"
                          />
                    </div>
                    @endforeach
                    
                  </div>
              </div>
              <!-- </div> -->
              <!--  -->
            </div>
        </div>
      </div>
      <!-- /col -->
      <div class="col">
        <div class="nav_item navz-i">
            <ul class="nav-links">
              <li class="nav_list">
                  <a href="{{ URL::to('/') }}" class="link_show">Home</a>
                  <a href="{{ URL::to('/') }}" class="link_hidd">Home</a>
              </li>
              <li class="nav_list">
                  <a href="{{ URL::to('our-agency') }}" class="link_show">Agency</a>
                  <a href="{{ URL::to('our-agency') }}" class="link_hidd">Agency</a>
              </li>
              <li class="nav_list">
                  <a href="{{ URL::to('approach') }}" class="link_show">Approach</a>
                  <a href="{{ URL::to('approach') }}" class="link_hidd">Approach</a>
              </li>
              <li class="nav_list">
                  <a href="{{ URL::to('work') }}" class="link_show">Work</a>
                  <a href="{{ URL::to('work') }}" class="link_hidd">Work</a>
              </li>
              
              <!-- Mobile close button -->
              <li class="mobile-close-btn" >
                  <i class="fas fa-times"></i>
              </li>
            </ul>
            <button
              class="nav_btn" onclick="toggleSidebar()">
              <a href="#">let's talk</a>
              <a href="#" class="_btn">
                  <i class="fa-solid fa-arrow-right link_show"></i>
                  <!-- <i class="fa-solid fa-arrow-right link_hidd"></i> -->
                  <i class="fa-regular fa-face-smile link_hidd"></i>
              </a>
            </button>
            <div class="menu-button" >
              <span class="menu-text menu_show">menu</span>
              <span class="menu-text menu_hidd">menu</span>
            </div>
        </div>
      </div>
      <!-- /row -->
  </div>
</nav>
<!-- </div> -->
<!-- Mobile Menu Overlay -->
<div id="mobileMenuOverlay" class="mobile-menu-overlay">
  <div class="mobile-menu-header">
      <div class="mobile-menu-logo">
        <a href="bowenmedia.html">
        <img src="{{ URL::to('assets/site') }}/images/Logo Byte - White.svg" alt="logo">
        </a>
      </div>
      <div class="mobile-menu-actions">
        <button class="mobile-menu-talk">Let's Talk <span class="arrow">→</span></button>
        <button class="mobile-menu-close">Close</button>
      </div>
  </div>
  <ul class="mobile-menu-list">
      <li><span class="menu-num">01</span> <span class="menu-title"><a href="{{ URL::to('/') }}">Home</a></span></li>
      <li><span class="menu-num">02</span> <span class="menu-title"><a href="{{ URL::to('our-agency') }}">Agency</a></span></li>
      <li><span class="menu-num">03</span> <span class="menu-title"><a href="{{ URL::to('work') }}">Work</a></span></li>
      <li><span class="menu-num">01</span> <span class="menu-title"><a href="{{ URL::to('approach') }}">Approach</a></span></li>
     
      <!-- <li><span class="menu-num">01</span> <span class="menu-title">Agency</span></li>
        <li><span class="menu-num">02</span> <span class="menu-title">Expertise</span></li>
        <li><span class="menu-num">03</span> <span class="menu-title">Approach</span></li>
        <li><span class="menu-num">04</span> <span class="menu-title">Work</span></li>
        <li><span class="menu-num">05</span> <span class="menu-title">Insights</span></li> -->
  </ul>
  <div class="mobile-menu-footer">
      <span class="mobile-menu-time" id="mobileMenuTime">NY 8:04:05 PM</span>
  </div>
</div>
<!-- Sidebar -->
<div id="sidebar" class="sidebar">
  <div class="sidebar-header-modern">
      <button class="sidebar-btn-main" disabled>Let's Talk <span class="sidebar-btn-icon"><i class="fa-regular fa-message"></i></span></button>
      <button class="sidebar-close-modern" onclick="toggleSidebar()">Close <span class="close-underline"></span></button>
  </div>
  <div class="sidebar-content-modern">
      <div class="sidebar-section clickable">
        <div class="section-title-row">
            <h3>Book an Intro Call</h3>
            <span class="section-arrow"><i class="fa-solid fa-arrow-right"></i></span>
        </div>
        <p>Let's talk through your needs, goals, or questions — no pressure.</p>
      </div>
      <div class="sidebar-section clickable">
        <div class="section-title-row">
            <h3>Start a Project</h3>
            <span class="section-arrow"><i class="fa-solid fa-arrow-right"></i></span>
        </div>
        <p>Ready to move forward? Share a few quick details and we'll take it from there.</p>
      </div>
      <div class="sidebar-section info">
        <div class="info-label">Phone Support</div>
        <div class="info-value">Call us <a href="tel:+15163083539">+1.516.308.3539</a></div>
      </div>
      <div class="sidebar-section info">
        <div class="info-label">General Support</div>
        <div class="info-value"><a href="mailto:hello@bowenmedia.com">hello@bowenmedia.com</a></div>
      </div>
      <div class="sidebar-section info">
        <div class="info-label">Location</div>
        <div class="info-value">
            <strong>Long Island, New York</strong><br>
            183 Mineola Blvd, Mineola, NY 11501<br>
            Mon-Fri from 9am to 6pm EST
        </div>
      </div>
  </div>
</div>