<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Layout</title>
<style>
/* General body */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100%;
}

/* Container - three columns */
.container {
    display: flex;
    width: 100%;
    height: 100vh; /* full viewport height */
    gap: 30px;
    padding: 20px;
    box-sizing: border-box;
    overflow: hidden; /* prevent outer scroll */
}

/* LEFT MENU */
.left-menu {
    width: 22%;
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
    padding-right: 10px;
}

.left-menu h3 {
    color: #4169E1;
    margin-bottom: 15px;
}

.left-menu ul {
    list-style: none;
    padding: 0;
}

.left-menu ul li {
    margin-bottom: 15px;
}

.left-menu ul li a {
    text-decoration: none;
    color: #ffffff;
}

/* CENTER CONTENT */
.center-banner {
    width: 55%;
    height: 100%;
    overflow-y: auto;
    padding-right: 10px;
}

.banner-box {
    background: #f2e9ff;
    padding: 20px;
    border-radius: 15px;
    position: relative;
    margin-bottom: 20px;
}

.banner-box img {
    width: 100%;
    border-radius: 15px;
}

.banner-title {
    background: white;
    padding: 15px 20px;
    display: inline-block;
    position: absolute;
    bottom: 20px;
    left: 20px;
    border-radius: 12px;
}

.banner-title h2 {
    margin: 0;
    font-size: 22px;
}

.banner-title p {
    margin: 5px 0 0 0;
}

.intro-text, .intro-text-1, .intro-text-2 {
    color: #ffffff;
    font-size: 16px;
}

h1 {
    scroll-margin-top: 120px;
}

/* RIGHT SIDEBAR */
.right-sidebar {
    width: 23%;
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
}

.author-box {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    margin-bottom: 20px;
}

.author-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.author-name {
    font-weight: bold;
    margin-top: 10px;
}

.demo-box {
    background: #002b80;
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
}

.demo-box a.btn {
    margin-top: 15px;
    display: inline-block;
    background: white;
    color: #002b80;
    padding: 10px 20px;
    border-radius: 20px;
    text-decoration: none;
}

/* BLOG CARDS */
.blog-cards-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 40px;
}

.blog-card {
    background: #111;
    width: 320px;
    padding: 15px;
    border-radius: 15px;
    color: #fff;
    text-align: center;
}

.blog-card img {
    width: 100%;
    border-radius: 12px;
}

.blog-card h3 {
    margin: 15px 0 10px;
}

.blog-card p {
    font-size: 14px;
    color: #cbd5e1;
}

.blog-card .read-more {
    display: inline-block;
    margin-top: 12px;
    color: #60a5fa;
    text-decoration: none;
}

/* Responsive */
@media(max-width: 900px) {
    .container {
        flex-direction: column;
        height: auto;
    }
    .left-menu,
    .center-banner,
    .right-sidebar {
        width: 100%;
        position: static;
        height: auto;
        overflow: visible;
    }
}
</style>
</head>

<body>
<div class="container">
    <!-- LEFT MENU -->
    <div class="left-menu">
        <h3>In This Article:</h3>
        <ul>
            <li><a href="#How-to-Become-a-Superhost-on-Airbnb">How to Become a Superhost on Airbnb</a></li>
            <li><a href="#What-Is-an-Airbnb">What Is an Airbnb Superhost?</a></li>
            <li><a href="#Four-Requirements">Four Requirements to Become an Airbnb Superhost</a></li>
            <li><a href="#How-Airbnb-Evaluates">How Airbnb Evaluates Your Progress</a></li>
            <li><a href="#Why-Airbnb-Superhost">Why Airbnb Superhost Status Matters</a></li>
        </ul>
    </div>

    <!-- CENTER CONTENT -->
    <div class="center-banner">
        <div class="banner-box">
            <img src="https://d3emaq2p21aram.cloudfront.net/media/cache/report_image_big/uploads/DiveMotel-BenFitchett-05.jpg" alt="Blog Banner">
            <div class="banner-title">
                <h2>Short Term Rental</h2>
                <p>How to Manage Your Airbnb Business</p>
            </div>
        </div>

        <!-- Blog sections -->
        <div id="How-to-Become-a-Superhost-on-Airbnb">
            <h1 class="intro-text-1">How to Become a Superhost on Airbnb</h1>
            <p class="intro-text">Learn the exact 4 requirements to become an Airbnb Superhost...</p>
        </div>

        <div id="What-Is-an-Airbnb">
            <h1 class="intro-text-1">What Is an Airbnb Superhost?</h1>
            <p class="intro-text">An Airbnb Superhost is a host who stands out for delivering exceptional service...</p>
        </div>

        <div id="Four-Requirements">
            <h1 class="intro-text-1">Four Requirements to Become an Airbnb Superhost</h1>
            <p class="intro-text">Airbnb evaluates hosts every three months on four specific metrics...</p>
        </div>
        <!-- Add other sections as needed -->
    </div>

    <!-- RIGHT SIDEBAR -->
    <div class="right-sidebar">
        <div class="author-box">
            <img src="img.jpg" class="author-img" alt="Author">
            <p class="author-name">Ayush Sahu</p>
            <p class="author-role">Founder at StayChat AI</p>
        </div>
        <div class="demo-box">
            <h4>Looking for Guest Management guide in 2025?</h4>
            <p>Book a personalised demo now.</p>
            <a href="page1.php" class="btn">Book A Demo</a> 
        </div>
    </div>
</div>

<!-- BLOG CARDS -->
<div class="blog-cards-wrapper">
    <div class="blog-card">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/ef/df/44/hotel-dorado-la-70.jpg?w=1400&h=-1&s=1" alt="Budget Travel">
        <h3>Hotel Reviews: How to Respond to Bad Reviews</h3>
        <p>Explore pocket-friendly staying options without compromising comfort...</p>
        <a href="card4.php#" class="read-more">Read More</a>
    </div>
    <div class="blog-card">
        <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1uN1fW.img?w=1200&h=628&m=4&q=60" alt="Budget Travel">
        <h3>Hotel Concierge: Digital vs Traditional Guide 2025</h3>
        <p>Explore pocket-friendly staying options without compromising comfort...</p>
        <a href="card5.php#" class="read-more">Read More</a>
    </div>
    <div class="blog-card">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/d5/cb/0a/hotel-dorado-la-70.jpg?w=1200&h=-1&s=1" alt="Budget Travel">
        <h3>Hotel Concierge: What They Do & Why They Matter</h3>
        <p>Explore pocket-friendly staying options without compromising comfort...</p>
        <a href="card6.php#" class="read-more">Read More</a>
    </div>
</div>

<?php
include "Footer.php";
?>
</body>
</html>
