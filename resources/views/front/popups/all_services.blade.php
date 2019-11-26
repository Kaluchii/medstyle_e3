@section('all_services')
    <div class="overlay" id="all_services">
        <div class="popup_table">
            <div class="popup_cell">
                <div class="white-popup mfp-with-anim  mfp-hide all_service-popup" id="serv-popup">
                    <div class="grid">
                        <div class="grid services testing">
                            <div class="popup-title-wrap">
                                <h3 class="popup_title">Услуги</h3>
                            </div>
                            <div class="description-wrap"><p>Чтобы помочь вам с выбором процедуры, специалисты «Медстайла» разработали несложный тест.</p></div>
                            <div class="p-button-wrap"><p class="button"><a href="/age" class="go-to-test">Пройти тест</a></p></div>
                        </div>
                        @php $i = 0;
                             $c_1 = $services->count_1;
                             $c_2 = $services->count_2;
                             $c_3 = $services->count_3;
                             $cat_count = $services->serv_category_group->count();
                        @endphp
                        @foreach($services->serv_category_group as $item_category)
                            @if( $i == 0 )
                            <div class="col-1-3 first">
                            @elseif( $i == $c_1 )
                            <div class="col-1-3 second">
                            @elseif( $i == ($c_1 + $c_2) )
                            <div class="col-1-3 editable">
                            @endif
                                <div class="category">
                                    <h3 class="category-name">{{$item_category->cat_name}}</h3>
                                    <ul class="category-list">
                                        @foreach($item_category->services_group as $service_item)
                                            @if($service_item->slug != 'dysport')
                                                @if($service_item->slug != 'диспорт')
                                                    @if($service_item->discount_common != '')
                                                        <li class="category-name">
                                                            <a href="/service/{{$service_item->slug}}" class="link bold">{{$service_item->serv_name}}</a>
                                                            <span class="discount">{{$service_item->discount_common}}</span>
                                                        </li>
                                                    @else
                                                        <li class="category-name">
                                                            <a href="/service/{{$service_item->slug}}" class="link">{{$service_item->serv_name}}</a>
                                                        </li>
                                                    @endif
                                                @endif
                                            @else
                                                @if($service_item->discount_common != '')
                                                    <li class="category-name"><a href="/service/dport" class="link bold">Диспорт</a> <span class="discount">{{$service_item->discount_common}}</span></li>
                                                @else
                                                    <li class="category-name"><a href="/service/dport" class="link">Диспорт</a></li>
                                                @endif
                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                                @if( $i == ($c_1 - 1) || $i == ($c_1 + $c_2 - 1) || $i == ($cat_count - 1))
                            </div>
                            @endif
                        @php $i++ @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
