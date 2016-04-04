/*
	For Edit This File Please Read Documentation
*/

var myPlaylist = [
	
	{
		
		oga:'canciones/johnny.mp3',
		title:'Missing You',
		artist:'Dejans',
		rating:5,
		buy:'#',
		price:'17',
		duration:'5:25',
		cover:'music/2.jpg'	
	},
	{
		
		oga:'music/1.wav',
		title:'Midnight In Tokyo',
		artist:'BlueFoxMusic',
		rating:4,
		buy:'#',
		price:'17',
		duration:'2:51',
		cover:'music/4.jpg'	
	},		
	{
		
		oga:'music/1.wav',
		title:'Walking On Horizon',
		artist:'Dejans',
		rating:5,
		buy:'#',
		price:'17',
		duration:'4:29',
		cover:'music/1.jpg'
	},
	{
		
		oga:'music/1.wav',
		title:'A Happy Carefree Day',
		artist:'JoshKramerMusic',
		rating:5,
		buy:'#',
		price:'13',
		duration:'2:45',
		cover:'music/6.jpg'	
	},
	{
		
		oga:'music/1.wav',
		title:'Through the Clouds',
		artist:'Dejans',
		rating:4,
		buy:'#',
		price:'17',
		duration:'5:56',
		cover:'music/2.jpg'	
	},
	{
		
		oga:'music/1.wav',
		title:'Live My Life',
		artist:'Metrolightmusic',
		rating:5,
		buy:'#',
		price:'17',
		duration:'2:31',
		cover:'music/3.jpg'	
	}
];
jQuery(document).ready(function ($) {
	$('.music-player-list').ttwMusicPlayer(myPlaylist, {
		currencySymbol:'$',
		buyText:'BUY',
		tracksToShow:3,
		ratingCallback:function(index, playlistItem, rating){
			//some logic to process the rating, perhaps through an ajax call
		},
		jPlayer:{
			swfPath:'http://www.jplayer.org/2.1.0/js'
		},
		autoPlay:true
	});
});