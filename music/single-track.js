/*
	For Edit This File Please Read Documentation
*/

var myPlaylist = [
	{

		oga:'https://dl.dropboxusercontent.com/s/ojcjs4j2nmtwmrm/Los%20Criptozoos%20-%20Rock%20de%20Combate.mp3',
		title:'Rock de combate',
		artist:'Los Criptozoos',
		rating:5,
		price:'free pay',
		duration:'2:36',
		cover:'music/1.jpg'	
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/xjjnhcr9llqfmgt/Los%20Criptozoos%20-%20Por%20qu%C3%A9.mp3',
        title:'Por qué',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:57',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/z63e6jpxcl48xhq/Los%20Criptozoos%20-%20En%20alta%20mar.mp3',
        title:'En alta mar',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:32',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/zby8l5fvpbt6ruh/Los%20Criptozoos%20-%20La%20danza%20del%20cad%C3%A1ver.mp3',
        title:'La danza del cadaver',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'4:37',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/vdl89oe81f8n4qj/Los%20Criptozoos%20-%20Nada%20nuevo.mp3',
        title:'Nada nuevo',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:40',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/qaryja1v8njvn9t/Los%20Criptozoos%20-%20Vitaminas%20pa%27%20mi%20coco.mp3',
        title:'Vitaminas pa mi coco',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:15',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/wp6c8kaead5v8ou/Los%20Criptozoos%20-%20Xic%20dolent.mp3',
        title:'Xic dolent',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'4:02',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/r7hhjv5mxvg4itq/Los%20Criptozoos%20-%20El%20clan%20de%20la%20muerte.mp3',
        title:'El clan de la muerte',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:21',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/k5lruc0r7zaw5ya/Los%20Criptozoos%20-%20Tormenta%20de%20fuego.mp3',
        title:'Tormenta de fuego',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:22',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/2jfifqnbq9x5jrr/Los%20Criptozoos%20-%20Qui%C3%A9n%20se%20queja.mp3',
        title:'Quién se queja',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:11',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/iiuk2wgmuzy1zky/Los%20Criptozoos%20-%20Yo%20podr%C3%ADa.mp3',
        title:'Yo podría',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:54',
        cover:'music/1.jpg'
    }



];

jQuery(document).ready(function ($) {
	$('.music-single').ttwMusicPlayer(myPlaylist, {
		currencySymbol:'$',
		buyText:'BUY',
		tracksToShow:3,
		ratingCallback:function(index, playlistItem, rating){
			//some logic to process the rating, perhaps through an ajax call
		},
		jPlayer:{
			swfPath:'../../../www.jplayer.org/2.1.0/js'
		},
		autoPlay:true
	});
});
