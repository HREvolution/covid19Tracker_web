<!DOCTYPE html>
<html>
    <head>
        <title>Covid-19 Tracker - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            .navbar-brand img{
                width: 50px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="homePage.php"><img src="assets/photo6170027057271122818-removebg-preview.png" alt="covid-19 Tracker"></a>
                <a class="navbar-brand" href="homePage.php"><img src="assets/Tracker(3).png" alt="covid-19 Tracker"></a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="uploadNewsPage.php">Upload News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="travelHistory.php">Travel History</a>
                        </li>

                    <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Dropdown link
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-itm">
                            <a href="#" class="nav-link notification">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Out</a>
                        </li>
                    
                    </ul>
                

                </div>
            </div>

        </nav> 
        
    </body>
</html>

