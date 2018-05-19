/**
 * Created by KocaHocTpa on 10.02.2016.
 */

$(document).ready(function () {
    var items = document.location.pathname;
    var category = items.split('/')[1];
    $('.menu-item .item').each(function () {
        var ahref = $(this).attr('href').split('/')[1];
        category = category == 'service' ? 'services' : category;
        category = category == 'specialist' ? 'specialists' : category;
        if (ahref == category) {
            $(this).addClass('active').closest('.menu-item').addClass('active');
        }
    });

    $(".js-slick").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 7000,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 941,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true
                }
            }
        ]
    });


    $(".js-slick-video").slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 841,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //=========================== Магия адаптивной верстки
    // Перестройка блоков контента на разных страницах на разных разрешениях
    function WindowSize() {
        if ($('article').data('page') == 'index') {
        //  Страница услуг
        } else if ($('.content-wrap').data('page') == 'services') {
            if($(window).width() <= 740) {
                var count = $('.vertical-list:last-child .movable').length;
                var half = count / 2 | 0;
                $('.vertical-list:last-child .movable').each(function(i){
                    if(i<half){
                        $(this).appendTo($('.vertical-list:nth-child(1)'));
                    }else{
                        $(this).appendTo($('.vertical-list:nth-child(2)'));
                    }
                });
            }else{
                $('.vertical-list .movable').prependTo($('.vertical-list:last-child'));
            }
        //  Страница "услуга"
        } else if ($('article').data('page') == 'service') {

            if($(window).width() < 1000) {
                $('.information-block .social-buttons').prependTo($('article.content[data-page=service]'));
                $('.information-block .all-product').prependTo($('article.content[data-page=service]'));
            }else{
                $('article.content .all-product:first-child').appendTo($('.information-block'));
                $('article.content .social-buttons').appendTo($('.information-block'));
            }
        //  Страница "технология"
        } else if ($('article').data('page') == 'technology') {

            if($(window).width() < 1000) {
                $('.information-block .social-buttons').prependTo($('article.content[data-page=technology]'));
                $('.information-block .all-product').prependTo($('article.content[data-page=technology]'));
            }else{
                $('article.content .all-product:first-child').appendTo($('.information-block'));
                $('article.content .social-buttons').appendTo($('.information-block'));
            }
            //  Вопросы и ответы
        } else if ($('article').data('page') == 'question') {
            if ($(window).width() <= '700') {
                $('.tofirst').prependTo($('.grid.grid-pad.question-page'));
            } else {
                $('.tofirst').appendTo($('.grid.grid-pad.question-page'));
            }
        }
        //  Специалисты
        else if ($('article').data('page') == 'specialist') {
            if (($(window).width() >= '320') && ($(window).width() <= '700')) {
                $('div.photo').after($('.about-specialist'));
            } else {
                $('.about-specialist').appendTo($('.grid.grid-pad.specialist .col-1-2:last-child'));
            }
        }
        //  Тестирование
        else if ($('article').data('page') == 'testing') {
            if (($(window).width() >= '320') && ($(window).width() <= '550')) {
                $('button.prev').appendTo($('.btn-acp'));
                $('.center-top').html($('.stop-quest'))
            } else {
                $('button.prev').appendTo($('.old-acp'));
                $('.stop-quest').appendTo($('.btn-acp'));
            }
        //  Результат тестирования
        } else if ($('article').data('page') == 'recomend') {
            if (($(window).width() >= '320') && ($(window).width() <= '800')) {
                $('.text.append').appendTo($('.acp-after'));
                $('.testing-ans-bloks').appendTo($('.acp-after'));
                $('.gray').appendTo('.ret-1');
            } else {
                $('.gray').appendTo('.col-1-2.bookmark');
                $('.ret-1').html($('.text.append'));
                $('.testing-ans-bloks').appendTo($('.ret-2'));

            }
        //  Полезное
        } else if ($('article').data('page') == 'helpful') {
            var winWidth = $(window).width();
            var conWidth;
            col = 3;
            colwidth = 10;
            if (winWidth < 600) {
                col = 1;
                colwidth = 0;
            } else if (winWidth < 900) {
                col = 2;
                colwidth = 10
            } else if (winWidth < 1100) {
                col = 3;
                colwidth = 10
            }
            currentWidth = conWidth;

            $('.grid.grid-pad.helpful').BlocksIt({
                numOfCol: col,
                offsetX: colwidth,
                offsetY: 40,
                blockElement: '.poleznoe-block-item'
            });
        } else if ($('.content-wrap').data('page') == 'technologies') {
            if($(window).width() <= 840) {
                var count = $('.vertical-list:first-child .movable').length;
                var half = count / 2 | 0;
                $('.vertical-list:first-child .movable').each(function(i){
                    if(i<half){
                        $(this).prependTo($('.vertical-list:nth-child(2)'));
                    }else{
                        $(this).prependTo($('.vertical-list:nth-child(3)'));
                    }
                });
            }else{
                $('.vertical-list .movable').appendTo($('.vertical-list:first-child'));
            }
        }
    }


    $(window).on('load resize', WindowSize);

    //========================== Вызов слайдера на главной и на странице услуга
    var menuTop = 0;
    $(window).on('load', function () {
        if ($('article').data('page') == 'index') {
            $('.wrapper').addClass('gray-background');
        }
        menuTop = $('.header').outerHeight()+1;
    }).on('resize', function(){
        if( !$('.main-menu').hasClass('fixed') ){
            menuTop = $('.header').outerHeight()+1;
        }
        if ($('article').data('page') != 'index'){
            if ($(window).width() > '1000' || $(window).scrollTop() < menuTop) {
                $('.main-menu').removeClass('fixed');
            }else {
                $('.main-menu').addClass('fixed');
            }
        }
    }).on('scroll', function(){
        if( $(window).scrollTop() >= menuTop ){
            $('.main-menu').addClass('fixed');
        }else {
            $('.main-menu').removeClass('fixed');
        }
    });

    $(window).on('load', function () {
        if ($('article').data('page') == 'stock') {
            $('.wrapper').addClass('gray-background');
        } else if ($('.content-wrap').data('page') == 'technologies') {
            $('.wrapper').addClass('gray-background2');
        } else if ($('.content-wrap').data('page') == 'services') {
            $('.wrapper').addClass('gray-background3');
        }
    });
    //========================== вызов меню на малых экранах
    $('.menu-button').on('click', function () {
        if( $(this).hasClass('active') ){
            $(this).removeClass('active').delay(1000);
        }else{
            $(this).addClass('active');
        }
        $('.popup-for-menu').slideToggle();
    });


    //=================================================  Вызов галлереи из всплывающего окна
    $('.gallery-slider a.photo').on('click', function () {
        // закрытие предыдущего всплывающего окна
        $('.mfp-close').click();
        // инициализация самой галлереи
        $('a.photo').magnificPopup({
            callbacks: {},
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1],
                tCounter: '%curr% из %total%'
            }
        });
        // возврат false что бы не было перехода по ссылке
        return false;
    });
    // Магия без которой при первом клике галлерея не работает
    $('.gallery-slider a.photo').click();
    $('.mfp-close').click();

    //==========================================================


    //=========================== Модальные окна
    $('.life-popup').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });
    $('.spec-cert').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });

    $('.techno').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });
    $('.consult-popup').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.all_serv').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.ask-me-popup').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });


    // ================== Вызов кастомных селектов


    $('select.input.popup_field').selectmenu({});

    // Вызов селекта в технологиях и вопросах и ответах - селект с переходом по ссылке
    $('select.all-techno').selectmenu({
        change: function () {
            if ($(this).val() != '' &&
                $(this).val() != window.location.pathname) {
                window.location = $(this).val();
            }
        }
    });
    // fix - Я не придумал другого способа сделать выпадающее меню такой же ширины как и инпут для этого предназначенный
    // селект в попапе "Запись на консультацию"
    $('.question-select .ui-selectmenu-button').on('click', function () {
        $('.ui-widget.ui-widget-content').css('width', $('.ui-selectmenu-button').outerWidth() + 'px');
        $('.ui-widget.ui-widget-content').css('height', 200 + 'px');
    });


    $('.ui-selectmenu-button').on('click', function () {
        $('.ui-widget.ui-widget-content').css('width', $('.ui-selectmenu-button').outerWidth() + 'px');
    });

    // Добавление в закладки

    function add_favorite(a) {
        title=document.title;
        url=document.location;
        try {
            // Internet Explorer
            window.external.AddFavorite(url, title);
        }
        catch (e) {
            try {
                // Mozilla
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                // Opera
                if (typeof(opera)=="object") {
                    a.rel="sidebar";
                    a.title=title;
                    a.url=url;
                    return true;
                }
                else {
                    // Unknown
                    alert('Нажмите Ctrl-D чтобы добавить страницу в закладки');
                }
            }
        }
        return false;
    }


    $('.bookmark.add').on('click',function(){
        add_favorite(this);
    });

    $('.video-block__video-wrap').on('click', function (e) {
        e.preventDefault();
        $(this).find('.video_player').trigger('click');
    });
});



