<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <title>Login Page</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="font/font/flaticon.css">
  <link rel="stylesheet" href="/css/login.css">
</head>

<body class="text-center">
  <div class="container">
  <?php
        if(!empty(session()->getFlashdata('error'))):
        ?>
        <div class="alert alert-warning" role="alert">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
        <?php endif; ?>
        
        <?php
        if(isset($errors)): foreach($errors as $e) :
        ?>
        <div class="alert alert-warning" role="alert">
            <?=$e?>
        </div>
        <?php endforeach; endif; ?>
    <main class="form-signin">
      <form action="<?=base_url('/register/reg')?>" method="post">
        <div class="logo my-4">
          <img src="/img/jooxtify-logo.svg" alt="" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="spectrum99" required>
          <label for="floatingPassword">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required minlength="8">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" required> Saya setuju dengan ketentuan yang berlaku
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
        <p>sudah punya akun? <a href="/">Login</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      </form>
    </main>
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