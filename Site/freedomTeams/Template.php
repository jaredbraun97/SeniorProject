<!DOCTYPE html>
<html>
    <?php 
    require '../../../PrivateFT/Connection.php'

	?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSSLayouts/donate.css">
    <link id="theme" rel="stylesheet" href="../CSS themes/Light.css">
    <script src="../scripts/Toggle-Theme.js" defer></script> 
    <!-- difer runs the script after the css and html have been parsed -->
    
    
      <title>Freeedom Teams</title>
</head>
    <header>
        <div class="Header">
            <div><img src="Assets/logo.webp"  ></div>
            <div><p1>"For Freedom Christ Has Set Us Free"</p1></div>
            <div><p2>Galatians 5:1</p2></div>
        </div>
    </header>
    <body>
       
       
        <div class="navbar">
       
            
            
            
            <!-- Nav bar items-->
            <nav>
              
                <ul class="navlist">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Three-Fold-Burden.php">Three Fold Burden
                        <span class="arrow">&#9660;</span>
                    </a>
                        <ul class="subnav">
                            <li><a href="local-work.php">Local Work</a></li>
                            <li><a href="dicipleship.php">Discipleship</a></li>
                            <li><a href="new-works.php">New Works</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="Prayers-and%20giving.php">Prayers And Giving
                        <span class="arrow">&#9660;</span>
                        </a>
                         <ul class="subnav">
                            <li><a href="donate.php"\>Donate</a></li>
                            <li><a href="prayer.php">Prayer</a></li>
                            <li><a href="needs.php">Needs</a></li>
                        </ul>
                    </li>

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
                    <h1>"Yet it was kind of you to share."</h1>
                    <h1> Philippians 4:14</h1>
                    <h1>Online giving for Freedom Teams:</h1>
                    <p>You can give to FREEDOM TEAMS below or by mailing a check to this address: </p>
                    <p>PO Box 1570</p>
                    <p>Freedom, CA 95019</p>
                    <p>If you want to give to an INDIVIDUAL on the team please scroll down.</p>
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
                     <div class="DonateBtn"><a href="donate.html"\>Click to Donate</a></div>
                    
                </div>
                    
        </div>
         <!-- =============End to footer content ================ -->
   
        <script>
            const hamburg = document.querySelector('#hamburg-btn');
            const nav = document.querySelector('nav');
            hamburg.addEventListener("click", () => {
                nav.classList.toggle('show')
            }
            )
        </script>
    </body>
    
</html>