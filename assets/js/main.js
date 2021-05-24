!(function($) {
  "use strict";



	$(document).ready(function() {
	 	// console.log("hello");
	});
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
 	
  var swiper = new Swiper('.swiper_testimonial', {
      // spaceBetween: 30,
      slidesPerView: 1,
      spaceBetween: 60,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

 	var swiper = new Swiper('.swiper_home_banner_notused', {
      // spaceBetween: 30,
      slidesPerView: 1,
      spaceBetween: 60,
      loop: false,
      observer: true,
      observeParents: true,
      // autoplay: {
      //     delay: 2500,
      //     disableOnInteraction: false,
      //   },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });

  //TOGGLING NESTED ul
$(".drop-down .selected a").click(function() {
    $(".drop-down .options ul").toggle();
});

//SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
$(".drop-down .options ul li a").click(function() {
    var text = $(this).html();
    $(".drop-down .selected a span").html(text);
    $(".drop-down .options ul").hide();
}); 


//HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("drop-down"))
        $(".drop-down .options ul").hide();
});



 

            $('#oneS1').click(function (e) {
                e.preventDefault();
                $("#slectedAmt").html("₹ 6,000");
                document.getElementById("PrcA").value = 6000;
                // $("#PrcA").value = 6000;
                $("#first_name").filter(':visible').focus();

            });

            $('#oneS2').click(function (e) {
                e.preventDefault()
                $("#slectedAmt").html("₹ 12,000");
                document.getElementById("PrcA").value = 12000;
                $("#first_name").filter(':visible').focus();
            });

            $('#oneS3').click(function (e) {
                e.preventDefault()
                $("#slectedAmt").html("₹ 18,000");
                document.getElementById("PrcA").value = 18000;
                $("#first_name").filter(':visible').focus();
            });

            $('#oneS4').click(function (e) {
                e.preventDefault()
                $("#slectedAmt").html("₹ 36,000");
                document.getElementById("PrcA").value = 36000;
                $("#first_name").filter(':visible').focus();
            });

            $('#oneS5').click(function (e) {
                e.preventDefault()
                $("#slectedAmt").html("₹ 72,000");
                document.getElementById("PrcA").value = 72000;
                $("#first_name").filter(':visible').focus();
            });

            $('#oneS6').click(function (e) {
                e.preventDefault()
                $("#slectedAmt").html("₹ 1,44,000");
                document.getElementById("PrcA").value = 144000;
                $("#first_name").filter(':visible').focus();
            });

            $('#oneS8').click(function () {
                // e.preventDefault()
                var amt = $('#amt').val();
                $("#slectedAmt").html("₹" + amt);
                document.getElementById("PrcA").value = amt;
                $("#first_name").filter(':visible').focus();
            });


             var swiper = new Swiper('.swiper_donation', {
              // spaceBetween: 30,
              slidesPerView: 1,
              spaceBetween: 60,
              loop: true,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });




})(jQuery);