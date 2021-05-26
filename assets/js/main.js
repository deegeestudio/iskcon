!(function($) {
  "use strict";



	
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
       breakpoints: {
          640: { 
            spaceBetween: 20,
          },
          768: { 
            spaceBetween: 40,
          },
          1024: { 
            spaceBetween: 60,
          },
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


function checkForInput(element) {
  // element is passed to the function ^
  
  const $label = $(element).siblings('label');

  if ($(element).val().length > 0) {
    $label.addClass('input-has-value');
  } else {
    $label.removeClass('input-has-value');
  } 
}


$(document).ready(function() {
    // console.log("hello");

  // The lines below are executed on page load
  $('.form-control').each(function() {
    checkForInput(this); 

  });

  // The lines below (inside) are executed on change & keyup
  $('.form-control').on('change keyup', function() {
    checkForInput(this); 

  });

  $('.form-control').change(function() { 
      checkForInput(this); 
  });

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


  function donation_selected(elm, donation_amt) {
    // e.preventDefault();
    $(".radio_container").removeClass("active");
    $(elm).addClass("active");
    $("#slectedAmt").html("₹ "+donation_amt);
    document.getElementById("PrcA").value = donation_amt;

  }

  function custom_donation_selected(elm) {
    // e.preventDefault();
    $(".radio_container").removeClass("active");
    
    var donation_amt = $('input[name = custom_donate_amt]').val();
    if (isNaN(donation_amt) || donation_amt=="") {
      alert("Please enter amount in numbers.");
      donation_amt = 0;
      $(elm).children("input[type='radio']").prop('checked', false);
    }else{
      $(elm).addClass("active");
    }
    $("#slectedAmt").html("₹ "+donation_amt);
    document.getElementById("PrcA").value = donation_amt;
  }