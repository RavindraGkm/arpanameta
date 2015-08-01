var Login = function() {

    var handleLoginValidation = function() {

        $('.login-form').validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "&nbsp;(Plz enter user name)"
                },
                password: {
                    required: "Password is required."
                }
            },
            errorPlacement: function(error, element) {
                $( element ).closest( "form" ).find( "label[for='" + element.attr( "id" ) + "']" ).append( error );
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }

    return {
        init : function() {
            handleLoginValidation();
        }
    }

}();