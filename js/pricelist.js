document.addEventListener("DOMContentLoaded", function() {
    const galleryItems = document.querySelectorAll('.price-item img');
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImage");
    const closeBtn = document.querySelector(".close");
    let scale = 1;
  
    galleryItems.forEach(item => { 
      item.addEventListener('click', function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        scale = 1;
        modalImg.style.transform = `scale(${scale})`;
      });
    });
  
    closeBtn.addEventListener('click', function() {
      modal.style.display = "none";
    });
  
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  
    modal.addEventListener('wheel', function(event) {
      event.preventDefault();
      if (event.deltaY < 0) {
        scale += 0.1;
      } else {
        scale -= 0.1;
      }
      modalImg.style.transform = `scale(${scale})`;
    });
  });
  