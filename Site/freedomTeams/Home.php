<!DOCTYPE html>
<html>
    <?php 
    require '../../../PrivateFT/Connection.php'

	?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <link rel="stylesheet" href="../CSSLayouts/home.css">
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
                    <div class="odd"><h2>For</h2></div>
                </div>
                <div class="contentBox">
                    <div class="even"><h1>Freedom</h1></div>
                </div>
                <div class="contentBox">
                    <div class="odd"><h1>Christ</h1></div>
                </div>
                <div class="contentBox">
                    <div class="even"><h2>Has Set Us Free</h2></div>
                </div>
                <div class="contentBox">
                    <div class="even"><p>Galatians 5:1</p></div>
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
   
        <script>
            //this script runs in the <script src="../scripts/Toggle-Theme.js" defer<script> in the other files. left here for postarity
            //we aren't using Jquery locally because this is a website aplication so there is always a network connection, this saves space on the server and its assets but puts a little extra strain an the internet conection, but is also much easier to update.
            
            //the document ready works as a sort of main to run the jquery in
            $(document).ready(function() {
            // toggle the nav so that its hidden until the menu button is clicked
                function toggleNav() {
                    //adds the show class to nav. the toggleCLass adds or drops the show based on whether .show is in the class list
                    $("nav").toggleClass("show");
                }

            //show the submenu when the arrow is clicke. this appoximates the hover feature
                function toggleSubnav(arrowId) { 
                    //arrow id is a simple int either one or two
                    var subnavId = "sub" + arrowId; 
                    //this will be set to either sub1 or sub2 
                    var subnav = $("#" + subnavId + " > li"); //we are buildin a sting to select the right items the "#" tells the jquery that we are selecting a id
                    subnav.toggleClass("show");
                }

                // add event listeners to the buttons
                $("#hamburg-btn").click(function() {
                    toggleNav();
                });

                $("#arrow1").click(function() {
                    //we would use the this() feature to make the code neater but the arrow had to be between the <li>'s for me to style properly
                    toggleSubnav(1);
                });

                $("#arrow2").click(function() {
                    toggleSubnav(2);
                });
                 
            });
        </script>
    </body>
    
</html>