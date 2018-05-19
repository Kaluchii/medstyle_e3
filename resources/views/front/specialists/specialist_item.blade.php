<div class="col-1-4">
    <a href="/specialist/{{$spec->slug_field}}" class="specialist">
        <div class="specialist-photo"><img src="images/{{$spec->spec_photo_image->secondary_link}}" alt="{{$spec->spec_photo_image->alt}}" class="spec"></div>
        <p class="spec-name"><span class="name">{{$spec->name_field}}</span></p>

        <p class="spec-prof">{{$spec->profession_field}}</p>
    </a>
</div>