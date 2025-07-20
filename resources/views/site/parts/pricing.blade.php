
          @foreach ($page8->items as $item)
          <div class="item" data-image="{{ URL::to($item->image) }}">
            <div class="_itemOur scroll-animate">
            <div class="item2">
              <h2 class="">{{ $item->name }}</h2>
              <span class="title1D ">{{ $item->sub_title }}</span>
            </div>
            <div class="_paragraph">
              <p>
               {{  $item->text }}
              </p>
            </div>
            </div>
          </div>
          <!--  -->
          @endforeach
        