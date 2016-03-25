/*
	For Edit This File Please Read Documentation
*/

var myPlaylist = [
	{

		oga:'https://dl.dropboxusercontent.com/s/0x4nw6zgxco2nm4/12%20-%20Los%20Criptozoos%20-%20Como%20Una%20Estrella.mp3',
		title:'Como una estrella',
		artist:'Los Criptozoos',
		rating:5,
		price:'free pay',
		duration:'2:36',
		cover:'music/1.jpg'	
    },

    {

        oga:'https://dl.dropboxusercontent.com/s/e6vtiwwv7osvswl/johnny.mp3',
        title:'Johnny',
        artist:'Los Criptozoos',
        rating:5,
        price:'19.99',
        duration:'3:57',
        cover:'music/1.jpg'
    },


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