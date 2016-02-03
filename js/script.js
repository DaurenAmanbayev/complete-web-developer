$(window).ready(function() {
    $('#fat').click(function() {
        $(this).css("border", "1px solid purple");
    });

    $('#queryThis').click(function() {
        $(this).html("Would you believe me if I told you that I'm a Div posing as a button?");
    });

    $('[type=text]').focus(function() {
        $(this).css("border", "3px solid red");
        $(this).replaceWith("<p>What's love got to do with it?</p>");
    });

    $('#quest').focus(function() {
        $(this).css('display', 'block');
    });

    $('#quest').keypress(function(ev) {
        if(ev.keyCode === 13) {
            $(this).val(ev.keyCode);
        }
    });

    $('#hidePara').click(function () {
        $('#slideToHide').slideUp(2000, function() {
            alert('Noticed how it went like the wind?');
        });
    });

});




