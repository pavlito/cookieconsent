 $(document).ready(function() {


     sticky_consent();


     $('[data-toggle="tooltip"]').tooltip();
     /*
      *
      * Cookie Consent Sticky Preview
      *
      */
     function sticky_consent() {

         var section = $(".section-consent-configurator");
         var outer = $(".demo_zone_outer");
         var pick = $(".demo_zone_pick");
         var pickPadding = pick.innerWidth() - pick.width();
         var demo = $(".demo_zone");
         var limiter_top = $(".limiter-top");
         var limiter_bottom = $(".limiter-bottom");
         var wind = $(window);

         // Check if element exsist on page to init the script
         if (section.length) {

             demo.width(pick.width());

             $(window).on('resize', sticky_preview);
             sticky_preview();
             $(window).scroll(function() {
                 sticky_preview();
             });

             function sticky_preview() {
                 demo.width(pick.width() - pickPadding);
                 if (wind.scrollTop() > limiter_top.offset().top) {

                     demo.css({
                         "position": "fixed",
                         "top": 0
                     });
                     if (wind.scrollTop() < limiter_bottom.offset().top - demo.outerHeight()) {} else {
                         demo.css({
                             "position": "static",
                         });

                         outer.css({
                             "display": "flex",
                             "align-items": "flex-end"
                         });
                     }
                 } else {
                     demo.css({
                         "position": "static",
                     });

                     outer.css({
                         "display": "block",
                     });
                 }
             }
         }


     }

 });