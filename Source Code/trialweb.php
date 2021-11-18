<?php
// Initialize the session
session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroMate.in</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="progress"></div>
    <div class="container1">
        <div class="navbar1">
            <i class="fas fa-truck"></i>
            <p>&nbsp;&nbsp;&nbsp;Free Shipping for orders above Rs500</p>
        </div>
        <div class="navbar2">
            <ul>
                <li class="listitems1"><a href="About.html">About</a></li>
                <li class="listitems1"><a href="Contact.html">Contact</a></li>
                <li class="listitems1"><a href="Help_Center.html">Help Center</a></li>
                <li class="listitems1"><a href="Call_us.html">Call Us 123-321</a></li>
            </ul>
        </div>
    </div>
    <div class="container2">
        <div class="navbar3">
            <i>
                <p>ElectroMate</p>
            </i>
            <i>
                <p>.in</p>
            </i>
        </div>
        <div class="searchbar">
            <input type="text" placeholder="Search..." id="search">
            <i class="fas fa-search" id="symbol"></i>
        </div>
        <div class="navbar4">
            <ul>
                <li class="listitems2"><i class="fas fa-user-circle"></i>&nbsp;<?php echo htmlspecialchars($_SESSION["name"]); ?></li>
                <li class="listitems2"><i class="fas fa-heart"></i>&nbsp;Favorites</li>
                <li class="listitems2"><i class="fas fa-shopping-cart"></i></li>
            </ul>
        </div>
    </div>
    <div class="container3">
        <div class="navbar5">
            <ul>
                <li class="listitems3">Shop All</li>
                <li class="listitems3">Computers</li>
                <li class="listitems3">Mobile</li>
                <li class="listitems3">Drones</li>
                <li class="listitems3">Camera</li>
                <li class="listitems3">Wearable Tech</li>
            </ul>
        </div>
    </div>
    <div class="container4">
        <button id="btn1">Best Price</button>
        <div class="content">
            <p class="cont4">Incredible Prices <span><br></span>on All Your <span><br></span>Favorite Items</p>

        </div>
        <button id="btn2">Shop Now</button>
    </div>
    <div class="container5">
        <div class="image1">
            <img src="https://images.unsplash.com/photo-1510878933023-e2e2e3942fb0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGlwaG9uZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                height="420px" width="650px" class="images">
            <div class="imagecontent1">
                <p id="imgcnt1">Holiday Deals</p>
                <p id="imgcnt2">Up to</p>
                <p id="imgcnt3">30% off</p>
                <p id="imgcnt4">Selected Smartphone Brands</p>
                <button id="btn3">Shop</button>
            </div>
        </div>
        <div class="image2">
            <img src="https://wallpaperaccess.com/full/4221612.jpg" height="420px" width="650px" class="images">
            <div class="imagecontent2">
                <p id="cnt1">Just In</p>
                <p id="cnt2">Take Your</p>
                <p id="cnt3">Sound</p>
                <p id="cnt4">Anywhere</p>
                <p id="cnt5">Top Headphone Brands</p>
                <button id="btn4">Shop</button>
            </div>
        </div>
    </div>
    <div class="big">
    <div class="container6-1">
        <div class="conta1">
            <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/xlarge_wm_brb/public/field/image/2020/06/dell-xps-15-9500-1.jpg"
                class="image">
            <p class="name">Laptops</p>
        </div>
        <div class="conta2">
            <img src="https://fdn.gsmarena.com/imgroot/news/18/11/t-mobile-offering-free-4k-tv-when-buy-new-samsung-phone/-728w2/gsmarena_000.jpg"
                class="image">
            <p class="name">Mobile</p>
        </div>
        <div class="conta3">
            <img src="https://fdn.gsmarena.com/imgroot/news/20/04/oneplus-bullets-wireless-z-colors/-1220x526/gsmarena_000.jpg"
                class="image">
            <p class="name">Earphones</p>
        </div>
        <div class="conta4">
            <img src="https://img.freepik.com/free-vector/modern-sale-banner-with-text-space-area_1017-27331.jpg?size=626&ext=jpg"
                class="image">
            <p class="name">Sale</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container6-2">
        <div class="conta5">
            <img src="https://media.istockphoto.com/vectors/bestseller-label-bestseller-red-band-sign-bestseller-vector-id1187366305?k=20&m=1187366305&s=612x612&w=0&h=qnByqWXzBQ6uLozNc54xd3XIHKXpakkGf-T3pEo9u6g="
                class="image">
            <p class="name">Best Sellers</p>
        </div>
        <div class="conta6">
            <img src="https://ak.picdn.net/shutterstock/videos/2926018/thumb/1.jpg"
                class="image">
            <p class="name">Speakers</p>
        </div>
        <div class="conta7">
            <img src="https://media.istockphoto.com/photos/quadcopter-drone-with-4k-video-camera-flying-in-the-air-picture-id911190112?k=20&m=911190112&s=612x612&w=0&h=6mkFfZ_h5OVzYH_b0DVaYMdMZd86Zn8MZH89gWPJN0w="
                class="image">
            <p class="name">Drones & Cameras</p>
        </div>
        <div class="conta8">
            <img src="https://images-na.ssl-images-amazon.com/images/I/416VK2eT+mL.jpg" class="image">
            <p class="name">Wearable Tech</p>
        </div>
    </div>
</div>
</body>

</html>