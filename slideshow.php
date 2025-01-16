<?php
// Save this file as slideshow.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            position: relative;
        }
        .slideshow-container {
            max-width: 580px;
            margin: auto;
        }
        .slide {
            display: none;
        }
        .active {
            display: block;
        }
        .next-button {
            position: absolute;
            bottom: 40px;
            right: 690px;
            cursor: pointer;
            width: 70px;
        }
    </style>
</head>
<body>
    <audio autoplay loop>
        <source src="audio/background-music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="slideshow-container">
        <div class="slide active">
            <img src="images/matta1.png" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="images/image2.jpg" class="d-block w-100" alt="Slide 2">
            <div class="mt-2 text-center">Description for Slide 2</div>
        </div>
        <div class="slide">
            <img src="images/image3.jpg" class="d-block w-100" alt="Slide 3">
            <div class="mt-2 text-center">Description for Slide 3</div>
        </div>
    </div>

    <img src="images/next.png" alt="Next" class="next-button" onclick="nextSlide()">

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }
    </script>
</body>
</html>