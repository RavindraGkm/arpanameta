var EmailCheck = function() {
    var  isEmailExists = function () {

        $("#user_email").blur(function () {
            var self = $(this);
            $.ajax({
                url: "ajax.php",
                type: "GET",
                dataType: "JSON",
                data : {
                    user_email: self.val()
                },
                success: function (data) {
                    if(data.email_exists) {
                        $("#alert_email_exists").removeClass('hidden');
                        window.location = "anc.php";
                        self.focus();
                    }
                    else {
                        $("#alert_email_exists").addClass('hidden');
                    }
                }
            });
        });
    }

    var getAllResults = function() {
        $("#get_all_results").click(function () {

            $.ajax({
                url: "ajax.php",
                type: "GET",
                dataType: "JSON",
                data : {
                    get_all_results: 1
                },
                success: function (data) {
                    $(".table-student-body").find('.add-row').remove();
                    for(var i=0;i<data.length;i++) {
                        var template_clone = $(".template").clone();
                        template_clone.removeClass('template').removeClass('hidden').addClass('add-row');
                        template_clone.find('td').eq(0).html(data[i].serial);
                        template_clone.find('td').eq(1).html(data[i].fname);
                        $(".table-student-body").append(template_clone);
                    }
                }
            });
        });
    }
    return {
        init : function() {
            isEmailExists();
            getAllResults();
        }
    }
}();