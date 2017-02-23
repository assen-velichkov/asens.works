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
		//project btns
	$('#projects .keyboard-btn').click(function () {
		$('#projects .keyboard-btn').not(this).removeClass("btnClicked");
		$(this).addClass("btnClicked");
	});
	$('#projects .keyboard-btn').dblclick(function () {
		$('#projects .keyboard-btn').removeClass("btnClicked");
	});
		//logos
	$('a.logo img').click(function () {
		$('a.logo img').not(this).removeClass("logoClicked");
		$(this).addClass("logoClicked");
	});
	$('a.logo img').dblclick(function () {
		$('a.logo img').removeClass("logoClicked");
	});
	
	//projects keyboard
	$('#projects-keyboard>li').click(function () {
		var screen = $('#projects-screen'),
			currentProject = $(this).contents('ul').clone(),
			slideOne = currentProject.contents('li:nth-child(1), li:nth-child(2)'),
			slideTwo = currentProject.contents('li:nth-child(1), li:nth-child(3), li:nth-child(4), li:nth-child(5)'),
			slideThree = currentProject.contents('li:nth-child(6)'),
			slides = new Array(slideOne, slideTwo, slideThree),
			slideNumber = slides.length,
			slideCounter = 0,
			next = $('.next-btn'),
			prev = $('.prev-btn');
		currentProject.removeClass('hide');
		next.removeClass('hide');
		prev.removeClass('hide');
		screen.contents().replaceWith(slides[slideCounter]);
		
		next.click(function () {
			if (slideCounter === slideNumber - 1) {
				slideCounter = 0;
			} else {
				slideCounter++;
			}
			screen.contents().replaceWith(slides[slideCounter]);
		});
	
		prev.click(function () {
			if (slideCounter === 0) {
				slideCounter = slideNumber - 1;
			} else {
				slideCounter--;
			}
			screen.contents().replaceWith(slides[slideCounter]);
		});
	});
	
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


