$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.star-link').on('click',function(){

        obj = {};
        obj['raiting'] = $(this).data('raiting');
        obj['entity_name'] = $('.raiting-star').data('entity');
        obj['entity_id'] = $('.raiting-star').data('id');


        var deferred = $.ajax(
            {
                type: 'POST',
                url: '/raiting/send',
                dataType: 'json',
                data: obj
            }
        );
        deferred.done(function(data){
           if( data.status == "OK"){
               $('.head-reiting').text(data.text);
               $('.current-rating').css('width', data.raiting['proc']+'%');
               $('.totalvotes').html(' <meta itemprop="ratingValue" content="'+data.raiting['sred']+'">Текущий рейтинг — '+data.raiting['sred']+' <meta itemprop="bestRating" content="5"> <meta itemprop="ratingCount" content="727"> ('+data.raiting['count']+' человек)');
           }else if( data.status == "NO"){
               $('.head-reiting').text(data.text);
           }
        });

    });


});