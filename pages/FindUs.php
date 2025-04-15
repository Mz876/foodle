<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Us</title>
    <link rel="stylesheet" href="../css/findUs.css">
    <link rel="stylesheet" href="../css/findUs-repo.css">
    <link rel="stylesheet" href="../css/animations.css">
</head>

<body>
   
    <header>
        <nav>
            <a  class="title" id="title" href="home.php">Foodle</a>
            <div class="mid">
                <a id="home" class="different" href="home.php">Home</a>
                <a id="menu" class="different" href="menu.php?Category=1">Menu</a>
                <a id="about" class="different" href="about.php">About Us</a>
                <a id="find" class="different" href="FindUs.php">Find Us</a>
            </div>
            <div class="auth">
                <a href="">Login</a>
                <a href="">Sign Up</a>
                <img id="humb-Icon" src="../images/icons/humbergur icon.png" alt="">
            </div>
        </nav>

    </header>
    <div class="side-bar" id="side-bar">
        <div>
           <img id="close" src="../images/icons/close.png" alt="">
        </div>
        <ul>
           <li>
               <a href="home.php">Home</a>
           </li>
           <li>
               <a href="menu.php?Category=1">Menu</a>
           </li>
           <li>
               <a href="about.php">About Us</a>
           </li>
           <li>
               <a href="FindUs.php">Find Us</a>
           </li>
        </ul>
   </div>
    <div class="food-location-1">
        <div class="food-container">
            <div class="info">
                <h2 id="sidon">Sidon</h2>
                <p id="location" >Near Dr.Nabih Bezri<br />High School</p>
                <h4 id="time">
                    OPEN EVERYDAY
                </h4>
                <span id="btw">12.00 PM - 2.00 AM</span>
                <button id="directionBtn">Get Direction</button>
            </div>
        </div>
        <img src="../images/food/pizza-1.jpg" alt="">

    </div>
    <div class="food-location-2">
        <img src="../images/food/Ajinah.jpg" alt="">

        <div class="food-container">
            <div class="info">
                <h2 id="beirut">Beirut</h2>
                <p id="location2">Near Rawsha Rock<br />Beside Avenue One restaurent</p>
                <h4 id="time2">
                    OPEN EVERYDAY
                </h4>
                <span id="btw2">12.00 PM - 2.00 AM</span>
                <button id="directionBtn2">Get Direction</button>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="cards">
            <div   id="burger">
                <img src="../images/food/Mixy Burger.jpg" alt="">
            </div>
            <div id="menu" class="menu-card">
                <span>OUR</span>
                <h2>MENUS</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et ducimus, aspernatur beatae cumque vero,
                    dicta veritatis non adipisci, blanditiis incidunt culpa. Tenetur aliquid officiis iste.</p>

                <a href="">VIEW MENUS</a>
            </div>
            <div id="delivery" class="delivery-card">
                <span>ORDER</span>
                <h2>DELIVERY</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et ducimus, aspernatur beatae cumque vero,
                    dicta veritatis non adipisci, blanditiis incidunt culpa. Tenetur aliquid officiis iste.</p>
                <a href="">ORDER ONLINE</a>
            </div>
        </div>
        <div class="subscribe">
            <div>
                <h3>SUBSCRIBE NOW</h3> 
            </div>
            <div class="signUp">
                <div >
                     <p>Subscribe now to receive freash<br />deals & offers by email</p>
                 </div>
                <form action="../subscription.php" method="post">
                    <input placeholder="Email" name="email" type="email">
                    <button type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h2>Foodish</h2>
                <p>Continue Foodish 2024 all right reserved</p>
                <h2>Follow Us On</h2>
                <div class="icons">
                    <img src="../images/icons/pinterest-logo.png" alt="">
                    <img src="../images/icons/instagram (1).png" alt="">
                    <img src="../images/icons/facebook.png" alt="">
                    <img src="../images/icons/tik-tok.png" alt="">
                </div>
            </div>
            <div>
                <h2>Menu</h2>
                <ul>
                    <li>Home</li>
                    <li>Offers</li>
                    <li>Service</li>
                    <li>About Us</li>
                </ul>
            </div>
            <div>
                <h2>Information</h2>
                <ul>
                    <li>Menu</li>
                    <li>
                        Quality
                    </li>
                    <li>
                        Make a Choice
                    </li>
                    <li>
                        Salad With Vegetable
                    </li>
                    <li>
                        Fast Delivery
                    </li>
                    <li>
                        Subscribe
                    </li>
                </ul>
            </div>
            <div>
                <h2>Contact</h2>
                <ul>
                    <li>+123 456 789</li>
                    <li>
                        Explore
                    </li>
                    <li>
                        info@Foodish.Com
                    </li>
                    <li>
                        1234, New York, USA
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="../js/index.js"></script>
    <script>
        
const nav = document.getElementById('nav')

window.addEventListener('scroll',function(){

  if(this.window.scrollY > 50){
    
    if(nav){
        nav.classList.add("scrolled");

    }

  }else{

    if(nav){
        nav.classList.remove("scrolled");

    }

}

});


    </script>
</body>

</html>