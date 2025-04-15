<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodle</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/home-resp.css">
</head>


<body id="body">
     <header>
        <nav>
            <a class="title" id="title" href="home.php">Foodle</a>
            <div>
                <a id="home" class="different" href="home.php">Home</a>
                <a id="menu" class="different" href="menu.php?Category=1">Menu</a>
                <a id="about" class="different" href="about.php">About Us</a>
                <a id="find" class="different" href="FindUs.php">Find Us</a>
            </div>
            <div class="L-nav">
                <a href="" class="login">Login</a>
                <a href="" class="signup" >Sign Up</a>
                <img id="humb-Icon" class="humbergure-Icon" src="../images/icons/humbergur icon.png" alt="">
            </div>
        </nav>  
            <div class="main">
                <div class="main-1">
                  <h2>All Fast Food  is <br/>Available at Foodle</h2>
                  <p>We Are Just A Click Away When You<br/> Crave For Delicious Fast Food</p>
                  <div class="BO">
                    <div class="BuyNow"><a><img src="../images/icons/parcel.png" alt=""></a><span>Buy Now</span></div>
                    <div class="play"><a href="https://www.youtube.com/watch?v=D9bwnJclcas" target="_blank"><img src="../images/icons/play-button.png"  alt=""></a><span>How To Order</span></div>
                  </div>
                </div>
                     <img class="arrow" src="../images/dashed-arrow.png" alt="">
                 <div class="main-2">
                    <img src="../images/burger.png" alt="">
                </div> 
            </div>
            <div class="motivators">
                    <div class="motive">
                        <img src="../images/icons/fast-delivery.png" alt="">
                       <div>
                        <h3>Fast Delivery</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
                       </div>
                    </div>
                    <div class="motive">
                        <img src="../images/icons/cycle.png" alt="">
                        <div>
                            <h3>Fresh Food</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                        </div>
                    </div>
                    <div class="motive">
                        <img src="../images/icons/free.png" alt="">
                       <div>
                        <h3>Free Delivery</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                       </div>
                    </div>
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

    <div class="container">
        <div class="c-1">
            <h2>Best <span>Delivered</span><br/> Categories</h2>
            <h4>Here Are Some Of Our Best Distributed<br/> Categories. If You Want You Can Order<br/> From Here.</h4>
        </div>
        <div class="Categories">
            <div class="cat-1">
                <img src="../images/french fries.png" alt="Chicken Burger">
                <h3>French Fries</h3>
                   <span>Order Now</span>
            </div>
            <div class="cat-2">
                <img src="../images/french fries.png" alt="Chicken Pizza">
                <h3>French Fries</h3>
                <span>Order Now</span>
            </div>
            <div class="cat-3">
                <img src="../images/french fries.png" alt="French Fries">
                <h3>French Fries</h3>
                <span>Order Now</span>
            </div>
        </div>
        <div class="menu">
            <h2>Our <span>Regular</span> Menu</h2>
            <div id="m1" class="m-1">
                <h4>These Are Our Regular Menus. You Can<br/>Order Anything You Like.</h4>
                <a href="menu.php?Category=1">See All</a>
            </div>
            <div class="m-2">
            <?php

include '../inc/connection.php';

$sql = "SELECT * FROM food";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $counter=0;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="food">
                <div class="img">
                    <img src="../' . $row['db_foodImg'] . '" alt="">
                </div>
                <h3>' . $row['db_foodName'] . '</h3>
                <div class="rating">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                    <img src="../images/star.png" alt="">
                </div>
                <div class="buy">
                    <span>$' . $row['db_foodPrice'] . '</span>
                    <a target="_blank" href="https://wa.me/81736415" style="text-decoration:none;">Buy Now</a>
                </div>
            </div>';
            $counter++;
            if($counter>=6){
                break;
            }
    }
}
?>

                    
                    

 
         </div>
        </div>
        <div class="offers">
            <div class="L-Offers">
                <img src="../images/offers/Burger-Discount.jpg" alt="">
            </div>
            <div class="R-Offers">
                <img src="../images/offers/Tacos offer.jpg" alt="">
                <img class="offer-2" src="../images/offers/Bufflo Chicken Wings.jpg" alt="">
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
 </body>
</html>