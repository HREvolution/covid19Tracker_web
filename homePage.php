<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    
    <link rel="stylesheet" href="homePage.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/43d73fdaf8.js" crossorigin="anonymous"></script>
    
    
    <style>
        h3{
            margin: 10px;
        }
        
        .clock{
            text-shadow: 0.2px 0.2px;
            margin: 20px 0 24px 0;
            padding: 12px;
            border-radius: 25px;
            background-clip: border-box;
            height:100%;
        }
        
        
        .row two{
          
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 100%;
         
        }
        
        .button1{
            background-color: #62c1cd;
            border: none;
            color: white;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 100%;
            height:100%;
            font-size: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 30px;
         
        }
        
        body {
          
            background-color: #f5f5f5;
           
        }
        
        .card{
            background-color: rgb(43, 44, 49);
            color: cornsilk;
            margin: 20px 0 24px 0;
            padding: 12px;
            width:100%
            height:100%;
        }
        
          
        .notification .badge {
            
            top: -10px;
            right: -10px;
            padding: 5px 10px;
            border-radius: 50%;
            background: red;
            color: white;
          }
        
        .col-xl-8{
            height: 100%;
            width: 100%;
        }
        
        b{
            margin: 0 20px;
        }
        
        hr{
            margin: 0;
        }
        
        footer {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color:white;
            margin-top: 40px;
        }
          
        footer p {
            margin-bottom: .25rem;
        }
        
        .img{
            text-align: center
        }
        
        .img img{
            width: 200px;
        
        }
        
        .sidebar-header img{
            width: 70px;   
            display:block;
            margin:auto;
            padding: auto;
        
        }
        
                /*
            DEMO STYLE
        */
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }
        
        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }
        
        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
        }
        
        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }
        
        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }
        
        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */
        
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            perspective: 1500px;
        }
        
        
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: rgb(43, 44, 49);
            color: #fff;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: bottom left;
        }
        
        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
        }
        
        #sidebar .sidebar-header {
            padding: 20px;
            background: rgb(43, 44, 49);
        }
        
        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #62c1cd;
        }
        
        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }
        
        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #62c1cd;
            background: #fff;
        }
        
        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #62c1cd;
        }
        
        
        a[data-toggle="collapse"] {
            position: relative;
        }
        
        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: rgb(43, 44, 49);
        }
        
        ul.CTAs {
            padding: 20px;
        }
        
        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        
        a.logout {
            margin-top:150px;
            background: #62c1cd;
            color: #fff;
        }
        
        a.article, a.article:hover {
            background: rgb(43, 44, 49) !important;
            color: #fff !important;
        }
        
        
        
        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */
        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }
        
        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background:rgb(43, 44, 49);
            cursor: pointer;
        }
        
        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #fff;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            transition-delay: 0.2s;
        }
        
        #sidebarCollapse span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }
        #sidebarCollapse span:nth-of-type(2) {
            opacity: 0;
        }
        #sidebarCollapse span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }
        
        
        #sidebarCollapse.active span {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }
        
        
        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
                transform: rotateY(90deg);
                position:fixed;
                 z-index: 1;
            }
            #sidebar.active {
                margin-left: 0;
                transform: none;
            }
            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }
            #sidebarCollapse.active span {
                margin: 0 auto;
            }
            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }
            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }
            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }
        
        }


    </style>


</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="assets/TRACKER.png" alt="Coivd-19 Tracker">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu">Dashboard</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actions</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="uploadNewsPage.php">Upload News</a>
                        </li>
                        <li>
                            <a href="travelHistory.php">User Travel History</a>
                        </li>
                        <li>
                            <a href="#">Red Flagge Areas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#">Help</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <!--<a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>-->
                    <a class="logout" href="logoutAdmin.php">Sign Out <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="title">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" style="display: none;" href="#">Covid-19 Tracker</a>
                            </li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="homePage.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" data-toggle="tooltip" title="Sign Out"href="logoutAdmin.php"><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                         
                        </ul>
                    </div>
                </div>
            </nav>
            
          
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="row">
                                <div class="col img">
                                    <img class="img-thumbnail" src="assets/pngtree-user-vector-avatar-png-image_1541962.jpeg" alt="avatar"> 
                                </div>
                                <div class="col text">
<?php
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
                                        
                                            
                                                $adminID= $_SESSION['adminID'];
                                                
                                              
                                                $sql= "SELECT staffName, staffID, staffIC FROM staff_info WHERE staffID='$adminID'";
                                                $result = $con->query($sql);
                                                
                                                if($result){            
                                                if($result->num_rows == 1){
                                                        $row = $result->fetch_assoc();
                                                        echo "<h4 class='card-title'>".$row['staffName']."</h4>";
                                                        echo "<p class='card-text'>IC: ".$row['staffIC']."</p>";
                                                                
                                                }else{
                                                    echo "error";
                                                }
                                                
                                                }else{
                                                    echo "error".$sql."<br>".$con->error;
                                                }
                                            
                                    
                                    ?>
                                    
                                    
                                <!--<a href="#" class="btn btn-primary">Update Profile</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col clock">
                        <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1735161"><span style="color:#62c1cd;">Current local time in</span><br />Kuala Lumpur, Malaysia</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Asia%2FKuala_Lumpur" width="100%" height="90" frameborder="0" seamless></iframe> 
                        </div>
                    </div> 
                </div>
                <hr>
                <h3>Actions</h3>   

                <div class="row">
                 
                    <div class="col">
                        <a href="uploadNewsPage.php">
                            <button class="btn button1" type="button">
                                <img src="https://img.icons8.com/bubbles/150/000000/news.png"/> 
                                <h4>Upload News</h4>
                            </button>
                        </a>
                    </div>
                      
                    <div class="col">
                        <a href="travelHistory.php">
                            <button class="btn button1" type="button">
                                <img src="https://img.icons8.com/bubbles/150/000000/car.png"/>
                                <h4>User Travel History</h4>
                            </button>
                        </a>
                            
                    </div>
                
                    <div class="col">
                        <a href="#">
                            <button class="btn button1" type="button">
                                    <img src="https://img.icons8.com/bubbles/150/000000/error.png"/>
                                    <h4>Red Flagged Areas</h4>
                            </button>
                        </a>
                    </div>
                  
                    
                </div>
            

            </div>
        
            <footer class="text-muted">
                <div class="container">
                  <p class="float-right">
                    <a href="#">Back to top</a>
                  </p>
                  <p>Covid-19 Tracker@2020</p>
                </div>
            </footer>


      
        </div>
    </div>
    <!-- /#page-content-wrapper -->



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                $('.title').css("display", "");
            });
        });
    </script>
</body>

</html>
