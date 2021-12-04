<nav class="navbar navbar-expand navbar-light my-navbar ">

  <!-- Sidebar Toggle (Topbar) -->
  <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
    <span></span>
    <span></span>
    <span></span>
  </div>


  <!-- Topbar Search -->
  <form class="d-none d-sm-inline-block form-inline navbar-search" action="/search" method="get">
    <div class="input-group">
      <input type="text" class="form-control bg-light " name="input" id="search" placeholder="Search for..." aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto mr-4">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown  d-sm-none">

      <!-- Dropdown - Messages -->
      <div class="dropdown-menu dropdown-menu-right p-3">
        <!-- <script>
          function showResult(str) {
            if (str.length == 0) {
              document.getElementById("livesearch").innerHTML = "";
              document.getElementById("livesearch").style.border = "0px";
              return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").innerHTML = "<div class='col-6 col-md-4 col-lg-3 d-flex flex-column' id='card'><div class='card p-4'>
        <h2>Penyanyi</h2>
        <h4>Judul lagu</h4>
        <p>Hello World</p>
      </div>
    </div>
                ";
                document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
              }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
          }
        </script> -->
        <form class="form-inline mr-auto w-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." onkeyup="showResult(this.value)">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Jooxtify</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="/logout" class="btn btn-danger text-light mx-4">Logout</a>
    </li>

  </ul>

</nav>