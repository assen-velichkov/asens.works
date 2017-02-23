window.onload = function () {
	
    //smooth scrollling on all active anchors
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '')
					=== this.pathname.replace(/^\//, '')
					&& location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
		
	//sanwitch menu
	(function () {
		"use strict";
		var header = $('#header');
		var toggles = document.querySelectorAll(".c-hamburger");
		for (var i = toggles.length - 1; i >= 0; i--) {
			var toggle = toggles[i];
			toggleHandler(toggle);
		};
		function toggleHandler(toggle) {
			toggle.addEventListener( "click", function(e) {
				e.preventDefault();
				(this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");	
				($("#header").hasClass("high") === true) ? $("#header").removeClass("high") : $("#header").addClass("high");
				($("#nav").hasClass("show") === true) ? $("#nav").removeClass("show") : $("#nav").addClass("show");
			});
		}
	})();
	
	//back top button 
	var offset = 300,
		duration = 300;
	$(window).scroll(function () {
		if ($(this).scrollTop() > offset) {
			$('.backTop').fadeIn(duration);
		} else {
			$('.backTop').fadeOut(duration);
		}
	});
	$('.backTop').click(function (event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, duration);
		return false;
	});
	
	    //display current year
    $(function () {
        var now = new Date(),
            theYear = now.getYear();
        if (theYear < 1900) {
            theYear = theYear + 1900;
        }
        $(".currentYear").append(theYear);
    });
};


