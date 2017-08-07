
var players = document.getElementsByClassName('yaam-api');


if(players.length){
	var tag = document.createElement('script');
		tag.src = "//www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

function onYouTubeIframeAPIReady() {
  console.log('youtube iframe loaded');

  yaam_setupPlayers(0);
  
  /*var player = new YT.Player('yt0', {
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });*/
}

function yaam_setupPlayers(index){
	var iframe = players[index];
			iframe.id = 'yamm-api-'+index;
	var player = new YT.Player(iframe.id, {events: {'onReady': yaam_onPlayerReady}}
																	   );

	players[index]= {iframe:iframe,
									 player:player
									 		};

}

function yaam_onPlayerReady(e) {
  //e.target.playVideo();
  //e.target.mute();
  var params = yaam_util_strToParam(e.target.c.src);
  
  if(params.mute){
  	e.target.mute();
  }

}

function yaam_util_strToParam(q){
	var q = q.split("?")[1],
  		sec = q.split('&'),
  		params ={},
  		value,pair;

  for (value of sec) {
  	pair = value.split("=");
  	params[pair[0]] = decodeURIComponent(pair[1]);
	}

	return params;


}

function onPlayerStateChange() {
  console.log("my state changed");
}

