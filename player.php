<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>modern music player</title>
	<link rel="stylesheet" href="css/player.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

	<div class="main">
		
		<!-- top bar -->
		<div class="top_bar">
			<button onclick="sidebar()"><i class='bx bx-chevron-left'></i></button>
			
			<button onclick="open_p()"><i class='bx bx-menu-alt-left' ></i></button>
		</div>

		<div class="playing_part">
			<div class="img">
				<img src="img/artist-img/A1.jpg" alt="img">
			</div>
		</div>

		<!-- control part -->
		<div class="control_part">
			<div class="song_title">
				<p>song title</p>
				<p>artist name</p>
			</div>

			<div class="control_buttons">
				<div class="range_slider">
					<input type="range" min="0" max="100" id="slider" value="0">
					<p>3:00</p>
				</div>

				<div class="main_btns">
                <button id="previous"><i class='bx bx-rewind' ></i></button>
					<button id="previous"><i class='bx bx-skip-previous' ></i></button>
					<button id="play_btn"><i class='bx bx-play' ></i></button>
					<button id="previous"><i class='bx bx-skip-next' ></i></button>
                    <button id="previous"><i class='bx bx-fast-forward' ></i></button>
				</div>
			</div>
		</div>

		<!-- playlist songs -->
		<div class="playlist">
			<div class="p_song">
				<p id="p_title">song name</p>
				<p id="p_artist">artist name</p>
				<button><i class='bx bx-play' ></i></button>
			</div>

			<div class="p_song ">
				<p id="p_title">song name</p>
				<p id="p_artist">artist name</p>
				<button><i class='bx bx-play' ></i></button>
			</div>

			<div class="p_song">
				<p id="p_title">song name</p>
				<p id="p_artist">artist name</p>
				<button><i class='bx bx-play' ></i></button>
			</div>

			<div class="p_song">
				<p id="p_title">song name</p>
				<p id="p_artist">artist name</p>
				<button><i class='bx bx-play' ></i></button>
			</div>
		</div>
	</div>

   <!--  javascript part -->
	<script>
		let playlist = document.querySelector('.playlist');
		let options = document.querySelector('.options');

		function open_p(){
			playlist.classList.toggle('active');
		}

		function sidebar(){
			options.classList.toggle('active2');
		}
	</script>
	
</body>
</html>