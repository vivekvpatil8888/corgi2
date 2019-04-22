<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
<div class='video-container'>
	<div id="player"></div>
</div>
<script>
	// Load the IFrame Player API code asynchronously.
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	// Replace the 'ytplayer' element with an <iframe> and
	// YouTube player after the API code downloads.
	var player;
	function onYouTubePlayerAPIReady() {
		player = new YT.Player('player', {
		height: '100%',
		width: '100%',
		videoId: 'XB2g7-HgE_g',
		playerVars: {
			autoplay: 1,
			loop: 1,
			controls: 0,
			rel: 0,
			showinfo: 0,
			playlist: 'XB2g7-HgE_g'
		},
		events: {
			'onReady': onPlayerReady,
		}
	});
}
function onPlayerReady(event) {
	event.target.mute();
}
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
