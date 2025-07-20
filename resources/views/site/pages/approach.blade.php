@section('styles')
      <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/approch.css">
      <link rel="stylesheet" href="{{ URL::to('assets/site') }}/css/pagestyle.css">
      <style>
        .navbar .row ._tab a.link_show , .fa-regular, .far{
            color: #000;
        }
        .navbar .row ._tab{
            border: 1px solid black;
        }
        .mobile-close-btn{
            display: none
        }
      </style>
@endsection
@extends('site.content.layout')
@section('content')
   <body class="">
      <!-- scroll bar -->
      <div class="header-agency">
        @include('site.content.menu',['black'=>'black'])
      </div>
      <!-- end nav -->
      <!-- section header text -->
      <section class="sectionheaderAproach " style="">
         <div class="headerAproachFlex">
            <div class="scroll-animate sh-sm">Ways we work <i class="fa fa-face-smile"></i> </div>
            <div class="top-text scroll-animate">
                {{ $page19->text }}
            </div>
            <div class="_apprTyping">
               <div class="big-heading">
                  <p id="typingTop"></p>
               </div>
               <div class="big-subheading">
                  <p id="typingBottom"></p>
               </div>
            </div>
            <div class="scroll-indicator scroll-animate">Keep Scrolling</div>
            <div class="rotate-vertical-text scroll-animate h-sm">Ways we work <i class="fa fa-face-smile"></i> </div>
         </div>
      </section>
      <!-- typing text header  -->
      <script>
         function typeText(element, text, speed) {
             let index = 0;
             function type() {
                 if (index < text.length) {
                     element.textContent += text.charAt(index);
                     index++;
                     setTimeout(type, speed);
                 } else {
                     element.style.borderRight = 'none';
                 }
             }
             type();
         }
         
         const typingTop = document.getElementById('typingTop');
         const typingBottom = document.getElementById('typingBottom');
         const textTop = "{{ $page19->sub_title }}"; // النص العلوي
         const textBottom = "{{ $page19->sub_title2 }}"; // النص السفلي
         const typingSpeed = 100; // السرعة بالملي ثانية
         
         typeText(typingTop, textTop, typingSpeed);
         setTimeout(() => typeText(typingBottom, textBottom, typingSpeed), textTop.length * typingSpeed + 500);
      </script>
      <!-- typing text header ----- -->
      <div class="mainWrapperAcord animate-black relative w-100" id="agencySubcItem1" style="padding-top: 60px;">
         <div class="approach-wrapper approachWrappSticky" id="">
            <!-- <div class="agencydata1"></div> -->
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <!-- <div class="relative"> -->
                  <div class="approchStickyLeft" id="">
                     <div class="">
                        <p class="title4 scroll-animate">→ {{ $page20->name }}</p>
                        <h1 class="title3 cWhite scroll-animate">
                           {{ $page20->sub_title }}<span class="text-n myfont-kattan">
                           </span>
                        </h1>
                        <ul class="hoverList tt-c scroll-animate" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                           <li class="t1" style="border-bottom: 1px solid white;">
                              <!-- <span> -->
                              <a href="#" class="t2 cWhite">{{ $page20->sub_title2 }}</a>
                              <a href="#" class="t3 cWhite">{{ $page20->sub_title2 }}</a>
                              <!-- </span> -->
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!--  -->
                  <!-- </div> -->
               </div>
               <!-- .col -->
               <div class="col-lg-6 col-sm-12 relative">
                  <div class="approachStickyRight">
                     <div class=" over-h w-100 ">
                        <p class="text-p text-21px cWhite scroll-animate">
                            {{ $page20->text }}
                        </p>
                     </div>
                     <div class="secAcord1 approachAccordion1 relative w-100" id="stickyElement">
                        <div class="accordion" id="accordionExample">
                        @foreach ($page20->items as $key=>$item)
                            <div class="accordion-item ">
                              <h2 class="accordion-header" id="headingOne{{ $item->id }}">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne{{ $item->id }}">
                                    <ul class="hoverList w-100" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                       <li class="t1" style=" border-bottom: none;">
                                          <a href="#" class="t2">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                          <a href="#" class="t3 ">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                       </li>
                                    </ul>
                                 </button>
                              </h2>
                              <div id="collapseOne{{ $item->id }}" class="accordion-collapse collapse {{ $key==0?'show':'' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <p class="cWhite">
                                        {{ $item->text }}
                                    </p>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                           
                        </div>
                        <!--  -->
                     </div>
                  </div>
               </div>
               <!-- col -->
            </div>
         </div>
         <!-- ./ approach-wrapper -->
         <div class="approach-wrapper approachWrappSticky" style="padding: 6em 0;" id="">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <div class="approchStickyLeft">
                     <!-- <div class="relative w-100 over-h"> -->
                     <div class="">
                        <p class="title4 cWhite scroll-animate">→ {{ $page21->name }}</p>
                        <h1 class="title3 cWhite scroll-animate">The<span class="text-n myfont-kattan">{{ $page21->sub_title }}</span></h1>
                        <ul class="hoverList tt-c scroll-animate" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                           <li class="t1" style="border-bottom: 1px solid white;">
                              <a href="#" class="t2 cWhite">{{ $page21->sub_title2 }}</a>
                              <a href="#" class="t3 cWhite">{{ $page21->sub_title2 }}</a>
                              <!-- </span> -->
                           </li>
                        </ul>
                     </div>
                     <!--  -->
                     <!-- </div> -->
                  </div>
               </div>
               <!-- .col -->
               <div class="col-lg-6 col-sm-12">
                  <div class="approachStickyRight">
                     <div class="relative w-100 over-h">
                        <h1 class="_bigtext text-p cWhite scroll-animate">{{ $page21->text }}</h1>
                     </div>
                     <div class="secAcord1 relative w-100 over-h scroll-animate">
                        <div class="accordion" id="accordionExample">
                            @foreach ($page21->items as $key=>$item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne{{ $item->id }}">
                                            <ul class="hoverList w-100" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                            <li class="t1" style=" border-bottom: none;">
                                                <a href="#" class="t2">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                                <a href="#" class="t3">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                            </li>
                                            </ul>
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="cWhite">
                                                {{ $item->text }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           
                           
                        </div>
                        <!--  -->
                     </div>
                  </div>
               </div>
               <!-- col -->
            </div>
         </div>
         <!-- ./ approach-wrapper -->
      </div>
      <div class="mainWrapperAcord2 relative" id="agencySubcItem2" style="margin-bottom: 50px;">
         <div class="approach-wrapper approachWrappSticky " style="margin: 100px auto;" id="">
            <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="approchStickyLeft">
                     <div class="relative w-100 over-h ">
                        <div class="">
                           <p class="title4 scroll-animate">→ {{ $page22->name }}</p>
                           <h1 class="title3 colorBlack scroll-animate">{{ $page22->sub_title }} <span class="text-n myfont-kattan"></span></h1>
                           <ul class="hoverList tt-c scroll-animate" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                              <li class="t1 colorBlack" style="border-bottom: 1px solid black;">
                                 <!-- <span> -->
                                 <a href="#" class="t2 colorBlack">{{ $page22->sub_title2 }}</a>
                                 <a href="#" class="t3 colorBlack">{{ $page22->sub_title2 }}</a>
                                 <!-- </span> -->
                              </li>
                           </ul>
                        </div>
                        <!--  -->
                     </div>
                  </div>
               </div>
               <!-- .col -->
               <div class="col-lg-6 col-md-12">
                  <div class="approachStickyRight">
                     <div class="relative w-100 over-h">
                        <p class="text-p text-21px scroll-animate">
                            {{ $page22->text }}
                        </p>
                     </div>
                     <div class="secAcord2 secAcord1 relative w-100 over-h scroll-animate">
                        <div class="accordion" id="accordionExample">
                             @foreach ($page22->items as $key=>$item)
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne{{ $item->id }}">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne{{ $item->id }}">
                                    <ul class="hoverList w-100" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                       <li class="t1" style=" border-bottom: none;">
                                          <a href="#" class="t2 colorBlack">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                          <a href="#" class="t3 colorBlack">{{ $item->name }}<i class="fa-light fa-plus floatR"></i></a>
                                       </li>
                                    </ul>
                                 </button>
                              </h2>
                              <div id="collapseOne{{ $item->id }}" class="accordion-collapse collapse {{ $key==0?'show':'' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <p>
                                       {{ $item->text }}
                                    </p>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                           
                        </div>
                        <!--  -->
                     </div>
                  </div>
               </div>
               <!-- col -->
            </div>
         </div>
         <!-- ./ approach-wrapper -->
         <div class="approach-wrapper approachWrappSticky" id="agencySubcItem3">
            <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="approchStickyLeft">
                     <div class="relative over-h w-100 ">
                        <div class="">
                           <p class="small-title scroll-animate">→ {{ $page23->sub_title }}</p>
                           <h1 class="text-bold-1 scroll-animate">{{ $page23->sub_title }} <span class="text-n myfont-kattan"></span></h1>
                           <ul class="hoverList tt-c scroll-animate" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                              <li class="t1 colorBlack" style="">
                                 <!-- <span> -->
                                 <a href="#" class="t2 colorBlack">{{ $page23->sub_title2 }}</a>
                                 <a href="#" class="t3 colorBlack">{{ $page23->sub_title2 }}</a>
                                 <!-- </span> -->
                              </li>
                           </ul>
                           <!-- <a href="#" class="intro-call">Book an intro call</a> -->
                        </div>
                        <!--  -->
                     </div>
                  </div>
               </div>
               <!-- .col -->
               <div class="col-lg-6 col-md-12">
                  <div class="approachStickyRight">
                     <div class="relative over-h w-100">
                        <p class="text-p text-21px scroll-animate">
                            {{ $page23->text }}
                        </p>
                        
                        @foreach ($page23->items as $item)
                            <div class="art-approach relative over-h w-100">
                                <h2 class="title3 text-p scroll-animate">{{ $item->name }}</h2>
                                <article>
                                    <span class="des-b text-16px scroll-animate">
                                        {{ $item->text }}
                                    </span>
                                </article>
                                </div>
                        @endforeach
                        
                        <!-- ./art-approach -->
                     </div>
                  </div>
               </div>
               <!-- col -->
            </div>
         </div>
         <!-- ./ approach-wrapper -->
      </div>
      <!-- ---------------------------------- -->
      <!-- button fixed bar  -->
      <div class="fixed-bar over-h" id="myIdFixedBar">
         <div class="div-data1 over-h" id="">
            <button class="btnFixedBar over-h" data-target="agencySubcItem1">       
            <span class="showData">
            Agency Subscription.
            </span>
            <span class="hiddData">
            Agency Subscription.
            </span>
            </button>
            <button class="btnFixedBar over-h" data-target="agencySubcItem2">
            <span class="showData">
            Project-Based.
            </span>
            <span class="hiddData">
            Project-Based.
            </span>
            </button>
         </div>
         <div class="div-data2 over-h">
            <button class="btnFixedBar over-h" data-target="agencySubcItem3">
            <span class="showData">
            Which is the one for me?
            </span>
            <span class="hiddData">
            Which is the one for me?
            </span>
            </button>
            <div class="consult-btn over-h" onclick="document.getElementById('consult').scrollIntoView({ behavior: 'smooth' })">
               <span class="showData">
               Schedule a Consultation <i class="fa-regular fa-hand-peace"></i>
               </span>
               <span class="hiddData">
               Schedule a Consultation <i class="fa-regular fa-hand-peace"></i>
               </span>
            </div>
            <!-- Schedule a Consultation ✌️ -->
         </div>
      </div>
@endsection
@section('scripts')
      <script src="{{ URL::to('assets/site') }}/js/approach.js"></script>
      <script src="{{ URL::to('assets/site') }}/js/script.js"></script>
      <script src="{{ URL::to('assets/site') }}/js/footerAnimation.js"></script>
      <script src="{{ URL::to('assets/site') }}/js/animitionScrolling.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
@endsection