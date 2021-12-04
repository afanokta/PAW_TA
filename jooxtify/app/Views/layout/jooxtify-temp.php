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
        <a class="sidebar-brand" href="/">
          <img src="/img/jooxtify-logo.svg" class="align-middle" width="200px"></img>
        </a>

        <ul class="navbar-nav align-self-stretch">
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
              <i class="flaticon-bar-chart-1"></i> Profile
            </a>
          </li>
          <?php if (session()->get('status') == "ADMIN") : ?>
            <li class="">
              <a href="/dashboard/" class="Genre nav-link text-left" id="Album" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-bar-chart-1"></i> Dashboard
              </a>
            </li>
          <?php endif; ?>
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
          <?= $this->include('layout/bottom-bar'); ?>

        </div>
      </div>
    </div>
  </div>
  <!-- /#wrapper -->





  <!-- Optional JavaScript -->
  <script src="/ajax.js"></script>
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