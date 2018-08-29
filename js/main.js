// @codekit-prepend "plugins.js";

var hires;
var hireswidth;

function is_retina_device() {
  return window.devicePixelRatio > 1;
}
//
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//
//     var formTitle;
//
//     switch(event.detail.contactFormId) {
//         case '2659': formTitle = 'AGI Home Contact';
//             break;
//         case '2633': formTitle = 'AGI Home Display';
//             break;
//         case '3387': formTitle = 'AGI Home No Rank Question';
//             break;
//         case '3386': formTitle = 'AGI Home No Website Question';
//             break;
//         case '2628': formTitle = 'AGI Home ORM';
//             break;
//         case '2632': formTitle = 'AGI Home PPC';
//             break;
//         case '2634': formTitle = 'AGI Home Remarketing';
//             break;
//         case '2627': formTitle = 'AGI Home SEO';
//             break;
//         case '2630': formTitle = 'AGI Home SMM';
//             break;
//         case '2629': formTitle = 'AGI Home WEB';
//             break;
//         case '2631': formTitle = 'AGI Home YouTube';
//             break;
//         case '2710': formTitle = 'AGI Inside Contact';
//             break;
//         case '4': formTitle = 'Contact form 1';
//             break;
//         case '152': formTitle = 'Free Audit';
//             break;
//         case '1310': formTitle = 'Job Contact';
//              break;
//         case '1921': formTitle = 'LP Dental';
//             break;
//         case '1922': formTitle = 'LP Healthcare';
//             break;
//         case '1913': formTitle = 'LP Law Firm';
//             break;
//         default: formTitle = 'Contact Form';
//     }
//
//     dataLayer.push({'event': formTitle + ' ' + 'Form Submitted', 'cf7.formID': event.detail.contactFormId});
//     location = 'https://www.agims.com/thank-you/';
//
// }, false );

(function($) {
  $(document).ready(function() {
    var waypoints = $("#everyone-is-searching").waypoint(
      function(direction) {
        searchText();
        console.log("hit");
      },
      {
        offset: "75%"
      }
    );

    function searchText() {
      $("#everyone-is-searching").typed({
        strings: ["Everyone is searching...", "Can they find you?^2000"],
        typeSpeed: 75,
        backDelay: 1000
      });
    }
  });
})(jQuery);
