  <?php include 'includes/_header.php'; ?>

  <div class="content-releases">
    <h1 style="text-align: center;color: white;">Artists</h1>
    <div class="content-page">

      <?php foreach ($artists as $artist) : ?>
        <div class="content-elem">
          <div class="content-elem">
            <div class="content-photo">
              <a target=_blank href="<?= $artist['artist_site'] ?>">
                <img src="<?= $artist['artist_image'] ?>" alt="Image not found!">
              </a>
            </div>
            <a target=_blank href="<?= $artist['artist_site'] ?>">
              <h3 class="white-text "><?= $artist['artist_name'] ?></h3>
            </a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <?php include 'includes/_footer.php'; ?>

  <link rel="stylesheet" href="css/artists.css">
  </body>

  </html>