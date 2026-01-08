<?php 
include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>
     <style>
body {
    margin: 0;
    padding: 0;
    /* background: linear-gradient(135deg, #0b1f4b, #2b4cc0); */
    background: #0d0d0d;
    font-family: Arial, sans-serif;
}

/* Outer section centered */
.section-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 40px 20px;
}

/* White rounded container */
.main-container {
    width: 100%;
    max-width: 1200px;
    background: white;
    border-radius: 30px;
    padding: 40px;
    display: flex;
    gap: 40px;
    align-items: center;
}

/* Left form area */
.form-area {
    width: 50%;
}

.form-area h1 {
    font-size: 32px;
    margin-bottom: 20px;
    font-weight: bold;
}

.form-area input {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 10px;
}

.btn-start {
    width: 100%;
    padding: 15px;
    background: #0066ff;
    color: white;
    border: none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
}

/* Right slideshow / image */
.slider-area {
    width: 50%;
    text-align: center;
}

.slider-area img {
    width: 100%;
    border-radius: 20px;
}

.slider-title {
    font-size: 22px;
    margin-top: 20px;
    font-weight: bold;
}

.slider-text {
    font-size: 16px;
    color: #444;
}

/* Responsive layout */
@media (max-width: 900px) {
    .main-container {
        flex-direction: column;
        padding: 30px;
    }
    .form-area, .slider-area {
        width: 100%;
    }
}

/* <style> */
    .image-card {
    width: 350px;
    height: 250px;
    border-radius: 15px;
    overflow: hidden;
    position: relative;
    background: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    
}

.slider {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    opacity: 0;
    transition: opacity 0.8s ease-in-out;
    
}

.slide.active {
    opacity: 1;
}

.dots {
    position: absolute;
    bottom: 10px;
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 6px;
}

.dot {
    width: 10px;
    height: 10px;
    background: #ddd;
    border-radius: 50%;
    cursor: pointer;
}

.active-dot {
    background: #2a7bff;
   
}

  
</style>
</head>
<body style="background-color: #6B5B95">
   

<div class="section-wrapper">
    <div class="main-container">
        
        <!-- LEFT FORM -->
        <div class="form-area">
            <h1>Fill the form to get started</h1>

            <!-- <input type="text" placeholder="John Doe">
            <input type="email" placeholder="Work Email">
            <input type="text" placeholder="Hotel/Group Name">

            <button class="btn-start" onclick="window.location.href='nextpage.php'">Start Trial Now</button> -->

<form action="connection1.php" method="POST">

    <input type="text" name="fullname" placeholder="John Doe" required>
    <input type="email" name="email" placeholder="Work Email" required>
    <input type="text" name="hotel_name" placeholder="Hotel/Group Name" required>

    <button class="btn-start" type="submit">Start Trial Now</button>

</form>


        </div>  
<div class="image-card">
    <div class="slider">
        <img src="https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg?cs=srgb&dl=pexels-boonkong-boonpeng-1134176.jpg&fm=jpg" class="slide active">
        <img src="https://tse3.mm.bing.net/th/id/OIP.6JVYF4ypjF9C2vLSQGu3iQHaEk?cb=ucfimg2&ucfimg=1&w=1024&h=631&rs=1&pid=ImgDetMain&o=7&rm=3" class="slide">
        <img src="https://tse1.mm.bing.net/th/id/OIP.NqW5saKanib00AgCDuWGkgHaFS?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" class="slide">
        <img src="https://tse2.mm.bing.net/th/id/OIP.wc_75cBbbOs2BNl6boHHNgHaEo?cb=ucfimg2&ucfimg=1&rs=1&pid=ImgDetMain&o=7&rm=3" class="slide">
    </div>

    <div class="dots">
        <span class="dot active-dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>

    </div>
</div>

<script>
let index = 0;
let slides = document.querySelectorAll(".slide");
let dots = document.querySelectorAll(".dot");

function autoSlide() {
    slides[index].classList.remove("active");
    dots[index].classList.remove("active-dot");

    index = (index + 1) % slides.length;

    slides[index].classList.add("active");
    dots[index].classList.add("active-dot");
}

setInterval(autoSlide, 2500); 
</script>


<?php
include"Footer.php";
?>
</body>
</html>
