$(document).ready(function () {
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    function validate(arr) {
        var error = false;
        arr.each(function () {
            $this = $(this);
            if ($this.val() == '' && $this.data('field-type') != 'bool') {
                error = true;
                $this.addClass('error');
                $this.on('change', function () {
                    $(this).removeClass('error');
                })
            }
            if ($this.data('field-name') == 'email' || $this.data('field-name') == 'mail') {
                var regex = /\S+@\S+/igm;
                if (!regex.test($this.val())) {
                    error = true;
                    $this.addClass('error');
                    $this.on('change', function () {
                        $(this).removeClass('error');
                    })
                }
            }
        });
        return error;
    }

    function clear_field(id) {
        $('#' + id + ' .popup_field').each(function () {
            $(this).val('');
        });
    }

    function addFields( selector, object ){

        $(selector).each(function () {
            var $this = $(this);
            if ($this.data('field-type') == 'bool'){
                if( $this.is(':checked') ){
                    object[$this.data('field-name')] = true;
                } else {
                    object[$this.data('field-name')] = '';
                }
            } else {
                object[$this.data('field-name')] = $this.val();
            }
        });
    }

    $('.send-ask').on('click', function () {
        var sendButton = $(this);
        unical = $(this).data('popup-id');
        var validater = validate($('#' + unical + ' .popup_field'));
        var dataObj = {};
        dataObj['form'] = $(this).data('type-name');
        addFields('#' + unical + ' .popup_field', dataObj);
        if (!validater) {
            var deferred = $.ajax({type: 'POST', url: '/feedback/mail', data: dataObj, headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            sendButton.addClass('load');
            deferred.done(function (data) {
                $.magnificPopup.open({items: {src: '#thanks'}, type: 'inline'});
                clear_field(unical);
                sendButton.removeClass('load');
            });
            deferred.fail(function (data) {
                sendButton.removeClass('load');
            })
        } else {
            if (unical == 'quest') {
                $('#' + unical + ' .public').text('Не все поля заполнены верно');
            } else {
                $('#' + unical + ' .text').text('Не все поля заполнены верно');
            }
        }
    });
});