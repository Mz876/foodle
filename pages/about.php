<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/about-resp.css">
    <link rel="stylesheet" href="../css/animations.css">
</head>
<body>
    <header>
        <nav id="nav">
            <a href="home.php" class="title" id="title">Foodle</a>
            <div class="mid">
                <a id="home" class="different" href="home.php">Home</a>
                <a id="menu" class="different" href="menu.php?Category=1">Menu</a>
                <a id="about" class="different" href="about.php">About Us</a>
                <a id="find" class="different" href="FindUs.php">Find Us</a>
            </div>
            <div class="L-nav">
                <a href="">Login</a>
                <a href="">Sign Up</a>
                <img src="../images/icons/humbergur icon.png" id="humb-Icon" class="show-bar-show" alt="">
            </div>
        </nav>
        <div class="about">
             <h1>ABOUT US</h1>
         </div>
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

    <div class="fish-burger">
        <h2>HAVE IT YOUR WAY</h2>
        <div>
            <p><span>ORIGINAL</span><br />FISH<br /> BURGER</p>
            <img src="../images/food/Fish Burger.png" alt="">
        </div>
    </div>
    <div class="tomato-sauce">
        <img src="../images/food/tomato sauce.jpg" alt="">
        <div>
            <h2>Present</h2>
            <p id="first">TOMATO<br />ORIGINAL<br /><span>Sauce</span></p>
            <span  id="signature">OUR SIGNATURE HANDMADE BEEF PATTY</span>
            <p class="desc" id="desc">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet cumque rem sed doloremque eum quaerat
                quisquam consequuntur corrupti sequi explicabo.
            </p>
            <a id="btn" href="menu.php?Category=1">VIEW MENUS</a>
        </div>
    </div>
    <div class="salad">
        <div>
            <h2>ALWAYS</h2>
            <p id="second"><span class="fresh">FRESH</span><br/> SALAD</p>
            <span id="signature2">LIFE IS LIKE A BURGER THE MORE YOU ADD TO IT, THE BETTER IT COMES</span>
            <p class="desc2" id="desc2">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet cumque rem sed doloremque eum quaerat
                quisquam consequuntur corrupti sequi explicabo.
            </p>
            <a id="btn2" href="menu.php?Category=1">VIEW MENUS</a>
        </div>
        <img src="../images/food/salad.jpg" alt="">

    </div>
    <div class="subscribe">
        <h2>SUBSCRIBE NOW</h2>
        <div>
            <p>
                Subscribe now to receive fresh<br/> deals & offers by email
            </p>
             <form action="../subscription.php" method="post">
                <input type="email" name="email" class="email" placeholder="Email">
                <button class="sign-btn" type="submit">
                    Sign up
                </button>
            </form> 
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
    
    nav.classList.add("scrolled");

  }else{
    nav.classList.remove("scrolled");
  }

});

    </script>
</body>

</html>