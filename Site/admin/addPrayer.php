<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css">
    <?php 
    ob_start();//this captures the output of things like echo until I need them, allows me to us header to redirect
    require_once '../../../PrivateFT/Connection.php';

	?>
    </head>
    <!-- TinyMCE snip-->
    
    <script src="https://cdn.tiny.cloud/1/nufbnemv7k8233ybatqrz63nsq9powtg38n9abwter5qwgiz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>tinymce.init({
            selector:'textarea'
            
        });</script>
    <!-- TinyMCE snip-->
   
    
    <body>
       <header>
        <div class="Header">
            <div><img src="../freedomTeams/Assets/logo.webp"  ></div>
            <div><p1>"For Freedom Christ Has Set Us Free"</p1></div>
            <div><p2>Galatians 5:1</p2></div>
        </div>
        </header>
       
        <nav class="navbar">
            <ul>
                
                <li><a href="addVideo.php">Add Videos</a></li>
                <li><a href="index.php">Back to Main Admin page</a></li>
                
            </ul> 
        </nav>
        <div class="content">
            <article>
                <! -- Main Title -->
                <h2>Prayer Requests</h2>
                <div class="contentBox">
                    <! -- SubTitle-->
                    <h4>Add prayer request page</h4>
                    <h4>Editing reconmendation</h4>
                    <! -- Content -->
                    <p>In an Effort to keep the site cheap we dont have and font button, however the text editor will match whatever is pasted in it. So if your want to adjust the font, font size, or text color, or lists formats its easiest to copy paste. I recommend saving the prayer request in a doc file and pasting into the editor</p>
                    <form method="post">
                        <div>
                            <label>Author: </label><input type="text" name="Author">

                            <label>Title: </label><input type="text" name="Title">
                            
                            <textarea name="Request"></textarea>
                        </div>
                        <div>
                            <button name="add" onclick="removeElementsByClass()">Add Prayer</button>
                        </div>
                        
                    </form>
                    <script>
                        //quick function to clear the area of text
                        function removeElementsByClass(){
                            const elements = document.getElementsByClassName('Request');
                            while(elements.length > 0){
                                elements[0].parentNode.removeChild(elements[0]);
                            }
                       
                        }
                        
                    </script>
                    <?php
                        //helps with errors remove before posting
                        ini_set('display_errors', 1);
                        ini_set('display_startup_errors', 1);
                        error_reporting(E_ALL); 
                    
                        function displayTable(){
                            global $conn;//needed access the connection vars from the connection script in the head

                        // Create connection
                            $result = $conn->query("Select reqID, reqAuthor, reqTitle, request FROM prayerRequests");
                            if ($result->num_rows >0) {
                                //get the data from each row we only need prepared statements when sending data not reading it
                                while($row = $result->fetch_assoc()){
                                    echo'<div class="prayer"> 
                                    <h4>ID: ' . $row["reqID"] .'</h4> 
                                    <h4>Author: ' . $row["reqAuthor"] .'</h4>  <h4>Title: '. $row["reqTitle"].'</h4> <p>'.$row["request"].'</p></div>';
                                }
                            }
                        }
                        displayTable();
                        //if the add button was clicked
                        if(isset($_POST['add'])){ 
                            if(isset($_POST['Request'])){ 
                         
                        
                            //define vars
                            $Author =$_POST["Author"] ;
                            $Title = $_POST['Title'];
                            $Request = $_POST['Request'];
                            
                            //add to the data base 
                            //prepare the query
                            $stmt = $conn->prepare("INSERT INTO prayerRequests (reqAuthor, reqTitle,request) VALUES (?,?,?)");
                            //bind the paramater to the query
                            $stmt->bind_param("sss", $Author, $Title, $Request);
                            
                            
                            if ($stmt->execute()) {
                                ob_end_clean(); // Clears the buffer when we want to rediect
                                header("Location: addPrayer.php"); // Update the page and clear the post data
                                exit(); // Stop executing the current script
                            } else {
                                echo "Error: " . $stmt->error;
                            }


                            
                            //close the connection
                            $stmt->close();
                            $conn->close();

                        
                    
                           
                        }
                    }
                ?>
                <form method="post">
                        <div>
                            <label>Delete Request: </label><input type="text" name="Delete">
                            enter the ID of the request you want to remove
                        </div>
                        <div>
                            <button name="remove">Remove</button>
                        </div>
                        
                    </form>
                    <?php 
                        //delete using IDs.
                        if(isset($_POST['remove'])){
                            $Id = $_POST['Delete'];
                            //add to the data base 
                            //prepare the query
                            $stmt = $conn->prepare("DELETE FROM prayerRequests 
                            WHERE reqID = ?");
                           
                            //bind the paramater to the query
                            $stmt->bind_param("i", $Id);

                            if ($stmt->execute()) {
                                ob_end_clean(); // Clears the buffer when we want to rediect and displays it
                                header("Location: addPrayer.php"); // Update the page and clear the post data
                            } else {
                                echo "Error: " . $stmt->error;
                            } 
                            
                            //reorder the ID's after deleting to make id's sequential and gapless
                            $que = "SELECT reqID FROM prayerRequests";//get the ids from the server
                            $IDs = $conn->query($que);//run the query
                            if ($IDs->num_rows > 0) { //array of the ids
                                $rows = $IDs->fetch_all(MYSQLI_ASSOC);
                                //iterate through the rows
                                foreach ($rows as $index => $row) {
                                    echo '<script>alert("'.$index.'");</script>';
                                    $newID = $index + 1; //set based on the total plus 1, should start at 0
                                    $oldID = $row['reqID'];//get the current id, needed for the update query
        
                                    // Update the ID in the database
                                    $updateQuery = "UPDATE prayerRequests SET reqID = '$newID' WHERE reqID = '$oldID'";
                                    $conn->query($updateQuery);//no prepared statements because all the variables are from the sever
                                }
                                $maxIDs = count($rows);//gets an integer of how many requests there are
                                //reset the auto increment to the total of the request plus + 1 that way new requests will have the correct id
                                $resetAInc = "ALTER TABLE prayerRequests AUTO_INCREMENT = " . ($maxIDs + 1);
                                //run the query
                                $conn->query($resetAInc);
                            }
                             //close the connection
                            $stmt->close();
                            $conn->close();
                            }
                        //ob_end_flush();//show all the output from the echo's
                    ?>
                    
                </div>
                
            </article>
                

           
            
        </div>
        
    </body>
    
</html>