<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Brand</title>

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
  <body>


    <!-- Header -->
    <header>
      <div>
        <div class="container">
          <div class="row d-flex justify-content-center">
            <!-- Brand -->
            <div class="text-center mt-lg-4 mt-md-2">
              <h1 class="text-primary mt-3">
                <?php session_start();?>
                <?php if(isset($_SESSION['username'])) { ?>
                  <span class="text-muted">
                    <?php echo "Welcome To, "; ?>
                  </span>
                <?php } ?>
                DIGITAL ARTS NETWORK
                <?php if(isset($_SESSION['username'])) { ?>
                  <span class="text-muted">
                    <?php echo $_SESSION['username'] ?>
                    <?php unset($_SESSION['username'])?>
                  </span>
                <?php } ?>  
              </h1>
              <span class="text-info">Connecting People <i class="fas fa-users text-primary"></i>, Connecting World <i class="fas fa-globe text-primary"></i></span><br/>
              <!-- Social links -->
              <div class="lead mt-2">
                <a class="m-2" target="webbrand" href="https://github.com/YunusEmreAlps" style="color:#bd5d38;"><i class="fab fa-github" id="github"></i></a>|
                <a class="m-2" target="webbrand" href="https://instagram.com/tbwa"><i class="fab fa-instagram" id="instagram"></i></a>|
                <a class="m-2" target="webbrand" href="https://www.linkedin.com/in/yunus-emre-alpu-5b1496151/?challengeId=AQFxXDdmsoOE4gAAAXHA_9I-BdRXH5CRU_K5vO2VZOUk960ozPUOlM3g5KIxPyIBq_Q3--LZB2BIQ38BDXrf2jF2YAkgDZ6NFw&submissionId=198ca16a-2fff-0916-217f-05f8cf442660"><i class="fab fa-linkedin-in" id="linkedin"></i></a>|
                <a class="m-2" target="webbrand" href="https://medium.com/@yunus192alpu"><i class="fab fa-medium-m" id="medium"></i></a>|
                <a class="m-2" target="webbrand" href="https://twitter.com/tbwadan"><i class="fab fa-twitter" id="twitter"></i></a>
              </div>
              <!-- Social links -->
            </div>
            <!-- Brand -->
          </div>
        </div>
      </div>
    </header>
    <!-- Header -->
  </body>
</html>