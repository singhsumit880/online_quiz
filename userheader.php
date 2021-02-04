<?php
error_reporting(0);
if ( !isset($_SESSION) ) session_start();


if(isset($_SESSION["username"])){
    $data = '<a href="logout.php">Logout</a>';
      $name='Hello '.$_SESSION["username"]; 
    
	} else {
    $data = '<a href="index.php">Login</a>';
    $name='';
	}


   
    
?>
</head>

<body>
  <div class="navbg">
    <nav class="navbar navbar-expand-lg head" style="">
  <a class="navbar-brand" href="index.php"><big>ONLINE</big><small> TEST</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
      <a class="nav-link"  href="#">Our Services</a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="#">Contact Us</a>
        </li>
        <li class="nav-item ">
      <a class="nav-link active"  href="#"><big><?php echo $name; ?></big></a>
      </li>
    </ul>
   
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="margin-right:20px; color:white" ><?php echo $data; ?></button>
      
      

  </div>
</nav>
    </div>
    
</body>
</html>