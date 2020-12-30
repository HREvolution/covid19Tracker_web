
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="travelHistory.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/43d73fdaf8.js" crossorigin="anonymous"></script>
    
    
    <style>
        /* Style inputs, select elements and textareas */
          
          /* Style the label to display next to the inputs */
          label {
            padding: 12px 12px 12px 0;
            display: inline-block;
          }
          
          /* Style the submit button */
          input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-left: 15px;
            margin-top: 20px;
            
          }
        
          
          /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
          @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit],input[type=reset]{
              width: 100%;
              margin-top: 2px;
              margin-right: 0px;
            }
          } 
        
        
        
          footer {
            padding-top: 10px;
            padding-bottom: 20px;
            background-color:white;
            position:absolute;
            bottom: 10px;
            height: 2.5rem;  
        }
          
        footer p {
            margin-bottom: .25rem;
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
                <li>
                    <a href="homePage.php">Dashboard</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actions</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li >
                            <a href="uploadNewsPage.php">Upload News</a>
                        </li>
                        <li class="active">
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
                            <li class="nav-item">
                                <a class="nav-link" href="#">User Travel History</a>
                            </li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
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
                <h1>List of Users</h1>
                <label for="state">State: </label>
                <select  id="state" name="states" onchange="myFunction()">
                    <option value="all">All</option>
                    <option value="perak">Perak</option>
                    <option value="selangor">Selangor</option>
                    <option value="pulau pinang">Pulau Pinang</option>
                    <option value="negeri sembilans">Negeri Sembilan</option>
                    <option value="melaka">Melaka</option>
                    <option value="johor">Johor</option>
                    <option value="pahang">Pahang</option>
                    <option value="terengganu">Terengganu</option>
                    <option value="kelantan">Kelantan</option>
                    <option value="kedah">Kedah</option>
                    <option value="perlis">Perlis</option>
                </select> 
        
                <label for="status">Status: </label>      
                <select  id="status" name="status">
                    <option value="All">All</option>
                    <option value="normal">Normal</option>
                    <option value="danger">Danger</option>
            
                </select> 
                  
                <label for="gender">Gender: </label>      
                <select  id="gender" name="status">
                    <option value="All">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> 
            
                <table id="myTable">
                    <tr class="header">
                    <th>Name</th>
                    <th>IC</th>
                    <th>State</th>
                    <th>Status</th>
                </tr>
            
                        
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
                        
                
                        $sql= "SELECT IC, name, gender,state FROM user_info";
                        $result = $con->query($sql);
                        
                        
                        if($result->num_rows > 0){
                           while($row = $result->fetch_assoc()){
                               
                               echo "<tr>";
                               echo "<td>".$row["name"]."</td>";
                               echo "<td>".$row["IC"]."</td>";
                               echo "<td>".$row["state"]."</td>";
                               echo "<td>".$row["name"]."</td>";
                               echo "</tr>";
                               
                           }
                            
                        }else{
                            echo "error";
                        }
                        
                   
                        
                
                        mysqli_close($con);
                    ?>
                    
                </table> 
        
        
            </div>
      
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


