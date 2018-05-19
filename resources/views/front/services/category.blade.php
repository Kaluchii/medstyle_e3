<?php $i = 0?>
@foreach($category as $item_category)
    <?php $i++?>
    @if( $i == 1)
        <div class="col-1-3 first">
    @elseif( $i == 3 )
        <div class="col-1-3 second">
    @elseif( $i == 5 )
        <div class="col-1-3 editable">
    @endif
    @if($i == 5)
        <div class="category category-1-1">
    @elseif( $i == 6)
        <div class="category category-1-2">
    @else
        <div class="category">
    @endif
            <img src="/images/{{$item_category->category_pict_image->primary_link}}" alt="{{$item_category->category_pict_image->alt}}" class="category-img">
            <h3 class="category-name" id="{{$item_category->category_title_field}}">{{$item_category->category_title_field}}</h3>
            <ul class="category-list">
                @foreach($item_category->services_group as $serv_item)
                    @if($serv_item->discount_field != '')
                        <li class="category-name"><a href="/service/{{$serv_item->slug_field}}" class="link bold">{{$serv_item->name_field}}</a> <span class="discount">{{$serv_item->discount_field}}</span></li>
                    @else
                        <li class="category-name"><a href="/service/{{$serv_item->slug_field}}" class="link">{{$serv_item->name_field}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    @if( $i == 2 || $i == 4 || $i == 6)
        </div>
    @endif

@endforeach