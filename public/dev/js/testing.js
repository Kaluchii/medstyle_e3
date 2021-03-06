$(document).ready(function () {
    'use strict';
    var mass = [];
    var ids = [];
    var answers = [];
    $('.hide_block p').each(function (i) {
        mass[i] = (i + 1) + '. ' + $(this).text();
        ids[i] = $(this).data('quest-id');
    });
    $('.count').text(mass.length);
    function howClass(i) {
        var c_name = '';
        switch (i) {
            case 1: {
                c_name = 'one';
                break;
            }
            case 2: {
                c_name = 'two';
                break;
            }
            case 3: {
                c_name = 'three';
                break;
            }
        }
        if (i >= 4) {
            c_name = 'four';
        }
        return c_name;
    }

    function Clear() {
        $('.testing-quest').removeClass('one').removeClass('two').removeClass('three').removeClass('four');
    }

    function checkAnswer() {
        var count = 0;
        $.each(answers, function (i, item) {
            if (answers[i] != '') {
                count++;
            }
        });
        return (count > 0);
    }

    $('.yes').on('click', function () {
        var numb = $('.testing-quest').data('item');
        if (numb <= mass.length - 1) {
            var next_i = numb + 1;
            answers[numb] = 'q' + ids[numb];
            $('.ask-text').text(mass[next_i]);
            Clear();
            $('.testing-quest').data('item', next_i).addClass(howClass(next_i));
        }
        if (numb < mass.length - 1) {
            $('.numb').text(next_i + 1);
        }
        if (numb == mass.length - 1) {
            var href = (window.location.pathname).split('/');
            var result = '/result/p' + href[href.length - 1];
            $.each(answers, function (i, item) {
                result += item;
            });
            window.location.href = result;
        }
        if (checkAnswer()) {
            $('a.stop-quest').css('visibility', 'visible');
        } else {
            $('a.stop-quest').css('visibility', 'hidden');
        }
    });
    $('.no').on('click', function () {
        var numb = $('.testing-quest').data('item');
        if (numb <= mass.length - 1) {
            var next_i = numb + 1;
            answers[numb] = '';
            $('.ask-text').text(mass[next_i]);
            Clear();
            $('.testing-quest').data('item', next_i).addClass(howClass(next_i));
        }
        if (numb < mass.length - 1) {
            $('.numb').text(next_i + 1);
        }
        if (numb == mass.length - 1) {
            var href = (window.location.pathname).split('/');
            var result = '/result/p' + href[href.length - 1];
            $.each(answers, function (i, item) {
                result += item;
            });
            window.location.href = result;
        }
        if (checkAnswer()) {
            $('a.stop-quest').css('visibility', 'visible');
        } else {
            $('a.stop-quest').css('visibility', 'hidden');
        }
    });
    $('.stop-quest').on('click', function () {
        var href = (window.location.pathname).split('/');
        var result = '/result/p' + href[href.length - 1];
        $.each(answers, function (i, item) {
            result += item;
        });
        window.location.href = result;
    });
    $('.prev').on('click', function () {
        var numb = $('.testing-quest').data('item');
        if (numb > 0) {
            var next_i = numb - 1;
            $('.ask-text').text(mass[next_i]);
            Clear();
            $('.testing-quest').data('item', next_i).addClass(howClass(next_i));
        }
        if (numb > 0) {
            $('.numb').text(next_i + 1);
        }
    });
});