<div id="baner">

<div class="khungbn">
    <div class="carousel">
      
        <button class="prev" onclick="changeImage(-1)">&#10094;</button>
        
        <div class="image-frame">
            <img id="carouselImage" src="img/5.jpg" alt="Image 1" class="image">
            <div id="caption" class="caption">Caption for Image 1</div>
        </div>
        
        <button class="next" onclick="changeImage(1)">&#10095;</button>
    </div>
</div>

    <script>
        let currentImageIndex = 0;
const images = [
    { src: "img/HCM.png", alt: "Image 1", caption: "Caption for Image 1" },
    { src: "img/lenin.png", alt: "Image 2", caption: "Caption for Image 2" },
    { src: "img/TUtung.png", alt: "Image 3", caption: "Caption for Image 3" }
];
function changeImage(direction) {
    currentImageIndex += direction;

    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }

    const carouselImage = document.getElementById("carouselImage");
    const caption = document.getElementById("caption");
    
    carouselImage.src = images[currentImageIndex].src;
    carouselImage.alt = images[currentImageIndex].alt;
    caption.textContent = images[currentImageIndex].caption;
}

    </script>
</div>

</div>