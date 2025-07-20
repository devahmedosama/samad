<div class="relative hei1-402px">
    <video
    autoplay
    muted
    playsinline=""
    loop=""
    class="fit absolute object-cover"
    src="{{ URL::to($item->video) }}"
    ></video>
</div>
<div class="bg-white p-10px">
    <h3 class="title4">{{ $item->name }}</h3>
    <h4 class="title4Decorated">{{ $item->sub_title }}</h4>
</div>