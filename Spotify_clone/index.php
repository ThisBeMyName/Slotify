<?php 
	include("includes/config.php");
	
	//session_destroy();
	
	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else {
		header("Location: register.php");
	}

?>

<html>
<head>
  <meta charset="UTF-8">
  
  <title>Welcome to Slotify!</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <div id="mainContainer">
	  <div id="topContainer">
		  <div id="navBarContainer">
			  <nav class="navBar">
				  
				  <!-- Logo -->
				  <a href="index.php" class="logo">
					  <img src="assets/images/icons/fox.png">
				  </a>
				  
				  <!-- Nav items -->
				  <div class="group">
				    
				    <div class="navItem">
				 	   <a href="search.php" class="navItemLink">Search <img src="assets/images/icons/search.png" class="icon" alt="Search"></a>
				    </div>
				  </div> <!-- End group -->  
				    
				  <div class="group">
				    <div class="navItem">
				 	   <a href="browse.php" class="navItemLink">Browse </a>
				    </div>
				    
				    <div class="navItem">
				 	   <a href="yourMusic.php" class="navItemLink">Your Music</a>
				    </div>
				    
				    <div class="navItem">
				 	   <a href="profile.php" class="navItemLink">Mike Stewart</a>
				    </div>
				    
				  </div> <!-- End group -->
				</nav>
		  </div> <!-- End navBarContainer -->
		  
	  	<div id="nowPlayingBarContainer">
			  <div id="nowPlayingBar">
				  
				  <div id="nowPlayingLeft">
					  <div class="content">
						  <span class="albumLink">
						  	<img src="http://clipart-library.com/img/2008830.jpg" class="albumArtwork">
						  </span>
					 
							<div class="trackInfo">
								<span class="trackName">
									<span>Happy Birthday</span>
								</span>
								
								<span class="artistName">
									<span>Mike Stewart</span>
								</span>
								
							</div>
					  </div>
				  </div>
				  
				  <div id="nowPlayingCenter">
					  <div class="content playerControls">
						  <div class="buttons">
							  <button class="controlButton shuffle" title="Shuffle button">
							  	<img src="assets/images/icons/shuffle.png" alt="Shuffle">
							  </button>
							 
							  <button class="controlButton previousSong" title="Previous button">
							  	<img src="assets/images/icons/previous_song.png" alt="Previous">
							  </button>
							  
							  <button class="controlButton play" title="Play button">
							  	<img src="assets/images/icons/play.png" alt="Play">
							  </button>
							 
							  <button class="controlButton pause" title="Pause button" style="display: none;">
							  	<img src="assets/images/icons/pause.png" alt="Pause">
							  </button>
							 
							  <button class="controlButton nextSong" title="Next button">
							  	<img src="assets/images/icons/next_song.png" alt="Next">
							  </button>
							  
							  <button class="controlButton repeat" title="Repeat button">
							  	<img src="assets/images/icons/repeat.png" alt="Repeat">
							  </button>
						  </div>
						  <div class="playbackBar">
							  <span class="progressTime current">0.00</span>
							  <div class="progressBar">
								  <div class="progressBarBg">
									  <div class="progress"></div>
								  </div>
							  </div>
							  <span class="progressTime remaining">0.00</span>
						  </div>  
					  </div>
				  </div>
				  
				  <div id="nowPlayingRight">
				  	<div class="volumeBar">
					  	<button class="controlButton volume" title="Volume button">
					  		<img src="assets/images/icons/volume.png" alt="Volume">
					  	</button>
					  	<div class="progressBar">
							  <div class="progressBarBg">
							   <div class="progress"></div>
							  </div>
							</div>
				  	</div>
				  </div>
				   
			  </div> <!-- End nowPlayingBar -->
	  	</div> <!–– End nowPlayingBarContainer -->
	  </div> <!-- End topContainer -->
  </div>	<!–– End mainContainer -->
</body>
</html>
