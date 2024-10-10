<!DOCTYPE html>
<html>
    
<head>
    <?php 
    //link to the mysql server 
    require '../../../PrivateFT/Connection.php'

	?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="../CSSLayouts/threeFold.css">
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <script src="../scripts/Toggle-Theme.js" defer></script>
    <script src="../scripts/Toggle-Buttons.js" defer></script> 
    <!-- difer runs the script after the css and html have been parsed -->
    
    
      <title>Freeedom Teams</title>
</head>
    <header>
        <div class="Header">
            <div><img src="Assets/logo.webp"  ></div>
            
        </div>
    </header>
    <body>
       
       
        <div class="navbar">
       
            
            
            
            <!-- Nav bar items-->
            <nav>
              
                <ul class="navlist" >
                    <li><a href="Home.php">Home</a></li>
                    <li>
                        <a href="Three-Fold-Burden.php">Three Fold Burden</a>
                       
                   
                        <ul class="subnav" id="sub1">
                            <li><a href="local-work.php">Local Work</a></li>
                            <li><a href="dicipleship.php">Discipleship</a></li>
                            <li><a href="new-works.php">New Works</a></li>
                        </ul>
                    </li>
                    <span class="arrow" id="arrow1">&#9660;</span>
                    <li><a href="about-us.php">About Us</a></li>
                    <li>
                        <a href="Prayers-and-giving.php">Prayers and Giving</a>
                        
                        <ul class="subnav" id="sub2">
                            <li><a href="donate.php"\>Donate</a></li>
                            <li><a href="prayer.php">Prayer</a></li>
                            <li><a href="needs.php">Needs</a></li>
                        </ul>
                    </li>
                    <span class="arrow" id="arrow2">&#9660;</span>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="resources.php">Resources</a></li>
                </ul> 
               
        </nav>
             <!-- hamburger menu btn for mobile -->
             <div class="toggle" id="hamburg-btn">
                    <a>&#9776;</a>
                </div>
        </div>
         <!-- =============Start to main body content ================ -->
        
        <div class="content">
           
            
            <button id="theme-toggle">Dark</button>
            <h1>Three Fold Burden</h1>
            <div class="contentBox">
                
                <div class="subContBox">
                    
                    <img src="Assets/pictures/local.webp">
                    <div id="local" >
                        <h1>Local Work</h1>
                        <p>We seek to walk with the Lord each day, following Him step by step. We long to see Him bring about all He has in mind for Freedom, CA.</p>
                    </div>
                    
                </div>
                <div class="subContBox">
                    
                    <img src="Assets/pictures/disciple.webp">
                    <div id="disc" >
                        <h1>Discipleship</h1>
                        <p>We want to encourage men and women of God to walk in the fullness of life God has intended for us in love and obedience to Him.</p>
                    </div>
                    
                </div>
                <div class="subContBox">
                    
                    <img src="Assets/pictures/newwork.webp">
                    <div id="new" >
                        <h1>New Works</h1>
                        <p>We are praying for the Lord to reach North America in this generation and to start new works that will glorify Him all across the continent.</p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- =============End to main body content ================ -->
         <!-- =============start to footer content ================ -->
        <div class="footer" >
               
                <div style="border-left:  none ;"><h3>Address</h3>
                    <p>PO Box 1570</p>
                    <p>Freedom, CA 95019</p>
                </div>
                <div>
                    <h3>Subscribe</h3>
                    <p>Subsribe to our mailing list if you would like to recieve updates on our mission progress and prayer requests.</p>
                    <div id="Sub-container">
                        <form method="post" action="" >
						<?php 
							//helps with errors remove before posting
							ini_set('display_errors', 1);
							ini_set('display_startup_errors', 1);
							error_reporting(E_ALL);
							
							//we only want the script to run if they click the button
							if(isset($_POST['subscribe'])) {
								//adding subscriber email to the server
			
								
								
								//define vars
								
								$email ="";
								$bool = true;//this guy is for testing if it was good input, so we know whether or not to add the email
								
								function test_input($data) {
								  $data = trim($data);
								  $data = stripslashes($data);
								  $data = htmlspecialchars($data);
								  return $data;
								}
									
								$email = test_input($_POST["email"]);
								
								//check if the email is atleast proper form
								if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
								    $email ="incorrect email";
									
									echo '<div class="alertError">"Email invalid"</div>';
                                  
                                   
									
								}else{
                                   
									//add to the data base 
									//prepare the query
									$stmt = $conn->prepare("INSERT INTO subscribers (emailAddress) VALUES (?)");
									//bind the paramater to the query
									$stmt->bind_param("s", $email);
				
									$stmt->execute(); 
									
                                    
                                    echo '<div class="alertAdded">"Email Address added. Thanks for signing up!"</div>';
                                  
                                  
									
									//close the connection
									$stmt->close();
									$conn->close();
								}
							//end to main if 	
							}
						?>
                            <input type="text" id="SubEmail" name="email" placeholder="Email Address" required>
                            <input type="submit" value="Subscribe" name="subscribe">
                        </form>
                    </div>
                </div>
            
                <div>
                    <h3>Donate</h3>
                    <p>Only if you feel led by the Spirit. This is a faith based organization iykyk</p>
                     <div class="DonateBtn"><a href="donate.php"\>Click to Donate</a></div>
                    
                </div>
                    
        </div>
         <!-- =============End to footer content ================ -->
        <script>
            //this is to make the divs in he content linkable without redoing a lot
            //get the divs
            const localLink = document.getElementById("local");
            const discLink = document.getElementById("disc");
            const newLink = document.getElementById("new");

            
            localLink.addEventListener("click", function() {
                
                window.location.href = "local-work.php"; 
            });
            discLink.addEventListener("click", function() {
                window.location.href = "discipleship.php"; 
            });
            newLink.addEventListener("click", function() {
                // Redirect to a URL when the div is clicked
                window.location.href = "new-works"; // Replace with your desired URL
            });
        </script>
    </body>
    
</html>