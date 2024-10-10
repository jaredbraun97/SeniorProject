<!DOCTYPE html>
<html>
    
<head>
    <?php 
    //link to the mysql server 
    require '../../../PrivateFT/Connection.php'

	?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../scripts/Toggle-Buttons.js" defer></script>
    <link rel="stylesheet" href="../CSSLayouts/local-work.css">
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <script src="../scripts/Toggle-Theme.js" defer></script> 
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
            <article>
                <div class="contentBox">
                    <h1>Local Work</h1>
                    <h2> The Burden</h2>
                </div>
                 <div class="contentBox">
                    <p>“How will we reach them for Christ?” is often the prayer of our hearts as we live among the people of Freedom/Watsonville, California.  </p>
                     
                    <p>The city of Freedom has about 4,000 people and is encapsulated within Watsonville, a town of nearly 53,000.  The community is 80-90% Hispanic. Many of the people living here are hardworking migrant farming families. The Lord has burdened us to focus our efforts towards loving them and reaching them for Christ.</p>
                    
                     <p>Since our arrival, we have been learning about the community and the needs of the people.  Daily, we pray for avenues to bring the gospel of Jesus Christ into homes. We have been overjoyed to see answered prayers that have provided opportunities to love the people.</p>
                     
                    <p>Migrant families live difficult lives with many practical needs. Parents and often children work in the fields for ten hours a day, six days a week. Even working so hard, they struggle to make ends meet.  </p>
                     
                    <p> It is exciting and humbling to see how the Lord is using Freedom Teams.  A few years ago, we didn’t even know of the 176 unreached people groups living the North America. Now we are serving among them.  The needs of our community are great, but God is greater.  </p>
                     
                    <p>Unreached People Groups </p>
                        <a href="https://upgnorthamerica.com/">
                            https://joshuaproject.nethttps://upgnorthamerica.com
                        </a>
                     
                     
                </div>
                <div class="contentBox">
                    <div class="spBox">
                        <img src="Assets/pictures/disciple.webp">
                        <img src="Assets/pictures/disciple.webp">
                        <img src="Assets/pictures/disciple.webp">
                        <img src="Assets/pictures/disciple.webp">
                        <img src="Assets/pictures/disciple.webp">
                        <img src="Assets/pictures/disciple.webp">
                        

                    </div>
                </div>    
                      </article>
            
        
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