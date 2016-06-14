$("a.language").click(function(){
	thisurl=window.location.href;
	thisurl=thisurl.substr(thisurl.lastIndexOf("/")+1,thisurl.length);
	window.location.href="../Hindi/"+thisurl;
});

//    DSC quote fade-in fade out
var listTicker = function(options) {
    var defaults = {
        list: [],
        startIndex: 0,
        interval: 3 * 1000,
    };
    var options = $.extend(defaults, options);
    var listTickerInner = function(index) {
        if (options.list.length == 0) return;
        if (!index || index < 0 || index > options.list.length) index =
            0;
        var value = '"' + options.list[index] + '" <span>- DSC</span>';
        options.trickerPanel.fadeOut(function() {
            $(this).html(value).fadeIn();
        });
        var nextIndex = (index + 1) % options.list.length;
        setTimeout(function() {
            listTickerInner(nextIndex);
        }, options.interval);
    };
    if ($(window).width() > 767) {
        listTickerInner(options.startIndex);
    }
}
var textlist = new Array('Our deeds decide our future',
    'Make your own path, rather than just following a known path!',
    'One must view life as a continuous learning experience.',
    'Do not kill any idea due to lack of money',
    'Successful people do one thing at a time.',
    'Whatever you are doing today, try doing it in a new way.',
    'Our deeds decide our future', 'Creativity is a result of rebellion',
    'Fear is what keeps dragging a person back',
    'CSR is hypocritical if it is not solving a real issue or problem which exists in society',
    'If you want to trust others, you have to be trustworthy yourself',
    'Achieve success honestly and ethically and you will be happy in life',
    'If one wants to succeed in something, one must keep trying and not lose focus',
    'You attain failure in life, when you accept defeat',
    'The journey of a thousand miles starts with a single step');
$(function() {
    listTicker({
        list: textlist,
        startIndex: 0,
        trickerPanel: $('#dscQuote'),
        interval: 5 * 1000, //5 seconds interval
    });
});

$(document).ready(function() {
    //Video Youtube Sizing
    /*
	$(window).resize(function() {
        adjustsize();
    });

    function adjustsize() {
        w = $("#vdo").width();
        h = $("#vdo").height();
        vratio = h / w;
        if($(window).width()>767){
		targetw = $('.tray').width();
		}
		else{
		targetw = $('.tray').width()-20;
		$(".tray").css({'margin':'-10px auto 30px','width':targetw,'height':targetw*vratio});
		}
        console.log("w" + w + " - " + "h" + h + " - " + "vratio" +
            vratio);
        console.log("w" + targetw + " - " + "h" + (targetw * vratio));
        $("#vdo").css({
            'width': targetw,
            'height': targetw * vratio
        });
		window.location.href="#vdo";
    }
	*/
		
		
    /* Carousel */
	var sliderpos=1;
    function adjustcarousel() {
        if ($(window).width() > 767) {
            $("#interests .carousel .row div.img-wrapper").css(
                'width', '50%');
            $("#interests .carousel .row div").css('height', $(
                "#interests .carousel div .img-wrapper").width());
            $("#interests .carousel .row div.img-wrapper").css(
                'height', $("#interests .carousel .row div").height()
            );
            $("#interests .carousel .row div.img-wrapper img").css(
                'width', '100%');
        } else {
            $("#interests .carousel .row div.img-wrapper").css(
                'width', '100%');
            $("#interests .carousel .row div.img-wrapper").css(
                'height', $(
                    "#interests .carousel .row div.img-wrapper"
                ).width());
            $("#interests .carousel .row div").css('height', $(
                "#interests .carousel div .img-wrapper").width());
        }
    }
	
    $(".carousel a.left").click(function() {
        sliderpos=sliderpos-1;
		if(sliderpos<1){
			sliderpos=1;
		}
		moveslider(sliderpos);
		//$(".slider-wrapper").css('margin-left', '0');
    });
    $(".carousel a.right").click(function() {
       sliderpos=sliderpos+1;
		if(sliderpos>3){
			sliderpos=3;	
		}
		moveslider(sliderpos);
		//$(".slider-wrapper").css('margin-left', '-1' * $(".slider").width());
	});
	
	function moveslider(n){
		console.log("Load Slide " + n);
		if(n==1){ $(".slider-wrapper").css('margin-left', '0'); }
		if(n==2){ $(".slider-wrapper").css('margin-left', '-1' * $(".slider").width()); }
		if(n==3){ $(".slider-wrapper").css('margin-left', '-1.5' * $(".slider").width()); }
	}
	
    setTimeout(function() {
        if ($(window).width() > 767) {
            $("#interests .carousel .slider , #interests .carousel .arrows").css('opacity', '1');
        } else {
            $("#interests .carousel .slider").css('opacity','1');
        }
    }, 500);
    setTimeout(function() {
        $("#interests .carousel .row div").css('height', $(
            "#interests .carousel div img").height());
        $("#interests .carousel .row div.img-wrapper").css(
            'width', $("#interests .carousel .row div").height()
        );
        $("#interests .carousel .row div.img-wrapper img").css(
            'width', '100%');
    }, 100);
    $(window).resize(function() {
        adjustcarousel();
    });
    window.addEventListener("orientationchange", function() {
        adjustcarousel();
    });
    //social more
    $(".social-wall-more").click(function() {
        $(".social-wall").addClass("active");
        $(".social-wall-more").fadeOut();
    });
    
	
	//Countdown date & Time For next event
   	 /*$('#getting-started').countdown('2016/06/30', function(event) {
        $(this).html(event.strftime(
            '<div>%w</div> <div class="days">%d</div> <div class="hours">%H</div> <div class="mins">%M</div><div class="secs">%S</div>'
        ));
    });*/
});

$(document).click(function() {
    $("#navbar").removeClass("in");
});


$(".additional-info-btn.readmore").click(function() {
   var b=($(this).attr("data-link"));
   $("#"+b).css({'height':'100%'});
   $(this).fadeOut();
});


// Scroll Position Check
$(window).scroll(function(){
	console.log(($(document).height()-$("footer").height()));
	if(
		($(window).scrollTop()>100) && 
		($(window).scrollTop()<($(document).height()-($("footer").height()+$(window).height()+120)))
	  )
	{
		$("a.scrolldown").fadeIn();
	}
	else{
		$("a.scrolldown").fadeOut();
	}
});


// Smooth Scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
