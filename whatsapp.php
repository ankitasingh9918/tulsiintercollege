<!-- FLOATING WHATSAPP WIDGET -->
<!-- WHATSAPP -->
<div class="wa-widget">
  <a id="waLink"
     href="https://wa.me/919415837201"
     target="_blank"
     aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const messages = [
    "Hello, I want to know about admissions.",
    "Hi, please share admission details.",
    "I want to inquire about school admission.",
    "Can you guide me about admission process?",
    "I am interested in admission for my child.",
    "Please provide fee and admission information."
  ];

  const randomMsg = messages[Math.floor(Math.random() * messages.length)];
  const waLink = document.getElementById("waLink");

  if (waLink) {
    waLink.href = "https://wa.me/919415837201?text=" + encodeURIComponent(randomMsg);
  }

});
</script>





<!-- PHONE -->
<div class="phone-widget">
  <a href="tel:+919415837201" aria-label="Call Now">
    <i class="fa-solid fa-phone"></i>
  </a>
</div>