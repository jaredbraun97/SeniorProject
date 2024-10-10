<!DOCTYPE html>
<html>
    <?php 
    require '../../../PrivateFT/Connection.php'

	?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../scripts/Toggle-Buttons.js" defer></script>
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <link rel="stylesheet" href="../CSSLayouts/Prayers-and-giving.css">
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
            <div id="spBox">
                    <h1>"Not that I seek the gift, but I seek the fruit that abounds to your account. "</h1>
                    <h1>Philippians 4:17</h1>
            </div>
            <div class="contentBox">
                 <div class="subContBox">
                    <svg class="shapes" preserveAspectRatio="xMidYMid meet" data-bbox="10 20 180 160" xmlns="http://www.w3.org/2000/svg" viewBox="10 20 180 160" height="50" width="50"role="presentation" aria-hidden="true">
                        <g>
                             <path d="M169.9 143.7l16.4-13.7-25.8-17.6c1.8-2.8 4.5-7.3 6.5-11.4.3-.6 2.6-5.8 3.7-9.4 2.3-7.5 3.4-14.4 3.4-21.2 0-27.7-21.7-50.3-48.3-50.3C113.3 20 101 25.2 92 34.4 83.1 25.2 70.8 20 58.3 20 31.7 20 10 42.6 10 70.3c0 7 1.2 14.2 3.4 21.2.1.2 2 6.1 3.7 9.5 10.2 21.9 29.8 39.7 44.4 50.8 15.6 11.8 28.9 18.6 29.5 18.9l1 .5 1-.5c.1-.1 13.7-7 29.5-18.9 2.1-1.6 5-4 7.7-6.2l5.2 21.7 17.9-13.1 21.9 25.8 14.8-12.5-20.1-23.8zM92 166.2c-6.5-3.5-53.4-29.6-70.9-67.1V99c-1.6-3.1-3.5-8.8-3.5-8.8-2.1-6.6-3.2-13.3-3.2-19.9 0-25.3 19.7-45.9 43.8-45.9 12.1 0 23.8 5.3 32.1 14.6l1.7 1.9 1.7-1.9c8.3-9.3 20-14.6 32.1-14.6 24.2 0 43.8 20.6 43.8 45.9 0 6.3-1.1 12.9-3.2 19.9-1.1 3.5-3.5 8.9-3.5 8.9-1.5 3.2-4 7.5-6 10.8l-42-28.7 14.2 59.4C111.7 155.4 94.3 165 92 166.2zm62-18l-15.8 11.6-16.3-68.3 57.1 39-15.4 12.8 20.2 23.8-8.1 6.8-21.7-25.7z"></path>
                        </g>
                    </svg>
                            
                    <a class="button" href=donate.php>Give Online</a>           
                    
                </div>
            
                    <div class="subContBox">
                    <svg class="shapes" width="50" height="50" viewBox="65.5 20 69 160" xmlns="http://www.w3.org/2000/svg">
                        <path d="M103.083 23.463L100.001 20l-3.082 3.463-25.764 28.948-5.655 6.773h20.536V180h27.928V59.184H134.5l-31.417-35.721zm6.774 31.665v120.79H90.143V55.128H74.237l25.765-28.948 25.762 28.948h-15.907z" />
                    </svg>
                    <a class="button" href=prayer.php>Prayer</a>
                    
                </div>
                <div class="subContBox">
                    <svg class="shapes" preserveAspectRatio="xMidYMid meet" data-bbox="17.5 17.5 165 165" viewBox="17.5 17.5 165 165" height="50" width="50" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
                        <g>
                            <path d="M135 96.7H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                            <path d="M135 117.3H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                            <path d="M100 17.5c-45.6 0-82.5 36.9-82.5 82.5s36.9 82.5 82.5 82.5 82.5-36.9 82.5-82.5-36.9-82.5-82.5-82.5zm0 158.4c-41.9 0-75.9-34-75.9-75.9s34-75.9 75.9-75.9 75.9 34 75.9 75.9-34 75.9-75.9 75.9z"></path>
                            <path d="M135 76.1H65c-.7 0-1.3.6-1.3 1.3v4c0 .7.6 1.3 1.3 1.3h70c.7 0 1.3-.6 1.3-1.3v-4c0-.7-.6-1.3-1.3-1.3z"></path>
                        </g>
                        
                    </svg>
                    <a class="button" href=needs.php>Our Needs</a>
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