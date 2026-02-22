<?php
// Auto load images from folder
$images = glob("./assets/images/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
   
  <?php include "header-link.php" ?>

    <style>
        body {
            background:#f4f6f9;
        }

        .gallery-header {
            text-align:center;
            padding:40px 15px 10px;
        }

        .gallery-header h1 {
            font-weight:700;
            color:#0f3d6b;
        }

        .gallery-grid {
            padding:30px 0 60px;
        }

        .gallery-item {
            position:relative;
            overflow:hidden;
            border-radius:16px;
            cursor:pointer;
            box-shadow:0 6px 18px rgba(0,0,0,.08);
            background:#fff;
        }

        .gallery-item img {
            width:100%;
            height:260px;
            object-fit:cover;
            transition:.4s;
        }

        .gallery-item:hover img {
            transform:scale(1.08);
        }

        /* Lightbox */
        .lightbox {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,.9);
            display:none;
            align-items:center;
            justify-content:center;
            z-index:9999;
            padding:20px;
        }

        .lightbox img {
            max-width:95%;
            max-height:90vh;
            border-radius:12px;
        }

        .lightbox-close {
            position:absolute;
            top:25px;
            right:30px;
            font-size:34px;
            color:#fff;
            cursor:pointer;
        }

        @media (max-width:992px) {
            .gallery-item img { height:220px; }
        }

        @media (max-width:768px) {
            .gallery-item img { height:200px; }
        }

        @media (max-width:576px) {
            .gallery-item img { height:180px; }
        }
    </style>
</head>
<body>

<?php include "header.php" ?>

<div class="container">
    <div class="gallery-header">
        <h1>Gallery</h1>
        <p class="text-muted">Explore our latest photos and campus moments</p>
    </div>

    <div class="row g-4 gallery-grid">
        <?php foreach($images as $img): ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="gallery-item">
                    <img src="<?php echo $img; ?>" alt="Gallery Image" onclick="openLightbox(this.src)">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <img id="lightbox-img" src="">
</div>

<script>
function openLightbox(src) {
    document.getElementById('lightbox').style.display = 'flex';
    document.getElementById('lightbox-img').src = src;
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
