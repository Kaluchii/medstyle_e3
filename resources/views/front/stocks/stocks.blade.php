@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $stocks->seo_title, 'description' => $stocks->seo_description, 'keywords' => $stocks->seo_keywords])

    @include('front.common.offers-main')
    <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "/",
            "name": "Главная"
            }
          },
          {
          "@type": "ListItem",
          "position": 2,
          "item":
           {
             "@id": "/news",
             "name": "Акции и скидки"
           }
          }
         ]
        }
    </script>

@endsection
