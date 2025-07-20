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