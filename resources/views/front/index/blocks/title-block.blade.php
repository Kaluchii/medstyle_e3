<h1 class="title-block__main-title">Клиника косметологии MEDSTYLE</h1>
<section class="title-block" {{--style="background-image:url('{{$title_block->img->link}}?{{$title_block->img->cache_index}}');"--}}>
    <div class="title-block__bg"></div>
    <h2 class="title-block__title">{!! $title_block->title !!}</h2>
    <video class="title-block__video" src="{{$title_block->video->link}}" poster="" loop muted playsinline autoplay></video>
</section>
<section class="title-block title-block--mob">
    <div class="title-block__bg"></div>
    <h2 class="title-block__title">{!! $title_block->title !!}</h2>
    <img src="{{$title_block->mobile_img->link}}?{{$title_block->mobile_img->cache_index}}" alt="MedStyle title-bg">
    <video class="title-block__video" src="{{$title_block->video->link}}" poster="" loop muted playsinline autoplay></video>
</section>