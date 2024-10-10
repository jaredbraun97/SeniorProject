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