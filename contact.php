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
<link rel="stylesheet" href="assets/css/contact.css">


</head>

<body>
<?php include "header.php" ?>

<section class="qa-section">
  <div class="container">
<div class="qa-header text-center">
  <h2 class="qa-title">Contact Us</h2>
  <p class="qa-subtitle">
    We're here to help. Whether you have a question about our programs, admissions,
    or campus life, we'd love to hear from you.
  </p>
</div>
    <div class="qa-wrap">

      <!-- LEFT CARD -->
      <div class="qa-card qa-info">
        <div class="qa-item">
          <div class="qa-icon"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <h5>Address</h5>
            <p>Makhanaha, Azamgarh, Uttar Pradesh<br>India – 276142</p>
          </div>
        </div>

        <div class="qa-item">
          <div class="qa-icon"><i class="fa-solid fa-phone"></i></div>
          <div>
            <h5>Phone</h5>
            <p>+91 9415837201<br>+91 8953343332</p>
          </div>
        </div>

        <div class="qa-item">
          <div class="qa-icon"><i class="fa-solid fa-envelope"></i></div>
          <div>
            <h5>Email</h5>
            <p>tulsiintercollege@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- RIGHT CARD -->
      <div class="qa-card qa-form">
        <form>
          <div class="qa-grid">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <input type="text" placeholder="Your Phone">
            <input type="text" placeholder="Your Subject">
          </div>

          <textarea rows="6" placeholder="Your Message"></textarea>

          <button class="qa-btn">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<section class="qa-map">
  <div class="container">
    <div class="qa-map-card">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.030336401469!2d83.02630077520321!3d26.3275951770008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399107c9a229f3f5%3A0x4e8f162d54126547!2sTulsi%20Inter%20College!5e1!3m2!1sen!2sin!4v1771863971760!5m2!1sen!2sin"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
<?php include "footer-link.php" ?>

<?php include "footer.php" ?>
</body>
</html>
