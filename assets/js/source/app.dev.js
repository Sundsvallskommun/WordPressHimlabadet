(function ($) {
    "use strict";

    /**
     * Resize facebook
     */
    var a = null;
    $(window).resize(function () {
        if (a !== null) {
            clearTimeout(a);
        }

        a = setTimeout(function () {
            FB.XFBML.parse();
        }, 1000)
    });


    $( function ()
    {


    var i = 1; // Total number of images
    var n = 1; // the foot number (1-5)
    var m = 1; // sequence indicator
        var max_number_of_steps = 5;
    var totalnumberofimg = 27;

        var foot_array = [];
        for (var iterator = 0; iterator < max_number_of_steps; iterator++) {
            foot_array.push(null);
        };

        $('.animation__single[data-id=1]').addClass('animation__single--active');
        foot_array[0] = $('.animation__single[data-id=1]');

        var totalnumberofimg = 27;
        setTimeout(function () {
            var myAnim = setInterval(function () {
                foot_array.forEach(function (item, index) {
                    if(item != null){

                        var next_index= parseInt($(item).attr('data-id')) +1;
                        var next_sequence= parseInt($(item).attr('data-sequence')) +1;
                        $(item).removeClass('animation__single--active');
                        $(item).removeClass('animation__single--'+$(item).attr('data-sequence'));
                        $(item).addClass('animation__single--'+next_sequence);
                        $(item).attr('data-sequence', next_sequence)
                        $('.animation__single[data-id='+next_index+']').addClass('animation__single--active');

                        if($(item).attr('data-id') ==  totalnumberofimg-14 && max_number_of_steps >= $(item).attr('data-sequence') ){
                            $('.animation__single[data-id=1]').addClass('animation__single--active');

                            foot_array[index+1]=$('.animation__single[data-id=1]');

                        }
                        foot_array[index] = $('.animation__single[data-id='+next_index+']');

                    };

                });
                if (i == totalnumberofimg * 5 - 3) {
                    clearInterval(myAnim);
                }
                i++;
            }, 52);
        }, 1500);

    } );



    /**
     * End resize facebook
     */

})(jQuery);
