<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS main stylesheet -->
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/merchandise.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <title>Merchandise</title>
  </head>
  <body>
    <?php
    session_start();


    ?>
    <header>
      <img src="Images/Logo 70px.png" alt="logo" id="logo" />
      <!--Logo-->
      <nav>
        <ul class="nav_links">
          <li><a href="./index.html">Home</a></li>
          <li><a href="./merchandise.php">Merchandise</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contactUs.html">Contact Us</a></li>
        </ul>
      </nav>
      <button class="dropbtn">
        <i class="fas fa-bars"></i>
      </button>
      <a href="basket.php" id="Basket"><i class="fas fa-shopping-cart"></i></a>
    </header>
    <div class="mobileNav show-links">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./merchandise.php">Merchandise</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contactUs.html">Contact Us</a></li>
          <li><a href="./basket.php">Basket</a></li>
        </ul>
      </div>
    <br /><br /><br />
    <div class="wrapper">
      <div class="merchandiseBanner">
        <div class="bannerBg"></div>
        <div class="backgroundContent">
          <h1>MUGS</h1>
        <br />
        <h3>
          Our beautifully designed, hand-made mugs are the perfect gift for any
          nature enthusiast. <br />
          They are all microwave and dishwasher safe, so once you buy them –
          they stay with you forever.
        </h3>
        <br />
        </div>
      </div>
      <div>
        <p>
          <img src="Images\naturall mug (1).png" alt="mug" id="mug" class="mugs" /><br />
          <b>MUG 1</b> <br /><br />
          Make your morning cuppa something special with our
          <!--mug name here -->
          mug. It’s very stylish and solid. <br />
          Made of earthenware, it’s safe to put it in a microwave and reheat the
          tea you forgot about yesterday and then wash it in a dishwasher if
          you’re lucky enough to have one.<br /><br />
          Capacity: 280 ml<br />
          Height: 9 cm<br />
          Material: Earthenware<br />
          Country of origin: UK<br />
          Dishwasher safe: YES<br />
          Microwave safe: YES<br />
        </p>
        <br />
      </div>
      
      <div>
        <img src="Logo-and-page-design/shirt.png" <br />
        <b>MUG 2</b> <br /><br />
        Big mug for your first Monday coffee (and next five of them)!
        <br />Perfect to deal with work colleagues, hundreds of emails and tasks
        that were due last week. <br />
        Or was it two weeks ago? Well, guess it’s time for next coffee!
        <br />Don’t hesitate to use your
        <!--mug name here-->
        as much as you need.<br /><br />
        Capacity: 400 ml<br />
        Height: 12 cm<br />
        Material: Earthenware<br />
        Country of origin: UK<br />
        Dishwasher safe: YES<br />
        Microwave safe: YES<br />
      </p>
      <br />
      </div>
     <div class="merchandiseBanner">
       <div class="bannerBg"></div>
       <div class="backgroundContent">
         <h1>T-SHIRTS</h1>
      <br />
      <h3>
        Naturall is making nature fashionable for everyone. <br />We are using
        only 100% organic cotton and all of our products are Fairtrade.
      </h3>
      <br /><br />
       </div> 
      </div>
      <div>
<p>
        <img src="Logo-and-page-design/shirt.png" <br />
        <b>Tshirt 1 (Women)</b> <br /><br />
        Comfortable, soft and high quality<br />
        <!--tshirt name here-->
        T-shirt will go everywhere with you! Wear it for walks, campings and
        when you go to college. <br />
        Design is universal and pretty, and material is soft and breathable.
        <br /><br />
        Available sizes: XS, S, M, L, XL, XXL<br />
        Available colours: green, black, white<br />
        Material: 100% organic cotton<br />
        Wash: Machine wash, 30° <br />
      </p>
     </div>
     <div>
      <p>
        <img src="Logo-and-page-design/shirt.png" <br />
        <b>Tshirt 2 (Men)</b> <br /><br />
        An everyday essential but with a twist.
        <!--tshirt name here-->
        <br />T-shirt is designed for all men who want to live actively and
        still look great. <br />
        Material is comfortable and breathable, and has a beautiful print in
        front. <br /><br />
        Available sizes: XS, S, M, L, XL, XXL<br />
        Available colours: black, white, blue<br />
        Material: 100% organic cotton<br />
        Wash: Machine wash, 30° <br />
      </p>
     </div>
    </div>
    <script src="Javascript/main.js"></script>
  </body>
</html>
