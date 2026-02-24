<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery</title>

<?php include "header-link.php" ?>
<link rel="stylesheet" href="assets/css/admission.css">


</head>

<body>
<?php include "header.php"; ?>

<!-- ================= HERO ================= -->
<section class="ad-hero">
  <div class="container text-center">
    <h1>Admissions</h1>
    <p>Join our nurturing learning community and shape a bright future.</p>
  </div>
</section>

<!-- ================= INTRO ================= -->
<section class="admission-steps">
  <div class="container">

    <!-- TITLE -->
    <h2 class="section-title">How to Complete Your Admission</h2>
     <p class="section-subtitle">
    Follow these simple steps to complete your admission smoothly.
    From submitting your details to confirming your enrollment,
    our process is designed to be quick, secure, and student-friendly.
  </p>

    <!-- STEPS -->
    <div class="steps-grid">

      <div class="step-item">
        <div class="step-num">01</div>
        <h4>Fill Details</h4>
        <p>
          Enter your name, contact number, email, and select the course you wish
          to apply for in the form below.
        </p>
      </div>

    
      <div class="step-item">
        <div class="step-num">03</div>
        <h4>Enter UTR</h4>
        <p>
          Copy the 12-digit Transaction ID (UTR) from your payment app and paste
          it into the form as proof.
        </p>
      </div>

      <div class="step-item">
        <div class="step-num">04</div>
        <h4>Submit</h4>
        <p>
          Click submit. This will open WhatsApp with your details pre-filled.
          Send the message to confirm!
        </p>
      </div>

    </div>
  </div>
</section>


<section class="college-select">
  <div class="container">

    <h2 class="section-title">Select Your College</h2>
    <p class="section-subtitle">
      Choose your preferred college and explore the programs that align with 
      your career goals. Select the institution below to begin your admission process and secure your seat.
    </p>

    <div class="college-grid">

      <!-- CARD -->
      <div class="college-card">
        <div class="college-icon"><i class="fa-solid fa-mortar-pestle"></i></div>
        <h3>Geeta Pharmacy College</h3>
        <p>Apply for B.Pharm and D.Pharm programs.</p>
        <a href="#" class="college-btn">ADMISSION NOW</a>
      </div>

      <!-- CENTER ACTIVE -->
      <div class="college-card active">
        <div class="college-icon"><i class="fa-solid fa-scale-balanced"></i></div>
        <h3>Geeta Law College</h3>
        <p>Apply for LLB (3 Years) & BA-LLB (5 Years).</p>
        <a href="#" class="college-btn">ADMISSION NOW</a>
      </div>

      <!-- CARD -->
      <div class="college-card">
        <div class="college-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3>Geeta Degree College</h3>
        <p>Apply for BCA and BA degree programs.</p>
        <a href="#" class="college-btn">ADMISSION NOW</a>
      </div>

    </div>
  </div>
</section>





<section class="admission-form-section">
  <div class="container">

    <div class="admission-card">

      <!-- LOGO -->
      <div class="admission-logo">
        <img src="assets/images/logo.png" alt="Geeta Group of Colleges">
      </div>

      <!-- TITLE -->
      <div class="admission-head text-center">
        <h3>TULSI INTER COLLEGES</h3>
        <p>Admission Registration Form 2026–27</p>
      </div>

      <!-- PROGRAM DETAILS -->
      <div class="form-block">
        <div class="form-block-title">Program Details</div>

        <div class="form-grid">
          <div class="form-field full">
            <label>Course Applied For</label>
            <select>
              <option>Select Course</option>
              <option>B.Pharm</option>
              <option>D.Pharm</option>
              <option>LLB</option>
              <option>BA-LLB</option>
              <option>BCA</option>
              <option>BA</option>
            </select>
          </div>
        </div>
      </div>

      <!-- PERSONAL -->
      <div class="form-block">
        <div class="form-block-title">Personal Information</div>

        <div class="form-grid">
          <div class="form-field">
            <label>Full Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Date of Birth</label>
            <input type="date">
          </div>

          <div class="form-field">
            <label>Father's Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Mother's Name</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>Gender</label>
            <select>
              <option>Select</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>

          <div class="form-field">
            <label>Category</label>
            <select>
              <option>General</option>
              <option>OBC</option>
              <option>SC</option>
              <option>ST</option>
            </select>
          </div>
        </div>
      </div>

      <!-- CONTACT -->
      <div class="form-block">
        <div class="form-block-title">Contact Details</div>

        <div class="form-grid">
          <div class="form-field">
            <label>Mobile Number</label>
            <input type="tel">
          </div>

          <div class="form-field">
            <label>Email Address</label>
            <input type="email">
          </div>

          <div class="form-field full">
            <label>Permanent Address</label>
            <textarea rows="3"></textarea>
          </div>

          <div class="form-field">
            <label>City</label>
            <input type="text">
          </div>

          <div class="form-field">
            <label>State</label>
            <input type="text">
          </div>

         
        </div>
         <div class="form-submit">
  <button type="submit" class="admission-submit-btn w-100">
    Submit Admission Form
  </button>
</div>
      </div>
      

    </div>
  </div>
</section>

<?php include "footer.php"; ?>
</body>
</html>