<section class="new-video">
    <div class="new-video__wrap fade js_animation" data-offset="30">
        <h2 class="new-video__title title--l1 fade fadeInUp__child">Новое видео</h2>
        <div class="new-video__video-wrap fade fadeInUp__child fade__delay-1">
            <div class="new-video__main-wrap js_video_open">
                <div class="new-video__main-video-wrap js_">
                    <div class="new-video__video-url js_video_url" data-url="https://www.youtube.com/embed/@if(preg_match("/v=([^&]*)\?/", $videos->video_link . '?', $url)){{ $url[1] }}@endif?rel=0&showinfo=0&autoplay=1"></div>
                    <div class="new-video__poster-block js_poster_hide">
                        <img class="new-video__video-poster" src="{{$videos->img->link}}?{{$videos->img->cache_index}}"
                             alt="{{$videos->video_name}}">
                        <p class="new-video__poster-text new-video__poster-text--main">{{$videos->video_name}}</p>
                        <p class="new-video__poster-time">{{$videos->time}}</p>
                    </div>
                </div>
            </div>
            <div class="new-video__list-wrap">
                <ul class="new-video__list">
                    @php $i = 2 @endphp
                    @foreach($videos->videos_group as $item)
                        <li class="new-video__item js_video_open  fade fadeInUp__child fade__delay-{{ $i++ }}">
                            <div class="new-video__video-url js_video_url" data-url="https://www.youtube.com/embed/@if(preg_match("/v=([^&]*)\?/", $item->video_link . '?', $url)){{ $url[1] }}@endif?rel=0&showinfo=0&autoplay=1"></div>
                            <div class="new-video__poster-block js_poster_hide">
                                <img class="new-video__video-poster"
                                     src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->video_name}}">
                                <p class="new-video__poster-text">{{$item->video_name}}</p>
                                <p class="new-video__poster-time">{{$item->time}}</p>
                            </div>
                        </li>
                    @endforeach
                    <li class="new-video__item new-video__item--youtube fade fadeInUp__child fade__delay-5">
                        <p class="new-video__item-youtube-text">
                            Подпишитесь на наш <br>
                            YouTube-канал
                        </p>
                        <a href="{{ $all_site->youtube }}" class="new-video__item-youtube-link" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>