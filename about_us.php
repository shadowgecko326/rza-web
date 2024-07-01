<!DOCTYPE html>
<html>
<head>
    <!-- links the stylesheet -->
    <link rel="stylesheet" href="aucss.css">
    <!-- will be shown in the browser search bar -->
    <title>RZA - About us</title>
</head>

<body>
    <!-- containers all the assets in the nav bar-->
<nav class="navbar">
        <!-- displays logo image and attached hylerlink making it a clickable image   -->
        <div class="logo"><a href="homepage.php"><img src="images/logo.jpg" alt="Logo" style="width:70%"></a></div>

        <!-- div class used to make the menu into a display wrap -->
        <div class="sub-menu-wrap" id="submenu">
            <!-- used to design the sub menu-->
            <div class="sub-menu">
                <!-- used to hold all the user info and is used to style it -->
                <div class="user-info">
                    <!-- displays users default image  -->
                    <img src="images/user_def_img.JPG">
                    <!-- this is used so when the user is not logged in guest is displayed and when logged in the name of the account is pulled from the sql database-->
                    <?php
                session_start();
                    if (isset($_SESSION["name"])) {
                echo "". $_SESSION["name"];
                } 
                else {
                echo "Guest";
                }
                ?> 
                </div>
                <!-- this is a button which is on the dropdown account menu where the links are stored -->
                <hr>
                <!-- used to design the submenu  -->
                <a href="#" class="sub-menu-link">
                    <!-- displays edit image  -->
                    <img src="images/edit.jpg" alt="">
                    <!-- changes the font size so its bigger -->
                    <p style="font-size:18px">Edit Profile</p>
                </a>
                <a href="#" class="sub-menu-link">
                    <!-- displays settings image  -->
                    <img src="images/settings.jpg" alt="">
                    <!-- changes the font size so its bigger -->
                    <p style="font-size:18px">Settings</p>
                </a>
                <a href="contact_us.php" class="sub-menu-link">
                    <!-- displays help and support image  -->
                    <img src="images/h&s.jpg" alt="">
                    <!-- changes the font size so its bigger -->
                    <p style="font-size:18px">Help & Support</p>
                </a>
                
                <!-- this php code is used for the login and logout button for when the user is logged in diplay logout button and when logged out display login button -->
                    <div class="sub-menu-link">
            <?php if(isset($_SESSION['id'])): ?>  
                <!-- when logged in display logout button -->
                <a class="sub-menu-link" href="logout.php">
                    <!-- displays logout image  -->
                <img src="images/logout.jpg" alt="">
                <!-- changes the font size so its bigger --> 
                <p style="font-size:18px">Logout</p>
                </a>
                <!-- when logged out display login button -->
             <?php else: ?> 
                <a class="sub-menu-link" href="login.php">
                <!-- will display the login image -->
                <img src="images/login.jpg" alt="">     
                <!-- changes the font size so its bigger -->
                <p style="font-size:18px">Login</p>
                </a>
             <?php endif; ?>
        </div>

            </div>
        </div>
  

        </div>
        <!-- contains all the links when the dropdown links isnt showing -->
        <div class="links">
            <ul>
                <!-- hyperlinks to zoo bookings and reserves page  -->
                <li><a href="zoobooking.php">Zoo booking and reserves</a></li>
                <!-- hyperlink to hotel booking page-->
                <li><a href="hotelbooking.php">Hotel booking</a></li>
                <!-- hyperlink to learning and resourses page -->
                <li><a href="learningandresourses.php">Animals and resourses</a></li>
                <!-- hyperlinks to about us page -->
                <li><a href="about_us.php">About us</a></li>
                <!-- hyperlink to contact us page -->
                <li><a href="contact_us.php">Contact us</a></li>
            </ul>
        </div>
    </div>
    <!-- this image is a clickable image where when clicked on it will activate a script to dropdown the menu -->
    <div class="userimg"><img src="Images/user_def_img.JPG" alt="Avatar" class="user-pic" onclick="toggleMenu()"></div>
    
    <!-- this is the dropdown of links where when the page is too small it will show -->
    <div class="dropdown">
    <button class="dropbtn">⬇Dropdown⬇</button>
    <!-- class which when actiavted the dropdown links are shown  -->
    <div class="dropdown-content">
        <a href="zoobooking.php">Zoo booking and reserves</a>
        <!-- hyperlink to zoo booking and reserves -->
        <a href="hotelbooking.php">Hotel booking</a>
        <!-- hyperlink to hotel booking page -->
        <a href="learningandresourses.php">Animals and resourses</a>
        <!-- hyperlink to about us page -->
        <a href="about_us.php">About us</a>
        <!-- hyperlink to contact us page -->
        <a href="contact_us.php">Contact us</a>
    </div>
    </div>
    </nav>


    <!-- i used breaks to space the h1 away from the nav bar -->
    <br><br><br><br><br>
    <!-- this is the title with the class h1 -->            
    <div class="h1">
        <h1>About us</h1>
        </div>

<br>

<!-- class that holds the images and text -->
<div class="container1">

<!-- context 1 is an image and text  -->
<div class="context1">
    <div class="image-container">
        <img src="Images/ab1.jpg" alt="Image description">
    </div>
    <!-- holds the description -->
    <div class="desc">
        <p>sample text:Zoos serve as an ideal destination for families, captivating visitors with a myriad of enriching experiences tailored to all ages. Renowned for their diverse animal exhibits spanning continents, zoos offer an immersive journey into the fascinating realms of wildlife. From the majestic lions of the African savannah to the playful dolphins of the ocean depths, each exhibit provides an invaluable opportunity for children to connect with nature on a profound level.</p>
    </div>
</div>


<!-- context 2 is an image and text  -->
<div class="context2">
    <div class="image-container">
        <img src="Images/ab2.jpg" alt="Image description">
    </div>
    <!-- holds the description -->
    <div class="desc">
        <p>sample text:Zoos serve as an ideal destination for families, captivating visitors with a myriad of enriching experiences tailored to all ages. Renowned for their diverse animal exhibits spanning continents, zoos offer an immersive journey into the fascinating realms of wildlife. From the majestic lions of the African savannah to the playful dolphins of the ocean depths, each exhibit provides an invaluable opportunity for children to connect with nature on a profound level.</p>
    </div>
</div>



<!-- context 3 is an image and text  -->
<div class="context3">
    <!-- holds the image -->
    <div class="image-container">
        <img src="Images/ab3.jpg" alt="Image description">
    </div>
    <!-- holds the description -->
    <div class="desc">
        <p>sample text:Zoos serve as an ideal destination for families, captivating visitors with a myriad of enriching experiences tailored to all ages. Renowned for their diverse animal exhibits spanning continents, zoos offer an immersive journey into the fascinating realms of wildlife. From the majestic lions of the African savannah to the playful dolphins of the ocean depths, each exhibit provides an invaluable opportunity for children to connect with nature on a profound level.</p>
    </div>
</div>


</div>

<!-- this is used to have space at the bottom of the page so the content doesnt clash with the footer -->
<div class="fill"></div>
<div class="fill"></div>


<!-- this is the footer where at the bottom of the page there is a big cube eg used for the design -->
<footer></footer>

</body>


<!-- this scipt is used for the dropdown menu where when the image is pressed this script is activated -->
<script>
let submenu = document.getElementById("submenu");
  function toggleMenu(){
    submenu.classList.toggle("open-menu");
  }
</script>

</html>


