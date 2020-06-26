<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/new-age.min.css" rel="stylesheet">
  </head>
  <body id="page-top" class="bg-light">
    <!-- Section -->
    <section class="masthead1">
      <div class="container">
        <!-- Grid row -->
        <div class="row d-flex justify-content-center mt-5">
          <!-- Grid column-->
          <div class="col-md-10">
            <div class="border border-dark bg-white">
              <!-- Header -->
              <div class="section-heading text-center mt-5">
                <img alt="avatar" src="../img/signup.png" width="100" height="100" />
                <h2>Sign Up</h2>
                <span class="text-muted">Digital Arts Network</span>
                <hr/>
              </div>
              <!-- Header -->
              <div class="mt-3 ml-5 mb-5 mr-5">
                <!-- Error message -->
                <?php if(isset($_SESSION['signup_control_alert_message'])) {?>
                  <div class="alert alert-<?php echo $_SESSION['signup_control_alert_message']['type']?>"> 
                    <?php echo $_SESSION['signup_control_alert_message']['message']?>
                  </div>
                  <?php unset($_SESSION['signup_control_alert_message'])?>
                <?php } ?>
                <!-- Error message -->
                <form action="signupcontrol.php" method="POST" autocomplete="off">
                  <!-- Username -->
                  <div class="form-group mt-3 mb-3">
                    <label for="username-label">Username</label>
                    <input class="form-control" type="text" maxlength="10" name="username" required/>
                  <div>
                  <!-- Username -->
                  <!-- Password -->
                  <div class="form-group mt-3 mb-3">
                    <label for="password-label">Password</label>
                    <input class="form-control mb-3" type="password" maxlength="10" name="password" id="password" oninput="this.value = this.value.toUpperCase()" required/>
                    <label for="show-password-label"><input type="checkbox" onclick="passvisibility()"> Show password</label>
                  <div>
                  <!-- Password -->
                  <button type="submit" class="btn btn-block btn-success mt-3 mb-3" style="border-radius:5px;" value="Submit" name="submit">Sign Up</button>
                  <button type="reset" class="btn btn-block btn-danger mt-3 mb-3"  style="border-radius:5px;" value="Reset">Reset</button>
                </form>
              </div>
            </div>
          </div>
          <!-- Grid column-->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section -->
    <!-- Show Password -->
    <script>
      function passvisibility(){
        var clck = document.getElementById('password');
        if(clck.type === "password")
          clck.type = "text";
        else
          clck.type = "password";
      }
    </script>            
  </body>
</html>