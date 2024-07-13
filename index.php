<?php
require_once('getimages.php');
$latest_menu = get_images('menus', true);
$menu_date = date_from_filename($latest_menu);
$gallery = get_images('gallery');
$delivery = get_delivery_string();
$events = get_events();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Social share meta tags -->
  <meta property="og:title" content="The Tiffin">
  <meta property="og:description" content="Homecooked Punjabi street food, delivered to you, in Kirkcaldy and Fife">
  <meta property="og:type" content="website">
  <meta property="og:image" content="img/foodpic.jpg">
  <meta property="og:site_name" content="The Tiffin">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Tiffin">
  <meta name="twitter:description" content="Homecooked Punjabi street food, delivered to you, in Kirkcaldy and Fife">
  <meta name="twitter:image:src" content="img/foodpic.jpg">
  <!-- End social share meta tags -->
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/tiffin.css">
  <title>The Tiffin</title>
  <meta name="description" content="Homecooked Punjabi street food, delivered to you, in Kirkcaldy and Fife">
</head>
<body>
  <header>
    <h1><img src="img/logo2.png" alt="The Tiffin" /></h1>
  </header>
  <main>
    <section id="intro">
      <h2>Delicious vegan Punjabi street food, from our home to yours.</h2>
      <p>
Each week we offer a set menu for delivery, including starters, mains, dahl, rice and chapati.
Simply tell us how many people you want to order for, and a 30 minute delivery window,
and we will bring your food hot and fresh and ready to eat.
All you need to do is set the table.
      </p>
      <p class="center-sm">
<a href="#menu" class="btn">Order this week's menu</a>
<span class="social">
  <a href="https://www.facebook.com/TheTiffin2020" target="_blank"><img src="img/icon_fb.png" alt="Facebook" title="The Tiffin on Facebook" /></a>
  <a href="https://wa.me/447480112136" target="_blank"><img src="img/icon_wa.png" alt="WhatsApp" title="The Tiffin on Whatsapp" /></a>
  <a href="#" target="_blank"><img src="img/icon_insta.png" alt="Instagram" title="The Tiffin on Instagram" /></a>
  <a href="tel:+447480112136"><img src="img/icon_phone.png" alt="Telephone" title="Contact The Tiffin by phone" /></a>
</span>
      </p>
      <p>
<?if($delivery):?>
  <?=$delivery?>
<?else:?>
  We deliver on <strong>Fridays and Saturdays</strong>, from <strong>5:30pm to 9:30pm</strong>.
<?endif?>
      </p>
      <p>
Gluten-free meals are available - please let us know when ordering.
      </p>
    </section>
    <section id="menu">
      <img src="<?=$latest_menu?>" />
      <p><em>Menu last updated: <?=$menu_date?></em></p>
    </section>
    <section id="order">
      <h3>Place your order by social media or phone</h3>
      <p class="social">
        <a href="https://www.facebook.com/TheTiffin2020" target="_blank"><img src="img/icon_fb.png" alt="Facebook" title="The Tiffin on Facebook" /></a>
        <a href="https://wa.me/447480112136" target="_blank"><img src="img/icon_wa.png" alt="WhatsApp" title="The Tiffin on Whatsapp" /></a>
        <a href="#" target="_blank"><img src="img/icon_insta.png" alt="Instagram" title="The Tiffin on Instagram" /></a>
        <a href="tel:+447480112136"><img src="img/icon_phone.png" alt="Telephone" title="Contact The Tiffin by phone" /></a>
      </p>
    </section>
    <section id="markets">
      <h3>Find us</h3>
      <p>You can find us at local food festivals, artisan markets and other events around Scotland. Here's what we have coming up:</p>
      <?foreach($events as $date):?>
        <h4><?=$date["date"]->format("l jS F")?></h4>
        <ul>
        <?foreach($date["events"] as $event):?>
  <li><p><?=$event?></p></li>
        <?endforeach?>
        </ul>
      <?endforeach?>
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
  </aside>
  <footer>
    <section>
      <h3>Contact</h3>
      <p>
You can visit us every Friday, and the last Saturday of each month, at the <strong><a href="https://www.facebook.com/ArtisanFridays/" target="_blank">Artisan Market</a> in Kirkcaldy</strong>.
      </p>
      <p>
And you can contact us by social media, phone or email:
      </p>
      <ul>
        <li><a href="tel:+447480112136"><img src="img/icon_phone.png" alt="Tel:" /> 07480 112 136</a></li>
        <li><a href="mailto:thetiffin01@gmail.com"><img src="img/icon_email.png" alt="Email:" /> thetiffin01@gmail.com</a></li>
        <li><a href="https://wa.me/447480112136"><img src="img/icon_wa.png" alt="WhatsApp:" /> +44 7480 112 136</a></li>
        <li><a href="https://www.facebook.com/TheTiffin2020"><img src="img/icon_fb.png" alt="Facebook:" /> TheTiffin2020</a></li>
        <li><a href="#"><img src="img/icon_insta.png" alt="Instagram:" /> TheTiffin2020</a></li>
      </ul>
    </section>
  </footer>
</body>
</html>
