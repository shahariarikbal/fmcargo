// fixed header
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 100) {
        $('body').addClass('fixed-header');
    } else {
        $('body').removeClass('fixed-header');
    }
});

// Navbar Toggle Button For Mini Device
$('.nav-toggle-btn').click(function() {
    $('.nav-items-wrap').toggleClass('menu-visible');
    $('body').toggleClass('body-overflow');
});

$(document).ready(function() {
    // Nav submenu Responsive
    if ($(window).width() <= 1024) {
        $('.nav-item-submenu').addClass('collapse');
    } else {
        $('.nav-item-submenu').removeClass('collapse');
    }

    $(window).resize(function() {
        if ($(window).width() <= 1024) {
            $('.nav-item-submenu').addClass('collapse');
        } else {
            $('.nav-item-submenu').removeClass('collapse');
        }
    });

    // Nav submenu collapse Js
    $(window).resize(function() {
        if ($(window).width() <= 1024) {
            $('.item-has-submenu .nav-item-link').on('click', function(e) {
                e.preventDefault();
                $(this).closest('.nav-list-item').find('.collapse').collapse('toggle');
            });
        }
    });
    if ($(window).width() <= 1024) {
        $('.item-has-submenu .nav-item-link').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.nav-list-item').find('.collapse').collapse('toggle');
        });
    }

});

$('.slider-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,
    animateOut: 'slideOutUp',
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
});

//Testimonial Slider
$('.testimonial-items-wrap').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
});


// Cart show hide btn
$(document).ready(function() {
    $(".cart-show-hide-btn").click(function() {
        $(".shopping-cart").toggleClass("visible");
        $(".add-cart-outer").toggleClass("visible");
        $("main").toggleClass("cart-visible");
    });
});

//Product Count
 $(".qtyminus").on("click",function(){
    var now = $(".qty").val();
    if ($.isNumeric(now)){
        if (parseInt(now) -1 > 0)
        { now--;}
        $(".qty").val(now);
    }
})            
$(".qtyplus").on("click",function(){
    var now = $(".qty").val();
    if ($.isNumeric(now)){
        if(parseInt(now) < 10 ){
            $(".qty").val(parseInt(now)+1);
        }
        
    }
});


$(document).ready(function() {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage.owlCarousel({
    items: 1,
    slideSpeed: 2000,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
  }).on("changed.owl.carousel", syncPosition);

  thumbs.on("initialized.owl.carousel", function() {
    thumbs.find(".owl-item").eq(0).addClass("current");
  })
    .owlCarousel({
    items: 4,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100
  }).on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs.find(".owl-item").removeClass("current").eq(current).addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs.find(".owl-item.active").first().index();
    var end = thumbs.find(".owl-item.active").last().index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});