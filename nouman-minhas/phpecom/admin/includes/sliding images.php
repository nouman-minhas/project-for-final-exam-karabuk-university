<div class="slideshow">
  <img src="2.jpg" alt="Image 1">
  <img src="4.jpg" alt="Image 2">
  <img src="3.jpg" alt="Image 3">
</div>

<style type="text/css">.slideshow {
  white-space: nowrap;
  overflow: hidden; 
  animation: slide 12s linear infinite; 
}

.slideshow img {
  display: inline-block;
  height: 300px;
}

@keyframes slide {
  0% {
    transform: translateX(-14); 
  }
  100% {
    transform: translateX(-100%); 
  }
}
</style>