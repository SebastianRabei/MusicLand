<?php include 'includes/_header.php'; ?>

<div class="content-releases">
<h1 style="text-align: center;color: white;">Trending</h1>
  <div class="content-page">
    <?php
    $index = 20;
    foreach (array_slice($albums, $index) as $album) : ?>
      <div class="content-elem">
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
      </div>
    <?php endforeach ?>

  </div>
</div>

<?php include 'includes/_footer.php'; ?>

<link rel="stylesheet" href="css/trending.css">
</body>
</html>