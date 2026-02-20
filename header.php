<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tulsi Inter College</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- ===== TOP ADMISSION BAR ===== -->
<div class="top-bar fixed-top" id="topBar">
  <div class="container position-relative text-center">

    <span class="top-text">
      ADMISSIONS OPEN FOR 2026-27
    </span>

    <a href="/tulsiintercollege/pages/admissions.php" 
       class="btn apply-btn fw-bold">
      APPLY NOW
    </a>

    <span class="top-close" id="topClose">&times;</span>

  </div>
</div>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg main-navbar sticky-top">
  <div class="container">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="/assets/images/logo.png" alt="Logo" class="logo">
    </a>

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse justify-content-center" id="mainMenu">
      <ul class="navbar-nav align-items-lg-center gap-lg-4">

        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>

       <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle d-flex align-items-center gap-1"
     href="#"
     role="button"
     data-bs-toggle="dropdown"
     aria-expanded="false">
     
    About Us
    <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
  </a>

  <ul class="dropdown-menu custom-dropdown">
    <li>
      <a class="dropdown-item" href="/tulsiintercollege/pages/about.php">
        About College
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="/tulsiintercollege/pages/our-schools.php">
        Our Alumni
      </a>
    </li>
  </ul>
</li>

        <li class="nav-item">
          <a class="nav-link" href="our-schools.php">Our Schools</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="admissions.php">Admissions</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blogs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>

      </ul>
    </div>

    <!-- INQUIRY BUTTON -->
    <a href="/tulsiintercollege/pages/admissions.php" 
       class="btn inquiry-btn d-none d-lg-inline-flex align-items-center">
      Admissions Inquiry
      <i class="fa-solid fa-arrow-right ms-2"></i>
    </a>

  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- TOP BAR CLOSE SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const closeBtn = document.getElementById("topClose");
  const bar = document.getElementById("topBar");

  if (closeBtn && bar) {
    closeBtn.addEventListener("click", function () {
      bar.classList.add("hide-bar");
    });
  }
});
</script>


</body>
</html>
