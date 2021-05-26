// RESPONSIVE NAVIGATION
  $(document).ready(function () {

    $("#navbar").on("click", function() {
      $(".nveMenu").addClass("is-opened");
      $(".overlay").addClass("is-on");
    });

    $(".overlay").on("click", function() {
      $(this).removeClass("is-on");
      $(".nveMenu").removeClass("is-opened");
    });
  });
  // RESPONSIVE NAVIGATION

// A $( document ).ready() block.
$( document ).ready(function() {
   $("#slider1 .owl-nav").removeClass("disabled");
});


// fancy-box
$('[data-fancybox="gallery"]').fancybox({
	loop: true,
     buttons: [
    "zoom",
    //"share",
    "slideShow",
    "fullScreen",
    //"download",
    "thumbs",
    "close"
  ],
});

$('#slider1').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
      300:{
            items:1
        },
        // 600:{
        //     items:1
        // },
        800:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.brand-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.store-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        800:{
            items:1
        },
        900:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

$('.seller-slider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$('.product-slider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:3500,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
$('.aboutus-slider').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:7000,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

// aos-ANIMATION
$('[data-aos]').parent().addClass('hideOverflowOnMobile');


// checkout
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});


// product-detail
class ImageViewer {
  constructor(selector) {
    this.selector = selector;
    $(this.secondaryImages).click(() => this.setMainImage(event));
    $(this.mainImage).click(() => this.showLightbox(event));
    $(this.lightboxClose).click(() => this.hideLightbox(event));
  }
  
  get secondaryImageSelector() {
    return '.secondary-image';
  }
  
  get mainImageSelector() {
    return '.main-image';
  }
  
  get lightboxImageSelector() {
    return '.lightbox';
  }
  
  get lightboxClose() {
    return '.lightbox-controls-close';
  }
  
  get secondaryImages() {
    var secondaryImages = $(this.selector).find(this.secondaryImageSelector).find('img')
    return secondaryImages;
  }
  
  get mainImage() {
    var mainImage = $(this.selector).find(this.mainImageSelector);
    return mainImage;
  }
  
  get lightboxImage() {
    var lightboxImage = $(this.lightboxImageSelector);
    return lightboxImage;
  }
  
  setLightboxImage(event){
    var src = this.getEventSrc(event);
    this.setSrc(this.lightboxImage, src);
  }
  
  setMainImage(event){
    var src = this.getEventSrc(event);
    this.setSrc(this.mainImage, src);
  }
  
  getSrc(node){
    var image = $(node).find('img');
  }
  
  setSrc(node, src){
    var image = $(node).find('img')[0];
    image.src = src;
  }
  
  getEventSrc(event){
    return event.target.src;
  }
  
  showLightbox(event){
    this.setLightboxImage(event);
    $(this.lightboxImageSelector).addClass('show');
  }
  
  hideLightbox(){
    $(this.lightboxImageSelector).removeClass('show');
  }
}

new ImageViewer('.image-viewer');


$(".dropdown-tn").click(function(){
  $(".dropdown-content-tn").toggle();
});

// testimonial
jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              600: {
		                items: 1
		              },
		              800: {
		                items: 3
		              }
		            }
		        });
        	});

