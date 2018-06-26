<div class="specialists__item">
    <a href="/specialist/{{$spec->slug}}" class="specialist">
        <div class="specialist-photo"><img src="{{$spec->img->link}}?{{$spec->img->cache_index}}" alt="{{$spec->img->alt}}" class="spec"></div>
        <p class="spec-name"><span class="name">{{$spec->spec_name}}</span></p>
        <p class="spec-prof">{{$spec->profession}}</p>
    </a>
</div>