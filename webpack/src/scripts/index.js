import 'animate.css/animate.min.css';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'aos/dist/aos.css';
import '../styles/index.scss';
import 'bootstrap';
import 'owl.carousel';
import 'jquery-validation';
import './ui.js';
import functions from './functions.js';
import AOS from "aos";
import mobileMenu from "mmenu-js";


class Main {
    constructor() {
        this.onDOMLoaded();
        this.onDocumentLoad();
        this.onResize();
        window.jQuery = $;
        window.$ = $;

    }

    onDocumentLoad() {
        window.addEventListener("load", (event) => {



        });
    }

    onDOMLoaded() {
        document.addEventListener("DOMContentLoaded", (event) => {

    
        });
    }

    onResize() { }

 

}

new Main();

function mobileMenuJs(){
    var window_Size = jQuery(window).width();
        if(window_Size < 1024){
        var n = jQuery("#navMenu");
         n.mmenu({
             extensions: ["position-back", "position-top"],
              "navbars": [
              {
                 "position": "top",
                 "content": [
                    "<div class='menu_top_header'><img src='https://dummyimage.com/200.png/09f/fff&text=Change+LOGO+index.js'/><i class='nav_close fa fa-close'></i></div>",
                 ]
              }
           ],
           onClick: { close: true },
        }, {
            screenReader: {
                aria: !1,
                text: {
                    closeSubmenu: "Back"
                    }
                }
            });
        var API = jQuery("#navMenu").data( "mmenu" );
        jQuery(document).on('click','.nav_close',function(){
          API.close();
        });

    }
}

function headerSpace(){
    $('body').css('padding-top',$('.siteHeader').outerHeight());
} 

$( function() {
    headerSpace();
    mobileMenuJs();
    AOS.init(); 
} );

$(window).on('resize',function(){
    headerSpace();
    mobileMenuJs();
});
