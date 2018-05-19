@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $about->seo_description_field, 'meta_keywords' => $about->seo_keywords_field])
    <?php $title = $about->page_title_field ?>
    <div class="grid">
        <div class="col-1-1 head about-head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="/images/clinics.jpg" alt="Деятельность клиники эстетической медицины Medstyle" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title">{{$about->title_field}}</h1>
                </div>
            </div>
        </div>
    </div>
<article class="content" data-page="about">

    <div class="grid grid-pad about">
        <div class="col-1-2">
            <div class="text-block">
                {!!  $about->aboutfirm_field !!}
            </div>
        </div>
        <div class="col-1-2">
            <div class="from-life-block">
                <a href="{{$about->linktext_field}}" target="_blank" class="from-life">
                    <div class="from-life-photo"><img src="/images/{{$about->d3_tour_image->primary_link}}" alt="{{$about->d3_tour_image->alt}}" class="from-life about-block" ></div>
                    <p class="text-from"><span>3D-тур</span></p>
                </a>
            </div>
        </div>
    </div>
</article>
@endsection
