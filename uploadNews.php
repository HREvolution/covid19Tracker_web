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

        $msg = '';
        
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $contents = $_POST['contents'];
            $title = $_POST['title'];
            

            $name= $_FILES['image']['name'];

            $tmp_name= $_FILES['image']['tmp_name'];
            
            $position= strpos($name, "."); 
            
            $fileextension= substr($name, $position + 1);
            
            $fileextension= strtolower($fileextension);
            
            $upload_date = date("d/m/Y");
            
            date_default_timezone_set("Asia/Kuala_Lumpur");
            
            $upload_time = date("h:ia");
        
            
            if (isset($name)) {
            
                $path= '';
                
                if (!empty($name)){
                    if (move_uploaded_file($tmp_name, $path.$name)) {
                     
                
                    }
                }
            }
            
                
            $sql = "insert into news_info (newsTitle, newsContent, newsFile, newsDate, newsTime) values('$title', '$contents','$name','$upload_date','$upload_time')";
            
           if ($con->query($sql) === TRUE) {
               echo '<script type="text/javascript">';
                echo ' alert("New record created successfully")';  //not showing an alert box.
                echo '</script>';
             
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            
        
        }
        
        include 'previewNews.php';

        
    ?>

