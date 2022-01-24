<html>

<head>

    <title>Diigital Mosque watch</title>
    <link rel="icon" href="img/fav.png" type="image/gif" sizes="20x20">
    <!-- bootstrap link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--font aswsome link-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--font aswsome link-->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- bootstrap link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!--font jqurey link-->
    <script src="js/jqurey.js"></script>
    <script src="js/bootstrap.min.js"></script>



</head>

<body style="height: 500px;">
    
    
   <!-- ============#navber===========-->
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="color: #ffff;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="far fa-clock" style="color: aqua; font-size:60px"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> Home</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php">Select Area</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Dhaka Division</a>
                            <a class="dropdown-item" href="index.php">Khulna Division</a>
                            <a class="dropdown-item" href="index.php">Sylhet Division</a>
                            <a class="dropdown-item" href="index.php">Rangpur Division</a>
                            <a class="dropdown-item" href="index.php">Rajshahi Division</a>
                            <a class="dropdown-item" href="index.php">Barisal Division</a>
                            <a class="dropdown-item" href="index.php">Chittagong Division</a>
                            <a class="dropdown-item" href="index.php">Mymensingh Division</a>


                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php #hadit">Hadith</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php #about">About </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



   
<div class="container">
    <div class="row">
    <div class="col-md-6" style="padding:100px 10px;">
        <h2>LogIn</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        
        <h2 style="color:red; font-family: robota3;">Note: "if you have our watch you can login otherwise no need to be login."</h2>
</div>

    
    <div class="col-md-6" style="padding:100px 10px;">
        <h2>Create Account</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="text">First Name:</label>
      <input type="email" class="form-control" id="fname" placeholder="Enter First Name" name="email">
    </div>
      <div class="form-group">
      <label for="text">Last Name:</label>
      <input type="email" class="form-control" id="lname" placeholder="Enter Last Name" name="email">
    </div>
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
      <div class="form-group">
      <label for="number">Your Code:</label>
      <input type="email" class="form-control" id="code" placeholder="Enter Your Code" name="email">
    </div>
      
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    
    
    
        </div>
        
       
    </div>
        
   
  
   


 <!-- ============#copyright===========-->

   <!-- <div class="container-fluid" style="text-align: center; background:  #1e211f; color: aliceblue;padding-top:10px;padding-bottom:10px;">
        <div class="row">
            <div class="col-md-12">
                <i class="fas fa-copyright"></i>Copyright 2021 by All Rights Reserved.
            </div>
        </div>
    </div>
-->



</body>

</html>