$(window).on('load resize', function () {
    if ($('article').data('page') == 'stock') {
        if ($(window).width() <= '1000' && !$('.col_1-3:nth-child(3)').hasClass('hide-block')) {
            $('.col_1-3:nth-child(3) .stock-item:even').addClass('removable').appendTo($('.col_1-3:nth-child(1)'));
            $('.col_1-3:nth-child(3) .stock-item:odd').addClass('removable').appendTo($('.col_1-3:nth-child(2)'));
            $('.col_1-3:nth-child(3)').addClass('hide-block');
            $('.col_1-3 .stock-social').appendTo($('.col_1-3:nth-child(1)'));
        } else if ($(window).width() > '1000' && $('.col_1-3:nth-child(3)').hasClass('hide-block')) {
            $('.col_1-3:nth-child(1) .removable').removeClass('removable').appendTo($('.col_1-3:nth-child(3)'));
            $('.col_1-3:nth-child(2) .removable').removeClass('removable').appendTo($('.col_1-3:nth-child(3)'));
            $('.col_1-3:nth-child(3)').removeClass('hide-block');
        }
    }
});
function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
function giveIFrameSrc(url) {
    var pos;
    var resultSrc;
    if (~url.indexOf("vimeo.com/")){
        pos = url.indexOf("vimeo.com/") + 10;
        resultSrc = 'https://player.vimeo.com/video/' + url.substr(pos) + '?autoplay=1&color=ff0179&title=0&byline=0&portrait=0';
        return resultSrc;
    }
    if (~url.indexOf("watch?v=")){
        pos = url.indexOf("watch?v=") + 8;
        resultSrc = 'https://www.youtube.com/embed/' + url.substr(pos) + '?autoplay=1&autohide=1&rel=0&amp;showinfo=0?autoplay=1&autohide=1';
        return resultSrc;
    }
}
r(function(){
    if (!document.getElementsByClassName) {
        // Поддержка IE8
        var getElementsByClassName = function(node, classname) {
            var a = [];
            var re = new RegExp('(^| )'+classname+'( |$)');
            var els = node.getElementsByTagName("*");
            for(var i=0,j=els.length; i<j; i++)
                if(re.test(els[i].className))a.push(els[i]);
            return a;
        }
        var videos = getElementsByClassName(document.body,"video_player");
    } else {
        var videos = document.getElementsByClassName("video_player");
    }

    var nb_videos = videos.length;
    for (var i=0; i<nb_videos; i++) {
        videos[i].style.backgroundImage = 'url(/images/' + videos[i].getAttribute("data-preview");

        // Добавляем иконку Play поверх миниатюры, чтобы было похоже на видеоплеер
        var play = document.createElement("div");
        play.setAttribute("class","play");
        videos[i].appendChild(play);

        videos[i].onclick = function() {
            // создаем iframe со включенной опцией autoplay
            var iframe = document.createElement("iframe");
            var iframe_src = giveIFrameSrc(this.getAttribute("data-link"));
            iframe.setAttribute("src",iframe_src);
            iframe.setAttribute("frameborder",'0');
            iframe.setAttribute("webkitallowfullscreen",'');
            iframe.setAttribute("mozallowfullscreen",'');
            iframe.setAttribute("allowfullscreen",'');

            // Высота и ширина iframe должны быть такими же, как и у родительского блока
            iframe.style.width  = '100%';
            iframe.style.height = '100%';

            // Заменяем миниатюру плеером с YouTube
            this.parentNode.replaceChild(iframe, this);
        }
    }
});