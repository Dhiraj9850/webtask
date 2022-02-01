<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee.com</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="animate.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600&family=Baloo+Bhaijaan+2:wght@700&family=Dancing+Script&family=Fira+Sans:ital,wght@0,100;1,100&family=Irish+Grover&family=Kanit:wght@300&family=Lato:ital,wght@0,100;1,400&family=Libre+Baskerville:wght@700&family=Lobster&family=Lora:ital,wght@1,600&family=Merriweather:ital,wght@1,700&family=Murecho:wght@300&family=Oswald:wght@200&family=PT+Serif:ital,wght@1,700&family=Roboto+Slab:wght@800&family=Shippori+Antique&family=Ubuntu:ital,wght@0,300;1,500&family=Yanone+Kaffeesatz&display=swap"
    rel="stylesheet">

  <script src="https://kit.fontawesome.com/1c9005996e.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id="nameweb" href="#">Employee.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link mx-3" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="#">about
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">management</a>
            <a class="dropdown-item" href="#">task service</a>

        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="#">contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <button type="button" class="btn btn-success mx-2" id="signupbtn">Sign up</button>
    </div>
  </nav>

  <?php
  $insert = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "task";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `employeelogin` (`email`, `password`) VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
           $insert = true;
        }
        else{
          echo"login failed";
        }

     
      }
    }
       

 ?>

  <?php
       if($insert){
        echo"<div class='alert alert-success' role='alert'>
        <strong>Success!!..Employer '$email'logged in successfully!!!!.....</strong>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
      </div>";
      }
      else{
        echo"<div class='alert alert-danger' role='alert'>
        <strong>Failed!!..please create your account first and try again!!!!.....</strong>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
      </div>";
      }
 ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/cr3.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cr1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cr2.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <h2>Login-Employee.com</h2>
    <form action="index.php" method="post" name="form" onsubmit=" return validated()">
      <div class="form-group">
        <label for="email"><i class="far fa-envelope" id="emaillogo"></i>Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
          placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="Password"><i class="fas fa-unlock-alt" id="passlogo"></i>Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <div id="pass_error">
          please set your password with maximum 8 characters
      </div>
      <button type="submit" class="btn btn-success" id="loginbtn">Login</button>
    </form>
  </div>
 





  <script src="wow.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>