<!DOCTYPE html>
<html>
<head>
    <title>Preview</title>
    <style type="text/css">
        body{
             background: linear-gradient(to bottom, #0099cc 0%, #cc99ff 100%);
            background-attachment: fixed;
        }
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 50px;
            margin: auto;
            align-items: center;
            width: 50%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        /* Floating column for labels: 25% width */
        .col-25 {
            float: left;
            width: 13%;
            
        }
        
        /* Floating column for inputs: 75% width */
        .col-75 {
            float: left;
            width: 87%;
            
        }
        
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75 {
            width: 100%;
            margin-top: 0;
            }
        } 

         
        .file img {
            width: 100%;
            height: auto;
            margin: 20px;
            margin-left:0px;
            border: 2px solid grey;
         }
         
        h1{
            text-align: center;
            margin: 20px;
            color: white;
        }
        
        button{
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: auto;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
                        
        }
        
        button:hover {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
         
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        a{
            text-decoration: none !important;
            color: cornsilk;
        }
        
        h2, h6{
            margin:0px;
        }
        
        .row{
            margin: 1px;
            color: rgba(0,0,0,0.7);
        }
         
    </style>
</head>
<body>

    <h1>Preview</h1>
    
    <div class="container">
      

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
        

        $result= 'SELECT newsTitle, newsContent, newsFile, newsDate, newsTime FROM news_info ORDER BY newsID DESC LIMIT 1';
        $retrive = mysqli_query($con, $result);
        
        if($retrive){
            if( $r = mysqli_fetch_assoc($retrive) ){
                $news_title =  $r['newsTitle'];
                $news_content = $r['newsContent'];
                $news_file_name = $r['newsFile'];
                $files_show= "$news_file_name";
                $upload_date = $r['newsDate'];
                $upload_time = $r['newsTime'];
                
        
                echo "<h2>$news_title</h2>";
                echo "<div class='row'>";
                echo "<div class='col-25'><h6>$upload_date</h6></div>";
                echo "<div class='col-75'><h6>$upload_time</h6></div>";
                echo "</div>";
                echo "<p>$news_content</p>";
                echo "<div class='file'><img src='$files_show' /></div>";
            
            }
            
        }else{
            echo "error";
        }
        
   
        

        mysqli_close($con);
    ?>
    
    <div class="row">
        <button type="button" ><a href="uploadNewsPage.php">Back</a></button>
    </div>

    
    </div>
   
    
</body>
</html>