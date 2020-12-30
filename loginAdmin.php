<?php

   ob_start();
   session_start();
       
    //Define your Server host name here.
    $HostName = "localhost";
    
    //Define your MySQL Database Name here.
    $DatabaseName = "id15491881_covid19trackerdb";
    
    //Define your Database User Name here.
    $HostUser = "id15491881_group06";
    
    //Define your Database Password here.
    $HostPass = "Rafikeya@gp610"; 
    
    // Creating MySQL Connection.
    $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName) or die("Could not Connect My Sql");
    
        
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $adminID= $_POST['adminID'];
            $password = $_POST['password'];
            
            $sql= "SELECT staffName, staffID, staffIC FROM staff_info";
            $result = $con->query($sql);
            
            echo"HHHH";
                        
                        
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                     if($adminID == $row['staffID'] && $password == $row['staffIC']){
                         
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['adminID'] = $row['staffID'];
                        header("Location: https://covid19trackerdb.000webhostapp.com/homePage.php"); 
                        exit;
                     }else{
                       
                     } 
                }            
            }else{
                echo "<p>error</p>";
            }
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Admin Login- Covid-19 Tracker</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="loginAdmin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <form class="form-signin" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">

      <img class="mb-4" src="assets/TRACKER.png" alt="covid-19 tracker" width="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>

      <label for="inputID" class="sr-only">Admin ID</label>
      <input name="adminID" type="text" id="inputID" class="form-control" placeholder="Admin ID" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>

  </body>
</html>