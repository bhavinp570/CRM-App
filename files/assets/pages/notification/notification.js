  'use strict';
//$(window).on('load',function(){
    //Welcome Message (not for login page)

    function formresponse(getresponse){
            if(getresponse === "1"){
                var nType = "success";
                var message = " Form submitted successfuly";
            }
            else{
                var nType = "danger";
                var message = " Error in submitting form please try again";
            }
            var nFrom = "bottom";
            var nAlign = "right";
            var nIcons = "fa fa-check";
            var nAnimIn = "animated fadeIn";
            var nAnimOut = "animated fadeOut";

            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);

            function notify(from, align, icon, type, animIn, animOut){
                $.growl({
                    icon: icon,
                    message: message
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 5000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="message"></span>' +
                    '</div>'
                });
            };
    };


// $(document).ready(function() {
   
//     /*--------------------------------------
//          Notifications & Dialogs
//      ---------------------------------------*/
//     /*
//      * Notifications
//      */
//     function notify(from, align, icon, type, animIn, animOut){
//         $.growl({
//             icon: icon,
//             title: ' Bootstrap Growl ',
//             message: 'Turning standard Bootstrap alerts into awesome notifications',
//             url: ''
//         },{
//             element: 'body',
//             type: type,
//             allow_dismiss: true,
//             placement: {
//                 from: from,
//                 align: align
//             },
//             offset: {
//                 x: 30,
//                 y: 30
//             },
//             spacing: 10,
//             z_index: 999999,
//             delay: 2500,
//             timer: 1000,
//             url_target: '_blank',
//             mouse_over: false,
//             animate: {
//                 enter: animIn,
//                 exit: animOut
//             },
//             icon_type: 'class',
//             template: '<div data-growl="container" class="alert" role="alert">' +
//             '<button type="button" class="close" data-growl="dismiss">' +
//             '<span aria-hidden="true">&times;</span>' +
//             '<span class="sr-only">Close</span>' +
//             '</button>' +
//             '<span data-growl="icon"></span>' +
//             '<span data-growl="title"></span>' +
//             '<span data-growl="message"></span>' +
//             '<a href="#" data-growl="url"></a>' +
//             '</div>'
//         });
//     };

//     $('.notifications .btn').on('click',function(e){
//         e.preventDefault();
//         var nFrom = $(this).attr('data-from');
//         var nAlign = $(this).attr('data-align');
//         var nIcons = $(this).attr('data-icon');
//         var nType = $(this).attr('data-type');
//         var nAnimIn = $(this).attr('data-animation-in');
//         var nAnimOut = $(this).attr('data-animation-out');

//         notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
//     });

// });