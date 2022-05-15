<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MusicLand</title>
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/main.css">

</head>

<body>

<header>
    <div class="header-bar">
        <div class="site-logo">
            <a class="white-text" href="index.php">
                <img src="images/icons/music.svg" alt="">
                <h1 class="white-text">MusicLand</h1>
            </a>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-btn">
                <img src="images/icons/align-justify.svg" onclick="dropdownToggle()">
            </div>
            <div id="mydropdown" class="dropdown">
                <div class="site-menu">
                    <a class="white-text" href="artists.php">Artists</a>
                    <a class="white-text" href="albums.php">Albums</a>
                    <a class="white-text" href="trending.php">Trending</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/db.inc.php';
    include 'includes/albums.inc.php';
    include 'includes/artists.inc.php';
    include 'includes/images.inc.php';

    $data_albums = new Albums();
    $albums = $data_albums->getAlbums();
    
    $data_artists = new Artists();
    $artists = $data_artists->getAlbums();

    $data_images = new Images();
    $images = $data_images->getImages();
    ?>
    
</header>