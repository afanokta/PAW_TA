const x = document.getElementById("ancpMusic");
    x.volume = 0.2;
    let played = false;

    function playMusic() {
      console.log(played);
      if (played) {
        x.pause();
        document.getElementById("playingIcon").src = "assets/img/play.svg";
        played = false;
      } else {
        played = true;
        document.getElementById("playingIcon").src = "assets/img/pause.svg";
        x.play();
      }
    }