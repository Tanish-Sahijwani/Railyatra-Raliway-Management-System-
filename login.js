$(document).ready(function() {
    $('.error').hide();
    $('#submit').click(function() {
        $('.error').hide();
        var email = $('#email').val();
        var password = $('#password').val();



        if (email == '') {
            $('#email').next().show();
            $("#email").addClass("errorInput");
            return false;
        }

        if (IsEmail(email) == false) {
            $('#invalid_email').show();
            return false;
        }
        if (password == '') {
            $("#email").removeClass("errorInput");
            $('#password').next().show();
            $("#password").addClass("errorInput");
            return false;
        }
        $.post("", $("#myform").serialize(), function(response) {
            $('#myform').fadeOut('slow', function() {
                $('#correct').html(response);
                $('#correct').fadeIn('slow');
                $("#password").removeClass("errorInput");
            });
        });
        return false;
    });
});

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}