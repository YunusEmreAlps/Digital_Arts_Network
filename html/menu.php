<?php 
  $linkfile = fopen("../linkcounter.txt", "a+") or die("Unable to open file");
  $link_row = array();
  $all_pages = array();
  $all_views = array();

  while(!feof($linkfile))
  {
    $line = fgets($linkfile);
    $link_row = explode(" ", $line);
    array_push($all_pages, $link_row[0]);
    array_push($all_views, intval($link_row[1])); 
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Menu</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/new-age.min.css" rel="stylesheet">
  </head>
  <body>
    <img class="img-fluid w-100 h-25" src="../img/asdf.jpg"/>
    <!-- Sidebar Menu -->
    <div class="vertical-nav">
      <!-- Header Part -->
      <div class="py-4 px-3 mb-4">
        <div class="media d-flex align-items-center">
          <div class="media-body">
            <h3 class="m-0 text-primary">DIGITAL ARTS NETWORK</h3>
            <p class="font-weight-light text-muted mb-0 leads">New Generation <span class="text-info">Social Media</span></p>
          </div>
        </div>
      </div>
      <!-- Header Part -->
      <!-- Menu Part --> 
      <p class="text-primary font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
      <ul class="nav flex-column mb-0">
        <!-- Homepage -->
        <li class="nav-item">
          <a type="button" target="webpage"  href="page.html" class="nav-link text-dark font-italic">
            <i class="fa fa-th-large mr-3 fa-fw" style="color:#bd5d38;"></i>
            <span class="font-weight-light text-muted mb-0 leads" id="home">Homepage</span>  
            <span class="badge badge-primary badge-pill" id="homepagevalue">
            <?php 
              echo $all_views[0];
            ?>
            </span>  
          </a>
        </li>
        <!-- Homepage -->
        <!-- About -->
        <li class="nav-item">
          <a type="button" target="webpage"  href="about.html" class="nav-link text-dark font-italic" id="about">
            <i class="fa fa-briefcase mr-3 fa-fw" style="color:#bd5d38;"></i>
            <span class="font-weight-light text-muted mb-0 leads">About</span>
            <span class="badge badge-primary badge-pill" id="aboutvalue">
            <?php 
              echo $all_views[1];
            ?>
            </span>  
          </a>
        </li>
        <!-- About -->
        <!-- Research -->
        <li class="nav-item">
          <a type="button" target="webpage"  href="services.html"  class="nav-link text-dark font-italic" id="services">
            <i class="fas fa-search mr-3 fa-fw" style="color:#bd5d38;"></i>
            <span class="font-weight-light text-muted mb-0 leads">Services</span>
            <span class="badge badge-primary badge-pill" id="servicevalue">
            <?php 
              echo $all_views[2];
            ?>
            </span>    
          </a>
        </li>
        <!-- Research -->
        <!-- Contact -->
        <li class="nav-item">
          <a type="button" target="webpage" href="contact.html" class="nav-link text-dark font-italic" id="contact">
            <i class="fa fa-paper-plane mr-3 fa-fw" style="color:#bd5d38;"></i>
            <span class="font-weight-light text-muted leads">Contact</span>  
            <span class="badge badge-primary badge-pill" id="contactvalue">
            <?php 
              echo $all_views[3];
            ?>
            </span>  
          </a>
        </li>
        <!-- Contact -->
        <!-- Background Color -->
        <li class="nav-item">
          <span class="nav-link text-dark font-italic">
            <i class="fas fa-palette mr-3 fa-fw" style="color:#bd5d38;"></i>
            <select id="colorPicker" class="text-muted bg-transparent" onchange="bodyColor()">
              <option class="nav-link text-dark" value="#f8f9fa" default>Light Mode</option>
              <option class="nav-link text-dark" value="#18191a">Dark Mode</option>
            </select>
          </span>
        </li>
        <!-- Background Color -->
      </ul>
      <!-- Menu Part --> 
    </div>
    <!-- Sidebar Menu -->
      <!-- Changeable background and navigation bar -->
  <script>
    // Global      
    var clicker = 0;
    
    function bodyColor(){
      var bgclr = document.getElementById("colorPicker").value;
      var f =  parent.frames["webpage"];
      f.document.body.style.backgroundColor=bgclr; 
      parent.frames ["webbrand"].document.body.style.backgroundColor=bgclr;
      parent.frames ["weblogo"].document.body.style.backgroundColor=bgclr;
      parent.frames ["webmenu"].document.body.style.backgroundColor=bgclr;  
    }

    $('#home').click(function() {
    $('#homepagevalue').html(function(i, val) { return val*1+1 });});

    $('#about').click(function() {
    $('#aboutvalue').html(function(i, val) { return val*1+1 });});

    $('#services').click(function() {
    $('#servicevalue').html(function(i, val) { return val*1+1 });});

    $('#contact').click(function() {
    $('#contactvalue').html(function(i, val) { return val*1+1 });});
  </script>
  </body>
</html>