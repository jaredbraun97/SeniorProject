<!DOCTYPE html>
<html>
    
<head>
    <?php 
    //link to the mysql server 
    require '../../../PrivateFT/Connection.php'

	?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <link rel="stylesheet" href="../CSSLayouts/about-us.css">
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
            
           
                
            <img id="coverPicture" src="Assets/pictures/cover.webp">
    
            <div class="contentBox">
                <div class="subContBox">
                    <h1>Scott &amp; Lynn</h1>
                    <h1>DeGroff</h1>
                    <img src="Assets/pictures/ScottandLynn.webp">
                    <p>Scott and Lynn moved to Freedom/Watsonville area from Kansas in
                        2018. </p>
                    <p>Scott and Lynn have served the Lord for many years encouraging the people of God to be wholehearted followers of Jesus. They have a heart to see North America reached with the Gospel in their lifetime.</p>

                </div>
                <div class="subContBox">
                    <h1>Micah &amp; Cristina</h1>
                    <h1>Williams</h1>
                    <img src="Assets/pictures/Williams.webp">
                    <p>Micah, Cristina, Caleb, Moses, Karis, and Lincoln moved to Freedom/Watsonville area from Missouri in 2019.</p>
                    <p>Micah and Cristina have always had a heart for discipling young people and encouraging them to go on for the Lord. The Lord has given them many opportunities with believers in Watsonville to encourage them in their walks with the Lord.</p>

                </div>
                <div class="subContBox">
                    <h1>Dan &amp; Cyndi</h1>
                    <h1>Williams</h1>
                    <img src="Assets/pictures/DanandCyndi.webp">
                    <p>Dan, Cyndi, Andi, Arthur, and Wrigley moved to Freedom/Watsonville area from Texas in 2018. </p>
                    <p>Dan and Cyndi moved to Watsonville desiring to reach the hispanic population for Christ. They have become well know in their neighborhood as individuals who love Jesus Christ.</p>

                </div>
                <div class="subContBox">
                    <h1>David &amp; Betsy</h1>
                    <h1>Reeve</h1>
                    <img src="Assets/pictures/Reeve.webp">
                    <p>David and Betsy moved to Freedom/Watsonville area in 2021.</p>
                    <p>The Reeves were missionaries in several countries and now the Lord has moved them to the heart of Spanish speaking America. They have a heart for sharing the Gospel with all they come in contact with.</p>

                </div>
                <div class="subContBox">
                    <h1>Caleb &amp; Anna</h1>
                    <h1>Trent</h1>
                    <img src="Assets/pictures/Trent.webp">
                    <p>Caleb, Anna, Bryson, Silas, Mia, and Evelyn moved to Freedom/Watsonville area in 2022 from Kansas.</p>
                    <p>Caleb and Anna are admirable servants of God who plan to be a part of new church plant in Phoenix, AZ in the near future. </p>

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
        
    </body>
    
</html>