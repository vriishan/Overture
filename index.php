<?php

  include_once('C:\xampp\htdocs\Overture\includes\config.php');

  // session_destroy(); LOGOUT

  if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
  } else {
    // $urlEncode = urlencode("Location: \Overture\register.php");
    header("Location: register.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css"href="assets/css/style.css">
  </head>
  <body>
    <?php echo $userLoggedIn; ?>
    <div id="nowPlayingContainer">
      <div id="nowPlayingBar">
          <div id="nowPlayingLeft">
            <div class="content">

              <div class="albumLink">
                <img src="assets/images/download (1).png" alt="Artwork" class="albumArtwork">
              </div>

              <div class="trackInfo">
                <div class="trackName">
                  <span>Hey Brother</span>
                </div>
                <div class="artistName">
                  <span>Avicii</span>
                </div>
              </div>

            </div>
          </div>

          <div id="nowPlayingCenter">
              <div class="content playerControls">
                <div class="buttons">

                  <button class="controlButton Shuffle" title="Shuffle button">
                    <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                  </button>

                  <button class="controlButton Previous" title="Previous button">
                    <img src="assets/images/icons/previous.png" alt="Previous">
                  </button>

                  <button class="controlButton Play" title="Play button">
                    <img src="assets/images/icons/play.png" alt="Play">
                  </button>

                  <button class="controlButton Pause" title="Pause button">
                    <img src="assets/images/icons/pause.png" alt="Pause">
                  </button>

                  <button class="controlButton Next" title="Next button">
                    <img src="assets/images/icons/next.png" alt="Next">
                  </button>

                  <button class="controlButton Repeat" title="Repeat button">
                    <img src="assets/images/icons/repeat.png" alt="Repeat">
                  </button>
                </div>

                <div class="playBackBar">

                  <div class="progressTime Current">
                    <span>0.00</span>
                  </div>

                  <div class="progressBar">
                    <div class="progressBarBg">
                      <div class="progress">

                      </div>
                    <div class="progressBarSeek">

                    </div>
                    </div>
                  </div>

                  <div class="progressTime Remaining">
                    <span>0.00</span>
                  </div>

                </div>

              </div>
          </div>

          <div id="nowPlayingRight">

          </div>
      </div>
    </div>
  </body>
</html>