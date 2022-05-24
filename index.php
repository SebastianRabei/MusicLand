<?php include 'includes/_header.php'; ?>

<div class="content" id="content">
  <div class="photos-container">
    <div class="photos-row1">
      <div class="photo1">
        <img src="<?= $images[0]['image'] ?>" alt="Image not found">
      </div>
    </div>
    <div class="photos-row2">
      <div class="photo2">
        <img src="<?= $images[1]['image'] ?>" alt="Image not found">
      </div>
      <div class="photo3">
        <img src="<?= $images[2]['image'] ?>" alt="Image not found">
      </div>
    </div>
  </div>

  <div class="content-releases">
    <h1><a href="trending.php" style="padding-top: 50px;" class="white-text">Trending releases</a></h1>
    <div class="content-page">

      <?php
      foreach ($albums as $album) : ?>
        <?php if ($album['id'] <= 8) : ?>
          <div class="content-elem">
            <div class="content-photo">
              <a target=_blank href="<?= $album['album_site'] ?>">
                <img src="<?= $album['album_image'] ?>" alt="Image not found!">
              </a>
            </div>
            <a target=_blank href="<?= $album['album_site'] ?>">
              <h3 class="white-text "><?= $album['album_name'] ?></h3>
            </a>
            <a target=_blank href="<?= $album['artist_site'] ?>">
              <h4 class="white-text "><?= $album['artist_name'] ?></h4>
            </a>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  </div>

  <div style="width:100%;background-color: white;" class="white-content-bg">
    <div class="content-releases">
      <div class="content-page">

        <?php
        $index = 8;
        foreach (array_slice($albums, $index) as $album) : ?>
          <?php if ($album['id'] <= 20) : ?>
            <div class="content-elem">
              <div class="content-photo">
                <a target=_blank href="<?= $album['album_site'] ?>">
                  <img src="<?= $album['album_image'] ?>" alt="Image not found!">
                </a>
              </div>
              <a target=_blank href="<?= $album['album_site'] ?>">
                <h3 class="black-text "><?= $album['album_name'] ?></h3>
              </a>
              <a target=_blank href="<?= $album['artist_site'] ?>">
                <h4 class="black-text "><?= $album['artist_name'] ?></h4>
              </a>
            </div>
          <?php endif ?>
        <?php endforeach ?>

      </div>
      <div class="content-btn" style="padding-bottom: 20px;">
        <h2><a class="black-text" href="albums.php">See more Releases ></a></h2>
      </div>
    </div>
  </div>

  <?php include 'includes/_footer.php'; ?>

</div>
</body>

<link rel="stylesheet" href="css/index.css">

</html>