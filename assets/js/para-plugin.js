( function ( $ ) {

    $.redify = function() {
        $("p").css('color','#F00');
    }

    $.fn.greenify = function() {
        this.css('color','#0F0');
        return this;
    }

    $.fn.flashPara = function() {

        var container = this;
        this.find('p').eq(0).addClass('active');

        setInterval(function() {
            var $active = container.find('p.active');
            var next_para = $active.next();
            if(next_para.length==0) {
                next_para = container.find('p').eq(0);
            }
            $active.removeClass('active');
            next_para.addClass('active');
        } ,2000);

    }

    $.fn.flashPara2 = function(options) {

        //var time_interval = options.time_interval;
        var settings = $.extend({color: "#4f87f8", time_interval: 2000}, options);

        var container = this;
        this.find('p').eq(0).addClass('active');
        this.find('p').eq(0).css('color',settings.color);
        setInterval(function() {
            var $active = container.find('p.active');
            var next_para = $active.next();
            if(next_para.length==0) {
                next_para = container.find('p').eq(0);
            }
            $active.removeClass('active');
            next_para.addClass('active');
        } ,settings.time_interval);

    }

} ( jQuery ) );