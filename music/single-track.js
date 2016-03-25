/*
	For Edit This File Please Read Documentation
*/

var myPlaylist = [
	{

		oga:'https://dl.dropboxusercontent.com/s/vmovxfbu4ub28z4/Los%20Criptozoos%20-%20Rock%20de%20Combate.mp3',
		title:'Rock de combate',
		artist:'Los Criptozoos',
		rating:5,
		price:'free pay',
		duration:'2:36',
		cover:'music/1.jpg'	
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/y29gympip0zmnyn/Los%20Criptozoos%20-%20Por%20qu%C3%A9.mp3',
        title:'Por qué',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:57',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/hc2ixxfk0c6ga4h/Los%20Criptozoos%20-%20En%20alta%20mar.mp3',
        title:'En alta mar',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:32',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/ptok989e2j7hgnj/Los%20Criptozoos%20-%20La%20danza%20del%20cad%C3%A1ver.mp3',
        title:'La danza del cadaver',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'4:37',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/xv75gz5ef2j8la5/Los%20Criptozoos%20-%20Nada%20nuevo.mp3',
        title:'Nada nuevo',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:40',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/d18345c7l07z8bu/Los%20Criptozoos%20-%20Vitaminas%20pa%27%20mi%20coco.mp3',
        title:'Vitaminas pa mi coco',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:15',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/69c1hvsyifeixe6/Los%20Criptozoos%20-%20Xic%20dolent.mp3',
        title:'Xic dolent',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'4:02',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/u618wyz88lrx68e/Los%20Criptozoos%20-%20El%20clan%20de%20la%20muerte.mp3',
        title:'El clan de la muerte',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:21',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/dfaa3bg2gkxqvax/Los%20Criptozoos%20-%20Tormenta%20de%20fuego.mp3',
        title:'Tormenta de fuego',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:22',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/ui5hlgk0cygwl78/Los%20Criptozoos%20-%20Qui%C3%A9n%20se%20queja.mp3',
        title:'Quién se queja',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:11',
        cover:'music/1.jpg'
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/0chiitfa4xhrrpm/Los%20Criptozoos%20-%20Yo%20podr%C3%ADa.mp3',
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