<?php
// Auto load images from folder
$images = glob("./assets/gallery/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery</title>

<?php include "header-link.php" ?>
<link rel="stylesheet" href="assets/css/gallery.css">


</head>

<body>
<?php include "header.php" ?>

<div class="container">
<div class="gallery-header text-center">
  <h1 class="gallery-title">Gallery & Events</h1>
  <p class="gallery-desc">
    Discover the vibrant spirit of Parth International School. From classroom 
    discoveries to playground adventures, explore the daily life of our community 
    through our gallery.
  </p>
</div>
  <div class="row g-4 gallery-grid">
    <?php foreach($images as $index=>$img): ?>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="gallery-item">
          <img src="<?php echo $img; ?>" onclick="openLightbox(<?php echo $index ?>)">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- ===== Lightbox ===== -->
<div class="lightbox" id="lightbox">
  <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
  <span class="lightbox-btn lightbox-prev" onclick="prevImage()">&#10094;</span>
  <img id="lightbox-img">
  <span class="lightbox-btn lightbox-next" onclick="nextImage()">&#10095;</span>
</div>


<?php include "footer-link.php" ?>

<?php include "footer.php" ?>
</body>
</html>