<!DOCTYPE html>
<html>
<title>Pi Admin Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/images/pilogo.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Pi Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>  
            <?php
            $url = 'http://192.168.0.221:8091/admin/';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?>
        </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>PiHole</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
        <h3>  
            <?php
            $url = 'http://192.168.0.221:8090';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?>
        </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Portainer</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
        <h3>  
            <?php
            $url = 'http://192.168.0.221:8092';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?>
        </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>File Server</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        <h3>  
            <?php
            $url = 'http://192.168.0.221:32400/manage';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?>
        </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Plex</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Scripts</h5>
        <?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/myapp/test.sh");
}
?>
        <a href="?run=true" class="w3-button w3-black">click me2</a>
        <a href="https://www.w3schools.com" class="w3-button w3-black">test</a>
        <a href="https://www.w3schools.com" class="w3-button w3-black">Link Button</a>
        <p></p>
        <a href="https://www.w3schools.com" class="w3-button w3-black">Link Button</a>
        <a href="https://www.w3schools.com" class="w3-button w3-black">Link Button</a>
        <a href="https://www.w3schools.com" class="w3-button w3-black">Link Button</a>
      </div>
      <div class="w3-twothird">
        <h5>Websites</h5>
        <table class="w3-table w3-striped w3-white">

            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>lucinda.branconet.com</td>
            <td><i>  <?php
            $url = 'http://lucinda.branconet.com';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>santos.branconet.com</td>
            <td><i>  <?php
            $url = 'http://santos.branconet.com';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>Proxy</td>
            <td><i><?php
            $url = 'http://192.168.0.221:80';
            
            if(@file_get_contents($url)){
                
                echo "UP";
                
            } else {
                
                echo "DOWN";
                
            }
            
            ?></i></td>
          <tr>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>UP Time</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>Website Visits</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
