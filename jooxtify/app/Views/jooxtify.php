<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="assets/slider/slick-1.8.1/slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="assets/slider/slick-1.8.1/slick-1.8.1/slick/slick-theme.css" />

  <link rel="stylesheet" href="css/style-main.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



  <title>Home Page</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/jooxtify/burger bar.svg" width="50" height="auto" alt="">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="index4.html"><img src="img/jooxtify/Playlist.svg" width="auto" height="20" alt=""></a></li>
          <li><a class="dropdown-item" href="#"><img src="img/jooxtify/Discover.svg" width="auto" height="20" alt=""></a></li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">
        <img src="img/jooxtify-logo.svg" alt="" width="150">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        
        <form class="d-flex">
          <form action="" method="post">
            <div class="form-group search-nav">
              <span class="fa fa-search form-control-icon"></span>
              <input type="text" class="form-control search-bar" placeholder="">
            </div>
          </form>
        </form>
      </div>
      <a class="profile-pic" href="index5.html">
        <img src="img/profile_picture.svg" width="50" alt="profile_picture">
      </a>
    </div>
  </nav>

  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/jooxtify/banner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="banner" src="img/jooxtify/UNLOCK YOUR CREATIVITY.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="banner" src="img/jooxtify/LISTEN TO YOUR OWN MUSIC.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="playlist">
      <div class="title-section"><a href="#">Recommended For You ></a></div>
      <div class="items">
        <div><img src="img/jooxtify/rekomen-1.svg "></div>
        <div><img src="img/jooxtify/rekomen-2.svg"></div>
        <div><img src="img/jooxtify/rekomen-3.svg"></div>
        <div><img src="img/jooxtify/rekomen-4.svg"></div>
        <div><img src="img/jooxtify/rekomen-4.svg"></div>
        <div><img src="img/jooxtify/rekomen-3.svg"></div>
        <div><img src="img/jooxtify/rekomen-2.svg"></div>

      </div>

    </div>

    <div class="now-playing">
      <div class="row">
        <div class="col-lg-6 d-flex">
          <div class="icon-playing">
            <img src="img/jooxtify/logo_ancp.png" alt="" srcset="">
          </div>
          <div class="music-desc my-auto ms-4">
            <div class="title-music">Rise Up</div>
            <div class="artist-music">ANCP</div>
          </div>
        </div>
        <div class="col-lg-6 my-auto">
          <div class="bar-playing"></div>
          <div class="icon-item  d-flex flex-wrap justify-content-center gap-5">
            <img src="img/jooxtify/loop.svg" alt="" srcset="">
            <img src="img/jooxtify/before.svg" alt="" srcset="">
            <button onclick="playMusic()" type="button"><img src="img/jooxtify/play.svg" alt="" id="playingIcon" srcset="" onclick="playMusic"></button>
            <img src="img/jooxtify/next.svg" alt="" srcset="">
            <img src="img/jooxtify/shuffle.svg" alt="" srcset="">
          </div>
        </div>
      </div>
    </div>

  </div>

  <audio id="ancpMusic">
    <source src="assets/music/ancpRiseUp.ogg" type="audio/ogg">
    <source src="assets/music/ancpRiseUp.mp3" type="audio/mpeg">
  </audio>



  <!-- Optional JavaScript; choose one of the two! -->
  <script>

  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <scrip src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip>
  <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></scrip>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/slider/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>

  <script src="assets/Javascript/index.js"></script>
</body>

</html>