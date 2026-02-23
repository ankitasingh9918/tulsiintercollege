<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- gallery code  -->
 <script>
const images = <?php echo json_encode($images); ?>;
let currentIndex = 0;

function openLightbox(index){
  currentIndex = index;
  document.getElementById("lightbox").style.display="flex";
  document.getElementById("lightbox-img").src = images[currentIndex];
}

function closeLightbox(){
  document.getElementById("lightbox").style.display="none";
}

function nextImage(){
  currentIndex = (currentIndex + 1) % images.length;
  document.getElementById("lightbox-img").src = images[currentIndex];
}

function prevImage(){
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  document.getElementById("lightbox-img").src = images[currentIndex];
}
</script>
