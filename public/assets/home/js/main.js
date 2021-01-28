function init() {


    $(document).off('ajaxStart').off('ajaxStop').on({
        ajaxStart: function (e) {
            NProgress.start();
        },

        ajaxStop: function () {
            NProgress.done();

        }
    });
    $(document).on('click', 'a', function (e) {
        console.log('click');
        e.stopImmediatePropagation();
        if ($(this).data('redirect-to')) window.location.href = $(this).data('redirect-to');
        if ($(this).data('redirect')) {
            e.preventDefault();
            changeUrl($(this).attr('href'), $(this));
            if ($(this).data('reload')) {
                document.location.reload(true);
            }
            init();

        }
    });
    $(document).on('submit', 'form#action', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        let form = $(this);

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            global: false,
            cache: false,
            data: form.serialize(),
            success: function () {
                if (form.data('success')) errors({'success': form.data('success')}, $("#" + form.data('alert')))
                if (form.data('reload')) location.reload();

            },
            error: function (data) {
                form.data('error') ? errors({'error': form.data('error')}, $("#" + form.data('alert'))) : errors(data, $("#" + form.data('alert')));
            }
        });
    });

}

function errors(data, selector) {
    selector.empty();
    selector.show();
    const error = ({alert, message}) => `                   <div class="alert ${alert}" role="alert">
 ${message}
</div>`;
    if (data['error'])
        selector.prepend(error({'alert': 'alert-danger', 'message': data['error']}));
    else if (data['success'])
        selector.prepend(error({'alert': 'alert-primary', 'message': data['success']}));
    else {
        var l = JSON.parse(data.responseText);
        var i = 0;
        $.each(l['errors'], function (heading, text) {
            i++;
            selector.prepend(error({'alert': 'alert-danger', 'message': text}));
        });
    }
}



function changeUrl(url, selector) {
    $.ajax({
        url: url,
        type: 'GET',
        data: null,
        cache: false,
        success: function (data) {

            $('div#app').fadeOut(400);
            setTimeout(function(){
                $('div#app').html(data).fadeIn(400);
            }, 400);

            if (selector.data('reload')) location.reload();
            if (typeof (history.pushState) != "undefined") {
                let obj = {Page: window.location.pathname, Url: url};
                history.pushState(obj, obj.Page, obj.Url);
            } else {
                window.location.href = url;
            }

        }
    });
}

