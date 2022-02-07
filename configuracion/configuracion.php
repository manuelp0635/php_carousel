<?php

/*
 * imgDefSrc 
 * Es la ruta de la imagen de la primera fotografia del Carousel, que aparecerá por defecto.
 **/
 
$data = '{
    "myCarousel" : {
		"dataTarget" : "myCarousel",
		"dataSlideTo" : "1",
		"directorio" : "./images/fotografias/",
		"classCarousel" : "carousel slide",
		"dataRide" : "carousel"
	},
    "item" : {
		"divClassItem" : "item",
		"imgStyle" : "height:300px; margin:auto;",
		"divCaption" : "carousel-caption",
		"divCaptionP" : "LA is always so much fun!"	
	},
    "carouselIndicators" : {
		"olClass" : "carousel-indicators",
		"liClass" : "active"
	},
	"wrapperForSlides" : {
		"divCarousel" : "carousel-inner",
		"divClassItem" : "item active",
		"imgDefSrc" : "./images/fotografias/Polish_20211018_184613107.jpg",
		"imgAlt" : "Los Angeles",
		"imgStyle" : "height:300px; margin:auto;",
		"divCaption" : "carousel-caption",
		"divCaptionH3" : "Los Angeles",
		"divCaptionP" : "LA is always so much fun!"
	},
	"dataSlide" : [
		{
			"aClass" : "left carousel-control",
			"aHref" : "myCarousel",
			"dataSlide" : "prev",
			"spanClass" : "glyphicon glyphicon-chevron-left",
			"spanClassOnly" : "sr-only",
			"spanInner" : "Previous"
		},
		{
			"aClass" : "right carousel-control",
			"aHref" : "myCarousel",
			"dataSlide" : "next",
			"spanClass" : "glyphicon glyphicon-chevron-right",
			"spanClassOnly" : "sr-only",
			"spanInner" : "Next"
		}	
	]
}';

$data_b = '{
    "myCarousel" : {
		"dataTarget" : "myCarouselb",
		"dataSlideTo" : "1",
		"directorio" : "./images/fotografias/",
		"classCarousel" : "carousel slide",
		"dataRide" : "carousel"
	},
    "item" : {
		"divClassItem" : "item",
		"imgStyle" : "height:200px; margin:auto;",
		"divCaption" : "carousel-caption",
		"divCaptionP" : ""	
	},
    "carouselIndicators" : {
		"olClass" : "carousel-indicators",
		"liClass" : "active"
	},
	"wrapperForSlides" : {
		"divCarousel" : "carousel-inner",
		"divClassItem" : "item active",
		"imgDefSrc" : "./images/fotografias/Polish_20211018_184613107.jpg",
		"imgAlt" : "Los Angeles",
		"imgStyle" : "height:200px; margin:auto;",
		"divCaption" : "carousel-caption",
		"divCaptionH3" : "",
		"divCaptionP" : ""
	},
	"dataSlide" : [
		{
			"aClass" : "left carousel-control",
			"aHref" : "myCarouselb",
			"dataSlide" : "prev",
			"spanClass" : "glyphicon glyphicon-chevron-left",
			"spanClassOnly" : "sr-only",
			"spanInner" : "Previous"
		},
		{
			"aClass" : "right carousel-control",
			"aHref" : "myCarouselb",
			"dataSlide" : "next",
			"spanClass" : "glyphicon glyphicon-chevron-right",
			"spanClassOnly" : "sr-only",
			"spanInner" : "Next"
		}	
	]
}';
