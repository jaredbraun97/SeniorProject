<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin.css">
    <?php 
    ob_start();//this captures the output of things like echo until I need them, allows me to us header to redirect
    require_once '../../../PrivateFT/Connection.php';//huge security improvement

	?>
</head>
    
    <body>
       
       <header>
        <div class="Header">
            <div><img src="../freedomTeams/Assets/logo.webp"></div>
            <div><p1>"For Freedom Christ Has Set Us Free"</p1></div>
            <div><p2>Galatians 5:1</p2></div>
        </div>
       </header>
        <div class="navbar">
            <nav>
            <ul>

                 
                
                <li><a href="addPrayer.php">Add Prayer Requests</a></li>
                <li><a href="index.php">Back to Main Admin page</a></li>
                
            </ul> 
        </nav>
        </div>
        <div class="content">
            <article>
                <! -- Main Title -->
                <h2>Add Videos</h2>
                <div class="contentBox">
                    <! -- SubTitle-->
                    
                    <form action="uploadVid.php" method="post" enctype="multipart/form-data">
                        
                            <label>Select Image file to Upload: </label>
                            <input type="file" name="file">

                        <label>Add the Title : </label><input type="text" name="title">
                        
                        <label>Add a Caption? : </label><input type="text" name="caption">


                           
                       
                    <button name="upload">upload</button>
                    
                        
                    </form>
                </div>
                   <div class="contentBox">
                       <h4>Uploaded Videos</h4>
                       <p>To Upload a video It needs to be downloaded onto the Server into the C:\xampp\htdocs\Test\Videos folder.</p>
                           
                    <?php
                    function displayTable(){
                        global $conn;//allows us to access the variable from connection.php 

                        $result = $conn->query("Select path, caption, id, title FROM video");
                        if ($result->num_rows >0) {
                            //get the data from each row
                            while($row = $result->fetch_assoc()){
                                $Path = '../Videos/'. $row['path'];
                                $Caption = $row['caption'];
                                $id = $row['id'];
                                $title = $row['title'];
                            echo "<div class='vidCont'>";
                            ?>
                            <p>ID: <?= $id; ?></p>
                           <video >
                               <source src="<?= $Path; ?>" type="video/mp4">
                           </video>
                            <p><?= $title; ?></p>
                           <p><?= $Caption; ?></p>
                           
                    <?php // This is just the default. The site can use other types as well 
                                
                                echo "</div>";
                           }
                        }
                    }
                    displayTable();
                    ?>
                                      
                
                </div>
                
            </article>
            <div class="contentBox">
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
                            $stmt = $conn->prepare("DELETE FROM video
                            WHERE id = ?");
                           
                            //bind the paramater to the query
                            $stmt->bind_param("i", $Id);

                            if ($stmt->execute()) {
                                ob_end_clean(); // Clears the buffer when we want to rediect and displays it
                                header("Location: addVideo.php"); // Update the page and clear the post data
                            } else {
                                echo "Error: " . $stmt->error;
                            } 
                            
                            //reorder the ID's after deleting to make id's sequential and gapless
                            $que = "SELECT id FROM video";//get the ids from the server
                            $IDs = $conn->query($que);//run the query
                            if ($IDs->num_rows > 0) { //array of the ids
                                $rows = $IDs->fetch_all(MYSQLI_ASSOC);
                                //iterate through the rows
                                foreach ($rows as $index => $row) {
                                    $newID = $index + 1; //set based on the total plus 1, should start at 0
                                    $oldID = $row['id'];//get the current id, needed for the update query
        
                                    // Update the ID in the database
                                    $updateQuery = "UPDATE video SET id = '$newID' WHERE id = '$oldID'";
                                    $conn->query($updateQuery);//no prepared statements because all the variables are from the sever
                                }
                                $maxIDs = count($rows);//gets an integer of how many requests there are
                                //reset the auto increment to the total of the request plus + 1 that way new requests will have the correct id
                                $resetAInc = "ALTER TABLE video AUTO_INCREMENT = " . ($maxIDs + 1);
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

           
            
        </div>
        
    </body>
    
</html>