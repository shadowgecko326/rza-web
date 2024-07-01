<!DOCTYPE html>
<html>
<head>
    <!-- to link to stylesheet -->
    <link rel="stylesheet" href="zb.css">
    <!-- will be shown in the browser search bar -->
    <title>RZA - Zoo booking</title>
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




<!-- this container holds the container after the homepage banner -->
<div class="container1">
 

<div class="ticket-board">
  <h2>Ticket Prices</h2>
  <table>
    <thead>
      <tr>
        <th>Age Group</th>
        
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>5-10</td>
        <td>Free</td>
      </tr>
      <tr>
        <td>11-13</td>
        <td>£5.00</td>
      </tr>
      <tr>
        <td>14-16</td>
        <td>£8.00</td>
      </tr>
      <tr>
        <td>18+</td>
        <td>£10.00</td>
      </tr>
    </tbody>
  </table>
</div>

</div>

<div class="fill"></div>

<!-- this cotainer holds the 3rd container holding hyperlink buttons and 3 images -->
<div class="container2">
    
  


</div>

<!-- this is used to have space at the bottom of the page so the content doesnt clash with the footer -->
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
