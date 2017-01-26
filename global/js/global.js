$(function() {
    $('.menubar').click(function(e) {
        if ($(e.target).is('li')) {
            if ($(e.target).closest('.menubar').hasClass('navigation')) {
                var nowBar = $(e.target).closest('.menubar');
                nowBar.children('ul').children('.selected').removeClass('selected');
                $(e.target).addClass('selected');
            }
            switch ($(e.target).attr('data-action')) {
                case "login":
                    $('#loginPopup').show();
                    $('#shader').show();
                    break;
                case "register":
                    $('#registerPopup').show();
                    $('#shader').show();
                    break;

            }
        }
    });

    $('#shader').click(function(e) {
        if (e.target.id == "shader") {
            $('#shader').hide();
            $('#shader').children().hide();
        }
    });

    $('.popup').click(function(e) {
        e.preventDefault();
    });

    $('form').submit(function(e) {
        e.preventDefault();
        console.log($(this).attr('action'), $(this).serialize());
    });
});