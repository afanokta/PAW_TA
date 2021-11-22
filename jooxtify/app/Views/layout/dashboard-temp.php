<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <title><?= $title; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="font/font/flaticon.css">
  <link rel="stylesheet" href="/css/dashboard.css">
</head>


<body>
  <div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
      <div class="simplebar-content" style="padding: 0px;">
        <a class="sidebar-brand" href="/dashboard/">
          <img src="/img/jooxtify-logo.svg" class="align-middle" width="200px"></img>
        </a>

        <ul class="navbar-nav align-self-stretch">
          <li class="">
            <a href="/dashboard" class="Pengguna nav-link text-left" id="Pengguna" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Pengguna
            </a>
          </li>
          <li class="">
            <a href="/dashboard/lagu" class="nav-link text-left" id="Lagu" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Lagu
            </a>
          </li>
          <li class="">
            <a href="/dashboard/genre" class="Genre nav-link text-left" id="Genre" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Genre
            </a>
          </li>
          <li class="">
            <a href="/dashboard/penyanyi" class="Genre nav-link text-left" id="Penyanyi" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Penyanyi
            </a>
          </li>
          <li class="">
            <a href="/dashboard/album" class="Genre nav-link text-left" id="Album" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon-bar-chart-1"></i> Album
            </a>
          </li>

          <li class="has-sub">
            <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse">
              <i class="flaticon-user"></i> Profile
            </a>
            <div class="collapse menu mega-dropdown" id="collapseExample2">
              <div class="dropmenu" aria-labelledby="navbarDropdown">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-lg-12 px-2">
                      <div class="submenu-box">
                        <ul class="list-unstyled m-0">
                          <li><a href="">PHP Frameworks</a></li>
                          <li><a href="">Laravel</a></li>
                          <li><a href=""> Codeigniter</a></li>
                          <li><a href="">Node.js</a></li>
                          <li><a href="">AngularJS</a></li>
                          <li><a href="">ReactJS</a></li>
                          <!-- <li><a href="">Asp.net</a></li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> setting
            </a>
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> invoice
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> Bank
            </a>
          </li>
          <li class="sidebar-header">
            tools and component
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> ui element
            </a>
          </li>

          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> form
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> table
            </a>
          </li>

          <li class="sidebar-header">
            tools and component
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-bar-chart-1"></i> chart
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button">
              <i class="flaticon-map"></i> map
            </a>
          </li>

        </ul>


      </div>


    </nav>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">


      <div id="content">

        <div class="container-fluid p-0 px-lg-0 px-md-0">
          <!-- Topbar -->

          <?= $this->include('layout/navbar'); ?>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <?= $this->renderSection('content'); ?>
          <!-- /#page-content-wrapper -->

        </div>
      </div>
    </div>
  </div>
  <!-- /#wrapper -->





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


  <script src="/js/dashboard-app.js"></script>






</body>

</html>