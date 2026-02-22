
<!-- ===== TOP ADMISSION BAR ===== -->
<div class="top-bar fixed-top" id="topBar">
  <div class="container topbar-inner">

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
<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg main-navbar sticky-top shadow-sm">
<!-- INQUIRY BUTTON -->
   
  <div class="container d-flex align-items-center">

    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="/assets/images/logo.png" alt="Logo" class="logo">
    </a>
 <a href="admissions.php" 
       class="btn inquiry-btn ms-auto me-3 order-lg-3">
      Admissions Inquiry
      <i class="fa-solid fa-arrow-right ms-2"></i>
    </a>

    <!-- TOGGLE -->
   <button class="navbar-toggler order-lg-4" 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainMenu"
        aria-expanded="false"
        id="navToggle">
  <span class="toggler-icon"></span>
</button>
    <!-- MENU -->
    <div class="collapse navbar-collapse justify-content-center order-lg-2" id="mainMenu">
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
              <a class="dropdown-item" href="about.php">
                About College
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="our-schools.php">
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



<script>
const toggleBtn = document.getElementById("navToggle");
const menu = document.getElementById("mainMenu");

menu.addEventListener("show.bs.collapse", () => {
  toggleBtn.classList.add("open");
});

menu.addEventListener("hide.bs.collapse", () => {
  toggleBtn.classList.remove("open");
});
</script>

