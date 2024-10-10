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
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <link rel="stylesheet" href="../CSSLayouts/needs.css">
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
                    <svg class="shapes" preserveAspectRatio="xMidYMid meet" data-bbox="17.5 17.5 165 165" viewBox="17.5 17.5 165 165" height="50" width="50" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
                        <g>
                            <path d="M135 96.7H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                            <path d="M135 117.3H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                            <path d="M100 17.5c-45.6 0-82.5 36.9-82.5 82.5s36.9 82.5 82.5 82.5 82.5-36.9 82.5-82.5-36.9-82.5-82.5-82.5zm0 158.4c-41.9 0-75.9-34-75.9-75.9s34-75.9 75.9-75.9 75.9 34 75.9 75.9-34 75.9-75.9 75.9z"></path>
                            <path d="M135 76.1H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                        </g>
                        
                    </svg>

                </div>
                <div class="contentBox">
                    <h1>NEEDS</h1>
                    <ul class="Needs">
                        <li>A church building or meeting place for Freedom Bible Fellowship</li>
                        <li>Housing for the Freedom Team families</li>
                        <li>Housing for visiting teams that come to help in the work</li>
                        <li>Housing for disciples - such as apartments that can be leased, Freedom teams owned housing, or other
                        </li>
                        <li>Location, building, and/or land for a Freedom Teams Center</li>
                                
                    </ul>
                </div>
                <div class="contentBox">
                    <h1>NEEDS PROVIDED</h1>
                    <ul class="Needs">
                        <li>Rental housing for Micah, Cristina, and family miraculously provided</li>
                        <li>A 2004 Sprinter Van was donated to the team and has been of great value</li>
                        <li>A 2016 Fiat 500 was donated to the team which has been helpful in saving gas for trips with one or two people</li>
                        <li> home for Dan and Cyndi Williams to rent was provided in the perfect neighborhood</li>
                        <li>The Lord provided a home for Caleb and Anna to purchase and live in while here in California</li>
                        <li>Many miraculous stories of the Lord providing finances for month to month rental costs for the team</li>
                                
                    </ul>
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