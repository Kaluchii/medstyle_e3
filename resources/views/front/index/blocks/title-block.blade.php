<h1 class="title-block__main-title">Клиника косметологии MEDSTYLE</h1>
<section class="title-block" {{--style="background-image:url('{{$title_block->img->link}}?{{$title_block->img->cache_index}}');"--}}>
    <div class="title-block__bg"></div>
    @if($title_block->title)
    <h2 class="title-block__title">{!! $title_block->title !!}</h2>
    @endif
    <video class="title-block__video js_title_video" data-src="/files/title_block_video.mp4" src="" poster="" loop muted playsinline autoplay></video>
    <script>
        var video = document.querySelector('.js_title_video');
        if (window.innerWidth > 620) {
            video.setAttribute('src', video.getAttribute('data-src'));
        }
    </script>
</section>
<section class="title-block title-block--mob">
    <div class="title-block__bg"></div>
    @if($title_block->title)
    <p class="title-block__title">{!! $title_block->title !!}</p>
    @endif
    <img src="{{$title_block->mobile_img->link}}?{{$title_block->mobile_img->cache_index}}" alt="MedStyle">
{{--    <video class="title-block__video" src="{{$title_block->video->link}}" poster="" loop muted playsinline autoplay></video>--}}
</section>