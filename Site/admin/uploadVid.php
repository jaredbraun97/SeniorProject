<?php
        //helps with errors remove before posting
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        error_reporting(E_ALL);

        require_once '../../../PrivateFT/Connection.php';
            
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
        
        $allowed = array('mp4','mov','wmv','avi','avchd', 'mpeg-2','webm','mkv');
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 5000000000){ //this can change depengin on the limits of the hardware  
                    $fileDest = "../Videos/".$fileName;
                    //move the actual file
                    move_uploaded_file($fileTmpName, $fileDest);
                    // add the file to the db
                    //define var
                    $caption = $_POST['caption'];
                    $title =$_POST['title'];
                    
                    //add to the data base 
                    //prepare the query
                    $stmt = $conn->prepare(" INSERT INTO video (path, caption, title, addDate) VALUES (?, ?, ?, NOW() )");
                    //bind the paramater to the query
                    $stmt->bind_param("sss", $fileName, $caption, $title);
                    
                     if ($stmt->execute()) {
                                ob_end_clean(); // Clears the buffer when we want to rediect
                                header("Location: addVideo.php"); // Update the page and clear the post data
                                
                    } else {
                            echo "Error: " . $stmt->error;
                            }
                    

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