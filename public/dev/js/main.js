/**
 * Created by KocaHocTpa on 10.02.2016.
 */

$(document).ready(function () {
    // Выделение активной ссылки в меню
    var items = document.location.pathname;
    var category = items.split('/')[1];
    $('.js_menu_item_link').each(function () {
        var ahref = $(this).attr('href').split('/')[1];
        category = category == 'service' ? 'services' : category;
        category = category == 'specialist' ? 'specialists' : category;
        if (ahref == category) {
            $(this).addClass('is-active').closest('.js_menu_item').addClass('is-active');
        }
    });

    // Скрипты для анмации
    $(function () {
        var $window = $(window);

        revealOnScroll();
        $window.on('scroll', revealOnScroll);

        function revealOnScroll() {
            var $windowBottomScroll = $window.scrollTop() + $window.height();

            $('.js_animation').each(function () {
                var $this = $(this),
                    $windowOffset = $window.height() * (+$this.attr('data-offset') * 0.01),
                    $thisOffsetTop = $this.offset().top + $windowOffset;

                if ($windowBottomScroll >= $thisOffsetTop) {
                    $this.addClass('is-animate');
                }
            });
        }
    });

    // Скрипты для блока с видеороликами "Особенности Medstyle"
    var allVideo = document.querySelectorAll('.js_video');

    $('.features__item-img-wrap').mouseenter(function () {
        for (var i = 0; i < allVideo.length; i++) {
            allVideo[i].play();
        }
    });

    $('.features__item-img-wrap').mouseleave(function () {
        for (var i = 0; i < allVideo.length; i++) {
            allVideo[i].pause();
        }
    });

    // lazy-load для блока с видеороликами "Особенности Medstyle"
    $(function () {
        var desktopVideos = $('.js_video_load'),
            mobileVideos = $('.js_mob_video_load'),
            proceduresBlockOffsetTop = $('.js_procedures').offset().top,
            currentScroll = $(window).scrollTop(),
            windowWidth = $(window).width(),
            flag = true;

        function addVideoSrc(scroll) {
            if (scroll >= proceduresBlockOffsetTop) {
                if (windowWidth > 768) {
                    desktopVideos.each(function () {
                        $(this).attr('src', $(this).attr('data-src'));
                    });
                    flag = false;
                } else {
                    mobileVideos.each(function () {
                        $(this).attr('src', $(this).attr('data-src'));
                    });
                    flag = false;
                }
            }
        }

        // Вызов функции addVideoSrc при первой загрузуке
        addVideoSrc(currentScroll);

        // Вызов функции addVideoSrc при ресайзе
        $(window).on('resize', function () {
            windowWidth = $(window).width();
            addVideoSrc(currentScroll);
        });

        // Вызов функции addVideoSrc при скролле если flag = true
        $(window).on('scroll.procedures', function () {
            if (flag) {
                currentScroll = $(window).scrollTop();
                addVideoSrc(currentScroll);
            }
        });
    });

    // Скрипт для блока с YouTube видео
    var thisIframe = $('<iframe class="new-video__video" style="width: 100%; height: 100%" frameborder="0"' +
        'allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"' + 'allowfullscreen></iframe>');

    $('.js_video_open').click(function () {
        var thisPoster = $(this).find('.js_poster_hide'),
            thisUrlTag = $(this).find('.js_video_url'),
            thisUrl = thisUrlTag.attr('data-url'),
            thisIframeClone;

        thisIframe.attr('src', thisUrl);
        thisIframeClone = thisIframe.clone();
        thisUrlTag.after(thisIframeClone);
        thisPoster.addClass('is-hide');
    });

    // Скрипт для мобильного бокового меню
    var mobMenu = $('.js_mob_menu'),
        mobMenuBg = $('.js_mob_menu_bg'),
        body = $('body');

    $('.js_menu_mob_open').click(function () {
        mobMenu.addClass('is-active');
        mobMenuBg.addClass('is-active');
        body.addClass('body-stop');
    });

    $('.js_mob_menu_close').click(function () {
        mobMenu.removeClass('is-active');
        mobMenuBg.removeClass('is-active');
        body.removeClass('body-stop');
    });

    mobMenuBg.click(function () {
        mobMenu.removeClass('is-active');
        mobMenuBg.removeClass('is-active');
        body.removeClass('body-stop');
    });

    $(window).on('resize', function () {
        if ($(window).width() > 1024) {
            mobMenu.removeClass('is-active');
            mobMenuBg.removeClass('is-active');
            body.removeClass('body-stop');
        }

        var $video = $('.js_title_video');
        if ($(window).width() > 620 && !$video.attr('src')) {
            $video.attr('src', $video.attr('data-src'));
        }
    });

    // Скрипт для откытия попапов блока "Выберите процедуру"
    $(function () {
        $('.js_procedures_popup_open').click(function (event) {
            event.stopPropagation();
            var thisParent = $(this).closest('.js_parent_el'),
                thisPopup = thisParent.siblings('.js_procedure_popup');

            $('.js_procedure_popup').fadeOut();
            thisPopup.fadeIn(200);
        });
    });

    // Скрипт для закрытия попапов блока "Выберите процедуру"
    $(function () {
        $('body').click(function (event) {
            event.stopPropagation();
            $('.js_procedure_popup').fadeOut();
        });
    });

    // Активация попапов
    $(function () {
        $('.js_popup_open').magnificPopup({
            type: 'inline',
            mainClass: 'mfp-left-to-right',
            removalDelay: 300,
            tClose: 'Закрыть (Esc)',
            midClick: true,
            autoFocusLast: false
        });
    });

    // Вызов слайдеров
    $('.js_slick_active').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        speed: 300
    });

    //=========================== Магия адаптивной верстки
    // Перестройка блоков контента на разных страницах на разных разрешениях
    function WindowSize() {
        if ($('article').data('page') == 'index') {
            //  Страница услуг
        } else if ($('.content-wrap').data('page') == 'services') {
            if ($(window).width() <= 740) {
                var count = $('.vertical-list:last-child .movable').length;
                var half = count / 2 | 0;
                $('.vertical-list:last-child .movable').each(function (i) {
                    if (i < half) {
                        $(this).appendTo($('.vertical-list:nth-child(1)'));
                    } else {
                        $(this).appendTo($('.vertical-list:nth-child(2)'));
                    }
                });
            } else {
                $('.vertical-list .movable').prependTo($('.vertical-list:last-child'));
            }
            //  Страница "услуга"
        } else if ($('article').data('page') == 'service') {

            if ($(window).width() < 1000) {
                $('.information-block .social-buttons').prependTo($('article.content[data-page=service]'));
                $('.information-block .all-product').prependTo($('article.content[data-page=service]'));
            } else {
                $('article.content .all-product:first-child').appendTo($('.information-block'));
                $('article.content .social-buttons').appendTo($('.information-block'));
            }
            //  Страница "технология"
        } else if ($('article').data('page') == 'technology') {

            if ($(window).width() < 1000) {
                $('.information-block .social-buttons').prependTo($('article.content[data-page=technology]'));
                $('.information-block .all-product').prependTo($('article.content[data-page=technology]'));
            } else {
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
                $('.center-top').html($('.stop-quest'));
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
        } else if ($('content-wrap').data('page') == 'helpful') {

        } else if ($('.content-wrap').data('page') == 'technologies') {
            if (($(window).width() <= 840) && ($(window).width() > 500)) {
                $('.js_list_item').sort(function (a, b) {
                    return $(a).data('index') - $(b).data('index')
                }).each(function (i) {
                    if ((i + 2) % 2 === 0) {
                        $(this).prependTo($('.js_second_list'));
                    } else {
                        $(this).prependTo($('.js_third_list'));
                    }
                });
            } else if ($(window).width() <= 500) {
                $('.js_list_item').prependTo($('.js_third_list'));
            } else {
                $('.js_first_list_item').prependTo($('.js_first_list'));
                $('.js_second_list_item').prependTo($('.js_second_list'));
                $('.js_third_list_item').prependTo($('.js_third_list'));
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
        menuTop = $('.header').outerHeight() + 1;
    }).on('resize', function () {
        if (!$('.main-menu').hasClass('fixed')) {
            menuTop = $('.header').outerHeight() + 1;
        }
        if ($('article').data('page') != 'index') {
            if ($(window).width() > '1120' || $(window).scrollTop() < menuTop) {
                $('.main-menu').removeClass('fixed');
            } else {
                $('.main-menu').addClass('fixed');
            }
        }
    }).on('scroll', function () {
        if ($(window).scrollTop() >= menuTop) {
            $('.main-menu').addClass('fixed');
        } else {
            $('.main-menu').removeClass('fixed');
        }
        if ($(window).scrollTop() >= menuTop) {
            $('.js_menu_mob').addClass('fixed');
        } else {
            $('.js_menu_mob').removeClass('fixed');
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
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.all_serv').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.ask-me-popup').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
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
        title = document.title;
        url = document.location;
        try {
            // Internet Explorer
            window.external.AddFavorite(url, title);
        } catch (e) {
            try {
                // Mozilla
                window.sidebar.addPanel(title, url, '');
            } catch (e) {
                // Opera
                if (typeof (opera) == 'object') {
                    a.rel = 'sidebar';
                    a.title = title;
                    a.url = url;
                    return true;
                } else {
                    // Unknown
                    alert('Нажмите Ctrl-D чтобы добавить страницу в закладки');
                }
            }
        }
        return false;
    }


    $('.bookmark.add').on('click', function () {
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


function r(f) {
    /in/.test(document.readyState) ? setTimeout('r(' + f + ')', 9) : f();
}


function giveIFrameSrc(url) {
    var pos;
    var resultSrc;
    if (~url.indexOf('vimeo.com/')) {
        pos = url.indexOf('vimeo.com/') + 10;
        resultSrc = 'https://player.vimeo.com/video/' + url.substr(pos) + '?autoplay=1&color=ff0179&title=0&byline=0&portrait=0';
        return resultSrc;
    }
    if (~url.indexOf('watch?v=')) {
        pos = url.indexOf('watch?v=') + 8;
        resultSrc = 'https://www.youtube.com/embed/' + url.substr(pos) + '?autoplay=1&autohide=1&rel=0&amp;showinfo=0?autoplay=1&autohide=1';
        return resultSrc;
    }
}


r(function () {
    if (!document.getElementsByClassName) {
        // Поддержка IE8
        var getElementsByClassName = function (node, classname) {
            var a = [];
            var re = new RegExp('(^| )' + classname + '( |$)');
            var els = node.getElementsByTagName('*');
            for (var i = 0, j = els.length; i < j; i++)
                if (re.test(els[i].className)) a.push(els[i]);
            return a;
        };
        var videos = getElementsByClassName(document.body, 'video_player');
    } else {
        var videos = document.getElementsByClassName('video_player');
    }

    var nb_videos = videos.length;
    for (var i = 0; i < nb_videos; i++) {
        videos[i].style.backgroundImage = 'url(' + videos[i].getAttribute('data-preview');

        // Добавляем иконку Play поверх миниатюры, чтобы было похоже на видеоплеер
        var play = document.createElement('div');
        play.setAttribute('class', 'play');
        videos[i].appendChild(play);

        videos[i].onclick = function () {
            // создаем iframe со включенной опцией autoplay
            var iframe = document.createElement('iframe');
            var iframe_src = giveIFrameSrc(this.getAttribute('data-link'));
            iframe.setAttribute('src', iframe_src);
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('webkitallowfullscreen', '');
            iframe.setAttribute('mozallowfullscreen', '');
            iframe.setAttribute('allowfullscreen', '');

            // Высота и ширина iframe должны быть такими же, как и у родительского блока
            iframe.style.width = '100%';
            iframe.style.height = '100%';

            // Заменяем миниатюру плеером с YouTube
            this.parentNode.replaceChild(iframe, this);
        };
    }
});