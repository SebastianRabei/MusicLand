<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Music Land</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="js/main.js"></script>

</head>

<body onload="getPosts()">

  <?php include 'components/_header.php'; ?>

  <div class="content">
    <div class="photos-container">
      <div class="photos-row1">
        <div class="photo1">
          <img src="images/photos/photo1.jpg" alt="">
        </div>
      </div>
      <div class="photos-row2">
        <div class="photo2">
          <img src="images/photos/photo2.jpg" alt="">
        </div>
        <div class="photo3">
          <img src="images/photos/photo3.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="content-releases">
      <h1><a href="trending.php" style="padding-top: 50px;" class="white-text">Trending Releases</a></h1>
      <div class="content-page">

        <div class="content-elem">
          <div class="content-photo"><img src="images/albums/1.jpg" alt=""></div>
          <h3 class="white-text ">Texas Moon</h3>
          <h4 class="white-text ">Khruangbin</h4>
        </div>

        <div class="content-elem">
          <div class="content-photo"><img src="images/albums/2.jpg" alt=""></div>
          <h3 class="white-text ">The Dream</h3>
          <h4 class="white-text ">Alt-J</h4>
        </div>

        <div class="content-elem">
          <div class="content-photo"><img src="images/albums/3.jpg" alt=""></div>
          <h3 class="white-text ">Zeal & Ardor</h3>
          <h4 class="white-text ">Zeal & Ardor</h4>
        </div>

        <div class="content-elem">
          <div class="content-photo"><img src="images/albums/4.jpg" alt=""></div>
          <h3 class="white-text ">Lucifer On The Sofa</h3>
          <h4 class="white-text ">Spoon</h4>
        </div>

      </div>
    </div>

    <div style="width:100%;background-color: white;" class="white-content-bg">
      <div class="content-releases">
        <div class="content-page">
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/5.jpg" alt=""></div>
            <h3 class="black-text ">Ants From Up There</h3>
            <h4 class="black-text ">Black Country</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/6.jpg" alt=""></div>
            <h3 class="black-text ">Camp</h3>
            <h4 class="black-text ">Childish Gambino</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/7.jpg" alt=""></div>
            <h3 class="black-text ">Nothing Can Ruin Us</h3>
            <h4 class="black-text ">Jay G</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/8.jpg" alt=""></div>
            <h3 class="black-text ">Mexico City</h3>
            <h4 class="black-text ">Jamie Baggotts</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/9.jpg" alt=""></div>
            <h3 class="black-text ">Sunrise</h3>
            <h4 class="black-text ">Afterchain </h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/10.jpg" alt=""></div>
            <h3 class="black-text ">The Beatles</h3>
            <h4 class="black-text ">The Beatles</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/11.jpg" alt=""></div>
            <h3 class="black-text ">For Real</h3>
            <h4 class="black-text ">Flowers</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/12.jpg" alt=""></div>
            <h3 class="black-text ">Dimensions</h3>
            <h4 class="black-text ">Savage Grass</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/13.jpg" alt=""></div>
            <h3 class="black-text ">Insomniatic</h3>
            <h4 class="black-text ">Aly & AJ</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/14.jpg" alt=""></div>
            <h3 class="black-text ">Still</h3>
            <h4 class="black-text ">Joy Division</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/15.jpg" alt=""></div>
            <h3 class="black-text ">Kid Krow</h3>
            <h4 class="black-text ">Conan Gray</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/16.jpg" alt=""></div>
            <h3 class="black-text ">Led Zeppelin</h3>
            <h4 class="black-text ">Beth Hart</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/17.jpg" alt=""></div>
            <h3 class="black-text ">Alles War Schön</h3>
            <h4 class="black-text ">Casper (9)</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/18.jpg" alt=""></div>
            <h3 class="black-text ">High Road</h3>
            <h4 class="black-text ">Kesha</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/19.jpg" alt=""></div>
            <h3 class="black-text ">The Tipping Point</h3>
            <h4 class="black-text ">Tears For Fears</h4>
          </div>
          <div class="content-elem">
            <div class="content-photo"><img src="images/albums/20.jpg" alt=""></div>
            <h3 class="black-text ">Multitude</h3>
            <h4 class="black-text ">Stromae</h4>
          </div>

        </div>
        <div class="content-btn" style="padding-bottom: 20px;">
          <h2><a class="black-text" href="albums.php">See more Releases ></a></h2>
        </div>
      </div>
    </div>

    <?php include 'components/footer.php'; ?>


  </div>
</body>

</html>