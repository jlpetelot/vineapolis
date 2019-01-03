$(document).ready(function () {
    //alert($(window).width());
	var menuinfo = $('.menuinfo');
    var menumodal = $('.menumodal');

    if ($(window).width() < 1300) {
        $(menuinfo).hide();
        $(menuinfo).css('display', 'none');
        $(menumodal).hide();
    }

    $(window).scroll(function() {
        if (scrollY() > 100 ) {
            $(menuinfo).fadeOut(200);
            $(menumodal).fadeOut(200)
            $(menuinfo).hide();
            $(menumodal).hide();
        }
        else {
            $(menuinfo).fadeIn();
            $(menumodal).fadeIn();
        }
    });
		
	var cartes = $('#cartes');
	var marque1 = $('#marque1');
	var marque2 = $('#marque2');
	var marque3 = $('#marque3');
    var marque3 = $('#marque4');
    var marque3 = $('#marque5');
    var marque3 = $('#marque6');
    var marque3 = $('#marque7');
	var marque2marque1 = $('#marque2marque1');
    var marque2marque2 = $('#marque2marque2');
    var marque2marque2 = $('#marque2marque3');
	
	$("a[href=#cartes]").click(function(e) {
		e.preventDefault();		
		$('html,body').animate({scrollTop: $("#cartes").offset().top - 40}, 400);
	});
	
	$("#menuderoulant a[href=#marque1]").click(function(e) {
		e.preventDefault();
		$('html,body').animate({scrollTop: $("#marque1").offset().top}, 400);
	});

	$("#menuderoulant a[href=#marque2]").click(function(e) {
		e.preventDefault();
		$('html,body').animate({scrollTop: $("#marque2").offset().top}, 400);
	});

	$("#menuderoulant a[href=#marque3]").click(function(e) {
		e.preventDefault();
		$('html,body').animate({scrollTop: $("#marque3").offset().top}, 400);
	});
    $("#menuderoulant a[href=#marque4]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque4").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque5]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque5").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque6]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque6").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque7]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque7").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque2marque1]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque2marque1").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque2marque2]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque2marque2").offset().top}, 400);
    });
    $("#menuderoulant a[href=#marque2marque3]").click(function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: $("#marque2marque3").offset().top}, 400);
    });
	$("#menuderoulant a[href=#sousmarque1]").click(function(e) {
		e.preventDefault();		
		$('html,body').animate({scrollTop: $("#sousmarque1").offset().top}, 400);
	});
	
});


/*-----------------------------------------------------------------------------------
ON CACULE LA POSITION DU HAUT DU NAVIGATEUR
-----------------------------------------------------------------------------------*/

function scrollY() {
    // On initie le top à 0 au départ.
    scrOfY = 0;
    if (typeof(window.pageYOffset) == 'number') {
        // Pour Netscape
        scrOfY = window.pageYOffset;
    }
    else if (document.body && (document.body.scrollTop)) {
        // Pour le Dom
        scrOfY = document.body.scrollTop;
    }
    else if (document.documentElement && (document.documentElement.scrollTop)) {
        // Pour IE6
        scrOfY = document.documentElement.scrollTop;
    }
    return scrOfY;
};
