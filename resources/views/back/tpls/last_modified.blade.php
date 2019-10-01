@foreach($blocks as $item)
    <input class="form-control string" type="hidden" value="{{ time() }}"
           data-name="last_modified" data-type="string" data-block="{{ $item['block_name'] }}" data-id="{{ !empty($item['id']) ? $item['id'] : '0' }}">
@endforeach
