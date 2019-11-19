@section('special')
    @php $count_sp = 0;@endphp
<div class="grid grid-pad special-price">
    @foreach($special->special_offers_group as $item)
        @php $count_sp++@endphp
        @if($count_sp <= 4)
        <div class="col-1-3">
            <a href="{{$item->slug_field}}" class="special">
                <div class="special-block">
                    <div class="special-wrap">
                        <p class="special-title">{{$item->name_field}}</p>

                        <p class="special-text">{{$item->description_field}}</p>
                    </div>
                    <img src="{{$item->wrap_image->primary_link}}" alt="{{$item->wrap_image->alt}}" class="special-preview">
                    <div class="special-hover"></div>
                </div>
            </a>
        </div>
            @endif
    @endforeach
</div>
@endsection