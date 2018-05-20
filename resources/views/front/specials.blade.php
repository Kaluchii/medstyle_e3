@section('special')
<div class="grid grid-pad special-price">
    <h2 class="service-proc__title service-proc__title--indentation">Акции и спецпредложения</h2>

    <div class="grid grid-pad akcii akcii--service flex-grid">

        @php
        function str_replace_once($search, $replace, $text)
        {
            $pos = strpos($text, $search);
            return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
        }
        function wrap_in_link( $str, $slug)
        {
            $astart = '<a href=\'' . $slug . '\' class=\'link\'>';
            $aend = '</a>';
            $str = str_replace_once('#', $astart, $str);
            $str = str_replace_once('#', $aend, $str);
            return $str;
        }
        @endphp
        <div class="rows rows--service">
            @foreach($stocks->stocks_group as $item)
                <div class="row">
                    <div class="col-9-12">
                        <h2 class="shares-name">
                            @php $link = wrap_in_link($item->stock_name, $item->link); @endphp
                            {!! $link !!}
                        </h2>
                        <div class="shares-description text-block">{!! $item->text !!}</div>
                        <p class="shares-date">{{$item->discount}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection