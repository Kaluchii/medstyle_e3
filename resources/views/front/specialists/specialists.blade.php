@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $static_spec->seo_description_field, 'meta_keywords' => $static_spec->seo_keywords_field])
    <?php $title = $static_spec->page_title_field ?>
<article class="content" data-page="services" >
    <div class="content-head">
        <h1 class="content-head-title spec">{{$static_spec->title_field}}</h1>
        <div class="grid grid-pad head-grid">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $static_spec->description_field !!}
                </div>
            </div>
            <div class="col-1-2">
                @if($static_spec->photos_group->count() > 0)
                <div class="from-life-block">
                    <a class="from-life life-popup" href="#life">
                        <div class="from-life-photo">
                            <img src="/images/{{$static_spec->for_life_image->primary_link}}" alt="{{$static_spec->for_life_image->alt}}" class="from-life">
                        </div>
                        <p class="text-from"><span>{{$static_spec->for_life_text_field}}</span></p>
                    </a>
                </div>
                @endif
            </div>
        </div>

    </div>
    <div class="grid grid-pad specialists">
        @foreach($specs as $spec)
            @include('front.specialists.specialist_item')
        @endforeach
    </div>
    <div class="overlay">
        <div class="popup_table">
            <div class="popup_cell">
                <div class="white-popup" id="life" data-popup="grid">
                    <h3 class="popup_title">Сертификаты</h3>
                    <div class="grid gallery-slider">
                        <?php $i = -1;?>
                        @foreach($static_spec->photos_group as $item)
                            <div class="col-1-3">
                                <a class="cert photo" href="/images/{{$item->photo_image->primary_link}}">
                                    <img src="/images/{{$item->photo_image->icon_link}}" alt="{{$item->photo_image->alt}}" class="cert">
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</article>
@endsection
