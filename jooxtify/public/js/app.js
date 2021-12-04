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

$('.items').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});