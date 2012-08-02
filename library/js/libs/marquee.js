jQuery(document).ready(function($) {

	var url = 'http://api.twitter.com/1/statuses/user_timeline/usopenofsurf.json?callback=?'; // make the url

	$.getJSON(url, function(tweets) { // get the tweets
		var text = "";
		$(tweets).each(function(i, tweet) {
			if (tweet.text.indexOf("@") != 0) {
				// doesn't start with @
				text += "USOpenOfSurf: "+tweet.text+" | ";
			}
		});
		$("marquee").html(text); // get the first tweet in the response and place it inside the div
		$('marquee').marquee('marquee-replacement');
	});

});