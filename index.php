<?php
require_once('getimages.php');
$latest_menu = get_images('menus', true);
$menu_date = date_from_filename($latest_menu);
$gallery = get_images('gallery');
$delivery = get_delivery_string();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Social share meta tags -->
  <meta property="og:title" content="The Tiffin">
  <meta property="og:description" content="Homecooked Punjabi Indian street food, delivered to you, in Kirkcaldy and Fife">
  <meta property="og:type" content="website">
  <meta property="og:image" content="img/foodpic.jpg">
  <meta property="og:site_name" content="The Tiffin">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Tiffin">
  <meta name="twitter:description" content="Homecooked Punjabi Indian street food, delivered to you, in Kirkcaldy and Fife">
  <meta name="twitter:image:src" content="img/foodpic.jpg">
  <!-- End social share meta tags -->
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/tiffin.css">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <title>The Tiffin</title>
  <meta name="description" content="Homecooked Punjabi Indian street food, delivered to you, in Kirkcaldy and Fife">
</head>
<body>
  <header>
    <h1><img src="img/logo2.png" alt="The Tiffin" /></h1>
  </header>
  <main>
    <section id="intro">
      <h2>Delicious Punjabi street food, from our home to yours.</h2>
      <p>
Let us cook for you in our <a href="#contact">newly refurbished restaurant</a> at 89 Victoria Road, Kirkcaldy,
or <a href="#order">order now</a> for delivery to enjoy at home.

We offer delicious homemade samosa and pakora, a selection of rich and spicy curry dishes,
a variety of creamy dahls, soft chapatis, and fragrant rice.
We cook everything ourselves from scratch, using traditional Indian methods, and local Scottish ingredients.
Our customers say we serve the best Indian takeaway in Kirkcaldy!
      </p>
      <p>
All of our dishes are vegetarian and vegan friendly, and can be made gluten-free - just let us know when ordering.
      </p>
    </section>
    <section id="hours">
<!--       <p>
        <img src="img/gallery/beans.jpg" alt="A glass bowl filled with a rich spicy black-eyed bean dahl, garnished with coriander." />
      </p> -->
      <h3>Opening times</h3>
      <ul>
<li><p>Tuesday to Thursday: 5pm - 10pm</p></li>
<li><p>Friday to Saturday: 12pm - 10pm</p></li>
<li><p>Sunday to Monday: closed</p></li>
      </ul>
    </section>
    <section id="order">
      <h3>Order for delivery by social media or phone</h3>
      <p class="center-sm">
<a href="#menu" class="btn">See our menu</a>
        <span class="social">
          <a href="https://www.facebook.com/TheTiffin2020" target="_blank"><img src="img/icon_fb.png" alt="Facebook" title="The Tiffin on Facebook" /></a>
          <a href="https://wa.me/447480112136" target="_blank"><img src="img/icon_wa.png" alt="WhatsApp" title="The Tiffin on Whatsapp" /></a>
          <a href="#" target="_blank"><img src="img/icon_insta.png" alt="Instagram" title="The Tiffin on Instagram" /></a>
          <a href="tel:+447480112136"><img src="img/icon_phone.png" alt="Telephone" title="Contact The Tiffin by phone" /></a>
        </span>
      </p>
    </section>
    </section>
  </main>
  <aside>
    <section id="gallery">
      <?foreach($gallery as $image):?>
<img src="<?=$image?>" alt="Mouthwatering food from The Tiffin" />
      <?endforeach?>
    </section>
    <section id="about">
      <h3>About us</h3>
      <p>
        <img src="img/tonyandpriya.jpg" alt="Tony and Priya in orange Tiffin aprons in a kitchen, smiling. Priya holds curry and rice, and Tony holds a large open flatbread with pakoras and salad." />
      </p>
      <p>
The Tiffin is a small family business, specialising in vegan Punjabi street food.
      </p>
      <p>
We are based in Kirkcaldy, Fife, and you can often find us at markets around The Kingdom.
      </p>
      <p>
