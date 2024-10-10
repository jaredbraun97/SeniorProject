<?php
        //helps with errors remove before posting
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        error_reporting(E_ALL);

        $servername = "localhost";
        $dbName = "seniortest";
        $username = "jbraun";
        $password = "braun";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbName);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          echo "connection Frailure";
        }
        //end of connection protocall
            
        if(isset($_POST['upload']) && !empty($_FILES["file"]["name"])){
        $file = $_FILES['file'];
        
        $fileName = $_FILES['file']['name'];//name is the assoc arr property we want
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        //Get the actual file type
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 500000){   
                    $fileDest = "../Pictures/".$fileName;
                    //move the actual file
                    move_uploaded_file($fileTmpName, $fileDest);
                    // add the file to the db
                    //define var
                    $caption = $_POST['caption'];

                    //add to the data base 
                    //prepare the query
                    $stmt = $conn->prepare(" INSERT INTO Pictures (path, caption, addDate) VALUES (?, ?, NOW() )");
                    //bind the paramater to the query
                    $stmt->bind_param("ss", $fileName, $caption);
                    $stmt->execute(); 
                    echo  "File " . $fileName . " Added";
                     echo '<a href="addPicture.php">Go Back</a>';

                    

                    //close the connection
                    $stmt->close();
                    $conn->close();
                }else{
                    echo"File too large";
                }
            }else{
                echo"error in upload";
            }
        }else{
            echo"error wrong type";
        }
    }
?>