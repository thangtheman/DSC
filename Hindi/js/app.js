$("a.language").click(function(){
	thisurl=window.location.href;
	thisurl=thisurl.substr(thisurl.lastIndexOf("/")+1,thisurl.length);
	window.location.href="../"+thisurl;
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
var textlist = new Array('हमारे कर्मों हमारे भविष्य के बारे में फैसला',
    'अपना रास्ता बनाते हैं, के बजाय सिर्फ एक ज्ञात मार्ग का अनुसरण!',
    'अपना रास्ता बनाते हैं, के बजाय सिर्फ एक ज्ञात मार्ग का अनुसरण',
    'पैसे की कमी के कारण किसी भी विचार को मत मारो',
    'सफल लोगों को एक समय में एक काम करो।',
    'आप आज जो कुछ भी कर रहे हैं, एक नए तरीके से यह कोशिश कर रही है।',
    'हमारे कर्मों का फैसला हमारे भविष्य ',' रचनात्मकता विद्रोह का परिणाम है',
    'डर है क्या एक व्यक्ति को वापस खींचकर रहता है',
    'सीएसआर पाखंडी अगर यह एक वास्तविक मुद्दे या समस्या है जो समाज में मौजूद है हल नहीं किया गया है',
    'आप दूसरों पर विश्वास करना चाहते हैं, तो आप अपने आप को विश्वसनीय होना करने के लिए है',
    'सफलता के लिए ईमानदारी और नैतिकता की दृष्टि प्राप्त करने और आप जीवन में खुशी होगी',
    'एक कुछ में सफल होने के लिए करना चाहता है, तो एक कोशिश कर रखना चाहिए और ध्यान नहीं खोना',
    'आप जीवन में असफलता प्राप्त है, जब तुम हार स्वीकार',
    'एक हजार मील की यात्रा एक भी कदम के साथ शुरू होता है');
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
	
	
    var traystatus = 0;
    var vurl = "1";
    var bvurl = "2";
	var t="";
    $(".media-listing h4").click(function() {
		t=this;
        vurl = "https://www.youtube.com/embed/" + ($(this).attr(
            "data-src"));
			console.log(vurl + " // "+ bvurl + " // " + traystatus);
        if ((vurl != bvurl) && (traystatus == 0)) {
            opentray(this);
            bvurl = vurl;
			console.log("Open Tray");
        } else if((vurl != bvurl) && (traystatus == 1)){
			removetray(this);
			setTimeout(function(){
				console.log("Close Tray and Then Open Tray");
				opentray(t);	
			},500);
		}
		else{
            removetray(this);
            bvurl = "2";
			console.log("Close Tray");
        }
    });
	
	
	/* Open Video Tray */
    function opentray(n) {
        setTimeout(function() {
            $(".tray").css({
				'width': $(".tray").width()-30,
                'height': $(".tray").width()*(0.75),
                'margin': '30px 0'
            });
        }, 100);
        if ($(window).width() > 767) {
            $(n).parent().parent().parent().after(
                "<div class='tray container'> <iframe id='vdo' width='780' height='585' src=" +
                vurl +
                " frameborder='0' allowfullscreen></iframe> <div>"
            );
        } else {
            $(n).parent().parent().after(
                "<div class='tray container'> <iframe id='vdo' width='780' height='585' src=" +
                vurl +
                "  frameborder='0' allowfullscreen></iframe> <div>"
            );
        }
        setTimeout(function() {
            adjustsize();
        }, 500);
        traystatus = 1;
    }

	/* Close Video Tray */
    function removetray() {
            $(".tray").css({
                'height': '0px',
                'margin': '0'
            });
            setTimeout(function() {
                $(".tray").remove();
            }, 500);
            traystatus = 0;
    }
		
		
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
            $(
                "#interests .carousel .slider , #interests .carousel .arrows"
            ).css('opacity', '1');
        } else {
            $("#interests .carousel .slider").css('opacity',
                '1');
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
    /*$('#getting-started').countdown('2016/05/16', function(event) {
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

