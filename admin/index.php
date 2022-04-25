<?
$now = new DateTime();
$thisweek = $now->format("d/m/Y");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/tiffin.css">
  <title>[Admin] The Tiffin</title>
  <meta name="description" content="Homecooked Punjabi street food, delivered to you, in Kirkcaldy and Fife">
</head>
<body class="admin">
  <header>
    <h1><img src="../img/logo.png" alt="The Tiffin" /></h1>
  </header>
  <main>
    <section id="intro">
      <h2>Update menu</h2>
      <form method="post">
      <p><label for="menu">Upload menu for week of <?=$thisweek?></label></p>
      <p>
        <input type="file" name="menu" id="menu" />
      </p>
      </form>
      <p><input type="submit" class="btn" name="update" value="Update" /></p>
    </section>
    <section id="menu">
      <img src="../img/menus/menu.jpg" />
      <p><em>Menu last updated: 20th April 2022</em></p>
    </section>
  </main>
  <footer>
  </footer>
</body>
</html>
