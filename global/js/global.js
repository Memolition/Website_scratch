$(function() {
    $('.menubar').click(function(e) {
        if ($(e.target).is('li')) {
            var nowBar = $(e.target).closest('.menubar');
            nowBar.children('ul').children('.selected').removeClass('selected');
            $(e.target).addClass('selected');
            console.log($(e.target).attr('data-action'));
        }
    });
});