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
    <link rel="stylesheet" href="../CSSLayouts/resources.css">
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
            
                
                <h1>Resources from Team Members</h1>
                
                <div class="contentBox">
                    <p>
                        <a href="https://scottlynn.org/">Scott and Lynn DeGroff Blog</a>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Go-Forward-Moving-Generation-Wholly-ebook/dp/B096G8C2Q4">Go Forward – Moving Forward as a Generation Wholly for Christ</a>
                    </p>
                    
                    <img src="Assets/pictures/books/goForward.webp">
                    
                </div>
                
                <h1>Recommended Books</h1>
                
                <div class="contentBox">
                    
                    <a href="https://www.gospelfolio.com/product/god-still-speaks/">God Still Speaks - William MacDonald</a>
                    <img src="Assets/pictures/books/GodStillSpeaks.webp">
                    
                </div>
                <div class="contentBox">
                    
                    <a href="https://www.gospelfolio.com/product/they-found-the-secret/">They Found the Secret - V. Raymond Edman</a>
                    <img src="Assets/pictures/books/TheyFoundtheSecret.webp">
                    
                </div>
                <div class="contentBox">
                   

                    <a href="https://www.amazon.com/What-If-Jesus-Meant-Said/dp/1593872860">What If Jesus Meant What He Said - Nate Bramsen </a>
                    <img src="Assets/pictures/books/whatIf.webp">
                    
                </div>
                <div class="contentBox">
                    
                    <a href="https://www.amazon.com/Believers-Bible-Commentary-William-MacDonald/dp/0718076850/ref=sr_1_1?crid=207RW9N1JUNC6&keywords=believers+bible+commentary+william+macdonald&qid=1663636906&sprefix=believers+bible%2Caps%2C220&sr=8-1">Believers Bible Commentary - William McDonald</a>
                    <img src="Assets/pictures/books/BeliebersBible.webp">
                    
                </div>
                <div class="contentBox">
                    
                    <a href="https://www.amazon.com/Andrew-Murray-Books-Christ-Original/dp/1979088551/ref=sr_1_1?crid=1QMFD1RACBCZ0&keywords=abide+in+christ+by+andrew+murray&qid=1663637214&sprefix=abude+in+christ%2Caps%2C173&sr=8-1">Abide In Christ - Andrew Murray</a>
                    <img src="Assets/pictures/books/Abide.webp">
                </div>
                <div class="contentBox">
                    
                    <a href="https://www.amazon.com/Pursuit-Holiness-Jerry-Bridges/dp/1631466399/ref=sr_1_1?crid=327GUL3QK1LQJ&keywords=pursuit+of+holiness&qid=1663639766&sprefix=pursuit+of%2Caps%2C158&sr=8-1">The Pursuit of Holiness - Jerry Bridges</a>
                    <img src="Assets/pictures/books/Pursuit.webp">
                    
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