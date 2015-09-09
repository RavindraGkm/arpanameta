function CustomJS() {
    this.URL =  "http://www.google.co.in";
}

CustomJS.prototype = {
    init: function() {
        this.pageLoadInitializations();
        this.eventInitializations();
    },
    pageLoadInitializations: function() {
        $('.date-picker').datepicker({
            autoclose: true,
            format:'dd-mm-yyyy'
        });
    },
    eventInitializations: function() {
        var self = this;
        console.log(self.URL);
        $(".get-content").on('click',function() {
            $.ajax({
                url: "ajax.php",
                type: "GET",
                dataType: "JSON",
                data : {
                    user_age : $("#user_age").val()
                },
                success: function (data) {
                    $("#hello").html("Hello "+data.name +" your age is : "+data.age +" and server has a msg for you : "+data.msg);
                }
            });
        });
    }
}
var object = new CustomJS();
object.init();