Priya and Tony run the business, helped by our little princess who plays a vital part in social media pictures and ideas. We also have members of our family who help us to run our social media pages and help us out when we need some extra hands. We would like to thank everyone as The Tiffin wouldn't be possible without everyone's help!
      </p>
      <p>
Priya originally comes from Delhi in India, and has been taught everything from her mother and grandmother, using traditional methods that have been running in the family for many generations.
We started the business as a trial upon requests from friends and family who loved Priya's cooking and always said we must do this professionally.
      </p>
    </section>
    <section id="menu">
      <h3>Starters</h3>
      <div id="dishes">
        <div>
<h4>Vegetable samosa</h4>
<span class="price">&pound;3.95</span>
<p>Crispy pastry pockets stuffed with delicious spiced vegetables and potato</p>
        </div>
        <div>
<h4>Haggis samosa</h4>
<span class="price">&pound;3.95</span>
<p>Traditional samosa with a Scottish twist</p>
        </div>
        <div>
<h4>Onion bhaji</h4>
<span class="price">&pound;2.95</span>
<p>Crispy battered onion, served with chutney</p>
        </div>
        <div>
<h4>Avocado pakora</h4>
<span class="price">&pound;2.95</span>
<p>Soft avocado in crispy batter, served with chutney</p>
        </div>
      </div>
      <h3>Main dishes</h3>
      <div id="dishes">
        <div>
<h4>Khadi pakora</h4>
<span class="price">&pound;9.95</span>
<p>Everyone's favourite gram flour curry</p>
        </div>
        <div>
<h4>Bombay potatoes</h4>
<span class="price">&pound;9.95</span>
<p>Potato wedges slow cooked in rich masala</p>
        </div>
        <div>
<h4>Aloo gobi</h4>
<span class="price">&pound;2.95</span>
<p>Cauliflower and potato curry</p>
        </div>
      </div>
      <h3>Side dishes</h3>
      <div id="dishes">
        <div>
<h4>Jeera rice</h4>
<span class="price">&pound;1.95</span>
<p>Rice with cumin seeds</p>
        </div>
        <div>
<h4>Etc etc</h4>
<span class="price">&pound;2.95</span>
<p>And so on...</p>
        </div>

      </div>
    </section>
  </aside>
  <footer>
    <section id="contact">
      <h3>Contact</h3>
      <p>
You can find us at <strong>89 Victoria Road, Kirkcaldy,</strong> Fife, Scotland.</p>
      </p>
      <p>
We love to hear from you by social media, phone or email:
      </p>
      <ul>
        <li><a href="tel:+447480112136"><img src="img/icon_phone.png" alt="Tel:" /> 07480 112 136</a></li>
        <li><a href="mailto:thetiffin01@gmail.com"><img src="img/icon_email.png" alt="Email:" /> thetiffin01@gmail.com</a></li>
        <li><a href="https://wa.me/447480112136"><img src="img/icon_wa.png" alt="WhatsApp:" /> +44 7480 112 136</a></li>
        <li><a href="https://www.facebook.com/TheTiffin2020"><img src="img/icon_fb.png" alt="Facebook:" /> TheTiffin2020</a></li>
        <li><a href="#"><img src="img/icon_insta.png" alt="Instagram:" /> TheTiffin2020</a></li>
      </ul>
    </section>
    <section id="map">
      <a href="geo:56.117064,-3.159086" id="noscript"><img src="img/map.png" alt="A map of Kirkcaldy with a marker at The Tiffin's location on Victoria Road" /></a>
      <div id="themap" style="display:none"></div>
    </section>
  </footer>
  <script>
    document.getElementById("themap").style.display = "block";
    document.getElementById("noscript").style.display = "none";
  </script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script>
    var layer = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "&copy; <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors"
    });
    var map = new L.Map("themap", {
        center: new L.LatLng(56.117064, -3.159086),
        zoom: 14
    });
    map.addLayer(layer);

    var marker = new L.Marker([56.117064, -3.159086]).addTo(map);
    var popup = L.popup();
    marker.bindPopup("<a href=\"geo:56.117064,-3.159086\">The Tiffin, 89 Victoria Road, Kirkcaldy</a>")

  </script>
</body>
</html>
