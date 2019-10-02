<section class="new-video">
    <div class="new-video__wrap">
        <h2 class="new-video__title title--l1">Новое видео</h2>
        <div class="new-video__video-wrap">
            <div class="new-video__main-wrap js_video_open">
                <div class="new-video__main-video-wrap">
                    <iframe class="new-video__video js_video_play js_video" style="width: 100%; height: 100%"
                            src="https://www.youtube.com/embed/@if(preg_match("/v=([^&]*)\?/", $videos->video_link . '?', $url)){{ $url[1] }}@endif?rel=0&showinfo=0" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
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
                    @foreach($videos->videos_group as $item)
                        <li class="new-video__item js_video_open">
                            <iframe class="new-video__video js_video_play js_video" style="width: 100%; height: 100%"
                                    src="https://www.youtube.com/embed/@if(preg_match("/v=([^&]*)\?/", $item->video_link . '?', $url)){{ $url[1] }}@endif?rel=0&showinfo=0" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <div class="new-video__poster-block js_poster_hide">
                                <img class="new-video__video-poster"
                                     src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->video_name}}">
                                <p class="new-video__poster-text">{{$item->video_name}}</p>
                                <p class="new-video__poster-time">{{$item->time}}</p>
                            </div>
                        </li>
                    @endforeach
                    <li class="new-video__item new-video__item--youtube">
                        <p class="new-video__item-youtube-text">
                            Подпишитесь на наш <br>
                            YouTube-канал
                        </p>
                        <a href="https://www.youtube.com/channel/UCE2HHrjCN11fRl1J6Fyj-Gw" class="new-video__item-youtube-link" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>