                  
                        
 $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
$( document ).ready(function() {
     $('.leftmenutrigger').on('click', function(e) {
     $('.side-nav').toggleClass("open");
     e.preventDefault();
    });
});




$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll >=50) {
		$(".header").addClass("myheader");
		} else {
		$(".header").removeClass("myheader");
		}
			});
                        
                        
                        
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});                      
                        
                           
                $(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('a[href="#top"]').fadeIn();
        } else {
            $('a[href="#top"]').fadeOut();
        }
    });

    $('a[href="#top"]').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});              
                        
                 
                 $( document ).ready(function() {
     $('.leftmenutrigger').on('click', function(e) {
     $('.side-nav').toggleClass("open");
     e.preventDefault();
    });
});
                          