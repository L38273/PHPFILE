<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>
    <link rel="stylesheet" href="sty.css">
    <style>
        /* ===== Global Body Style ===== */
.navbar {
  position: fixed; 
}
        
body {
    font-family: Arial, sans-serif;
    background: #f9f9f9;
    margin: 0;
    padding: 0;
     /* gap: 4000px; */
     padding-top: 90px;
}
html, body {
  overflow-x: hidden;
}

/* ===== Main Container ===== */
.cookie1 {
    max-width: 800px;
    background: #ffffff;
    margin: 50px auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    /* padding-top: 100px; */
   
}
.cookie1:hover {
  transform: translateY(-8px) scale(1.01);
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

/* ===== Main Heading ===== */
.cookie1 h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* ===== Sub Headings ===== */
.cookie h5 {
    font-size: 18px;
    color: #0078d7;  /* Blue highlight */
    margin-top: 20px;
}
.cookie h5 {
  transition: transform 0.3s ease, color 0.3s ease;
}

.cookie h5:hover {
  transform: translateX(5px);
  color: #005bb5;
}



/* ===== Paragraph Text ===== */
.cookie p {
    font-size: 15px;
    line-height: 1.6;
    color: #444;
    margin: 10px 0;
}
.navbar {
 
   background: #8E7CC3;
}
    </style>
</head>
  <body background-color:#6B5B95>
     <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3)"> 
      </div>
      <button class="hamburger" id="menuBtn" >☰</button>
      <div class="nav-links" id="navMenu">
        <a href="index.php#home">Home</a>
        <a href="Pricing.php#Pricing">Pricing</a>
        <a href="index.php#about">About</a>
        <a href="Contact.php#contact">Contact</a>
        <a href="page1.php#Demo" class="btn">Book A Demo</a>
      </div>
    </div>
  </nav>
    <div class="cookie1">
       <h1> StayChat uses cookies to enhance your browsing experience.</h1>
       <div class="cookie">
<h5>1. What Cookies We Use</h5>
<p>1.1.Essential Cookies: Required for core features.<br>1.2.Analytics Cookies: Help us understand website usage.<br>1,3.Preference Cookies: Save your settings.<br>1.4.Marketing Cookies: Used for relevant ads (if applicable).</p>
 <h5>2. Why We Use Cookies</h5> 
<p>Improve website performance Personalize your experience Analyze traffic Secure and optimize our services</p>
<h5>3. Managing Cookies</h5>
<p>You can disable cookies anytime through your browser settings, but some features may not work properly.</p>
<h5>4. Updates</h5>
<p>We may update this Cookies Policy from time to time.</p>
</div>
    </div>
       <?php include "Footer.php"; ?>
       <script>
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");

let startX = 0;
let startY = 0;
let isSwipe = false;

/* Detect touch start */
menuBtn.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
  startY = e.touches[0].clientY;
  isSwipe = false;
});

/* Detect swipe */
menuBtn.addEventListener("touchmove", (e) => {
  const x = e.touches[0].clientX;
  const y = e.touches[0].clientY;

  if (Math.abs(x - startX) > 10 || Math.abs(y - startY) > 10) {
    isSwipe = true;
  }
});

/* Touch end */
menuBtn.addEventListener("touchend", () => {
  if (isSwipe) return; // ❌ ignore swipe
  navMenu.classList.toggle("active");
});

/* Desktop click */
menuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});

/* Close on outside click */
document.addEventListener("click", (e) => {
  if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
    navMenu.classList.remove("active");
  }
});
</script>

</body>
</html>