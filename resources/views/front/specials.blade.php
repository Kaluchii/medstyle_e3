@section('special')
    <?php $count_sp = 0;?>
<div class="grid grid-pad special-price">
    <h2 class="service-proc__title service-proc__title--indentation">Акции и спецпредложения</h2>

    <div class="grid grid-pad akcii akcii--service flex-grid">

        <?php $i= 0;
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
        ?>
        <div class="rows rows--service">
            @foreach($special->special_offers_group as $item)
                <?php $i++; ?>
                @if($i <= 3)
                    <div class="row">
                        <div class="col-9-12">
                            <h2 class="shares-name">
                                <?php $link = wrap_in_link($item->prev_name_field, $item->slug_field); ?>
                                {!! $link !!}
                            </h2>
                            <div class="shares-description text-block">{!! $item->prev_text_field !!}</div>
                            <p class="shares-date">{{$item->all_text_field}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection