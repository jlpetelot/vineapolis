/*
 * Copyright Madinici 2015
 * Author: Jean-Luc Petelot
*/

/* ================================= DÉBUT DES 1ERS SCRIPTS ============================= */
/* Document javascript, jQuery */
$(document).ready(function() 
{

	/*-----------------------------------------------------------------------------------*/
    /*  PRELOADER POUR CONTENT
    /*-----------------------------------------------------------------------------------*/
    jQuery(window).load(function () {
        //Preloader
        $('#preloader').css({'display': 'block'});
        $('#preloader img').css({'display': 'block'});
        setTimeout("jQuery('.preloader_hide').animate({'opacity' : '1'},500)",500);
        setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",500);
    });
	/*-----------------------------------------------------------------------------------*/
    /*  PRELOADER POUR CONTENT
    /*-----------------------------------------------------------------------------------*/

	/* =================================== LE MENU ===================================== */
	// Le logo est caché
	$(".logo-box").css("display", "none");

	// Pour ouvrir le menu, fonction
	$('.show-menu').click(function()
	{	
		// On ramène le menu à 0
		$("#customnavbar").clearQueue().animate({
			"margin-left" : '0px'
		});
		// On fait apparaître le logo avec un callback delay (retard) de 400 ms
		$(".logo-box").delay(400).fadeIn(50);
		// On fait disparaître les 3 petits onglets
		$(".show-menu").fadeOut(500);
	});

	// Pour fermer le menu, fonction
	$('.hide-menu').click(function()
	{	
		// On ramène le menu à -52px
		$("#customnavbar").clearQueue().animate({
			"margin-left" : '-252px'
		});
		// On fait apparaître les 3 petits onglets avec un callback delay (retard) 500 ms
		$(".show-menu").delay(500).show(100);
		// On fait disparaître le logo
		$(".logo-box").delay(500).hide(100);
	});
	/* ===================================== FIN MENU ================================= */
	
	/* =============================== LES ROLL-OVER DES IMAGES ========================= */
	/* On définit les constantes d'opacités */
	const OUT_OPACITY = 1.0;
	const OVER_OPACITY = 0.1;

	$(function() {
	    $("div#rolloverannonces img").css("opacity", OUT_OPACITY)
	        .hover(
	            function () {
	                $(this).animate({opacity:OVER_OPACITY},200);
	            },
	            function () {
	                $(this).animate({opacity:OUT_OPACITY},200);
	            }
	        );
	    });
	/* =================================== FIN ROLL-OVER IMAGES =============================== */

	/* =========================== LE BOUTON RENVOI HAUT DE PAGE ============================== */
	// Le retour de page est en opacité de 0.5
	$("#hautdepage").css("opacity", "0.5");

	// On anime les mouseover et mouseout
	$('#hautdepage').mouseover(function(){
		$(this).animate({opacity: 1}, 100);
	});
	$('#hautdepage').mouseout(function(){
		$(this).animate({opacity: 0.5}, 100);
	});

	// Au clic on s'anime pour remonter
	$('#hautdepage').click(function(){
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	/* ========================== FIN BOUTON RENVOI HAUT DE PAGE =============================== */

	/* =========================== LE TAB DE LA PAGE INDEX ============================== */
	
	$('.paragraphe li').click(function () {

		var text = $(this).children('p');

		if (text.is(':hidden')) {
			text.slideDown('500');
			$(this).children('span').html('&larr;&nbsp;minimiser');
			$('.paragraphe span').css({
				'margin-bottom': '10px'
			});
		}
		else {
			text.slideUp('300');
			$(this).children('span').html('découvrez la suite&nbsp;&rarr;');
			$('.paragraphe span').css({
				'margin-top': '-10px',
				'margin-bottom': '0'
			});
		}
	});
	
	/* ============================ FIN TAB DE LA PAGE INDEX ================================= */
	
});


/* ================================= DÉBUT DES 2NDS SCRIPTS ============================= */
$(document).ready(function(){

	/* =================================== LE TOOLTIP ===================================== */
    $('[data-toggle="tooltip"]').tooltip();
    /* =================================== FIN TOOLTIP ===================================== */
});


/* =========================== LE TOP DE LA PAGE TOUS LES VINS ============================== */
$(document).ready(function() {

	$(window).scroll(function() {
		if($(window).scrollTop() >=100) $('#flechetouslesvins').fadeIn('slow');
		else $('#flechetouslesvins').fadeOut('fast');
	});

	$('#flechetouslesvins').click(function() {
		$('html, body').animate({scrollTop:0},500);
	});

});
/* ============================= FIN TOP PAGE TOUS LES VINS ================================== */


/* Fin document javascript, jQuery */