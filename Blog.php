<?php
include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>\
    <style>
        .blog-section {
    padding: 50px;
    /* background: #f7f7f7; */
    text-align: center;
    background-color: #0d0d0d;
}

.blog-section h2 {
    font-size: 32px;
    margin-bottom: 30px;
    color: #ffffff;

}

.blog-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.blog-card {
    background: #fff;
    width: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.blog-card h3 {
    font-size: 20px;
    margin: 15px;
}
.blog-card p {
    font-size: 14px;
    margin: 0 15px 15px;
    color: #555;
}
.read-more {
    display: block;
    padding: 10px;
    background: #007bff;
    color: white;
    text-decoration: none;
    margin: 15px;
    border-radius: 5px;
}
.read-more:hover {
    background: #0056b3;
}







    </style>

</head>
<body style="background-color: #0d0d0d">
   <section class="blog-section">
    <h2>Our Latest Travel Blogs</h2>

    <div class="blog-container">
        <!-- Blog Card 1 -->
        <div class="blog-card">
            <img src="https://c8.alamy.com/comp/2CT30HW/lobby-nevele-hotel-and-resort-ellenville-new-york-usa-john-margolies-roadside-america-photograph-archive-1977-2CT30HW.jpg" alt="Luxury Hotel">
            
            <h3>Self Check In Hotel: Benefits, Technology</h3>
            <p>Find out the most luxurious hotels with world-class facilities...</p>
            <a href="card1.php#" class="read-more">Read More</a>
        </div>
        <!-- Blog Card 2 -->
        <div class="blog-card">
            <img src="https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?cs=srgb" alt="Beach Resort">
            <h3>How to Manage Your Airbnb Business:</h3>
            <p>Here are the best beachside hotels perfect for family vacations...</p>
            <a href="card2.php#" class="read-more">Read More</a>
        </div>
        <!-- Blog Card 3 -->
        <div class="blog-card">
            <img src="https://d3emaq2p21aram.cloudfront.net/media/cache/report_image_big/uploads/DiveMotel-BenFitchett-05.jpg" alt="Budget Travel">
            <h3>Hotel Review Response Time:     </h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card3.php#" class="read-more">Read More</a>
        </div>
           <!-- Blog Card 4 -->
        <div class="blog-card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/ef/df/44/hotel-dorado-la-70.jpg?w=1400&h=-1&s=1" alt="Budget Travel">
            <h3>Hotel Reviews: How to Respond to Bad Reviews</h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card4.php#" class="read-more">Read More</a>
        </div>
     <!-- Blog Card 5 -->
        <div class="blog-card">
            <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AA1uN1fW.img?w=1200&h=628&m=4&q=60" alt="Budget Travel">
            <h3>Hotel Concierge: Digital vs Traditional Guide 2025</h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card5.php#" class="read-more">Read More</a>
        </div>
           <!-- Blog Card 6 -->
        <div class="blog-card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/d5/cb/0a/hotel-dorado-la-70.jpg?w=1200&h=-1&s=1" alt="Budget Travel">
            <h3>Hotel Concierge: What They Do & Why They Matter</h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card6.php#" class="read-more">Read More</a>
        </div>
           <!-- Blog Card 7 -->
        <div class="blog-card">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max500/424940555.jpg?k=a415886f289e89ce3599c67f2d2abc820b2ff285ff22fc586e075e1ba452839e&o=&hp=1" alt="Budget Travel">
            <h3>How to Price Your Airbnb: The Complete Pricing </h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card7.php#" class="read-more">Read More</a>
        </div>
           <!-- Blog Card 8 -->
        <div class="blog-card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/eb/1f/cb/outdoor-pool.jpg?w=900&h=-1&s=1" alt="Budget Travel">
            <h3>How Much Does Airbnb Take From Hosts?</h3>
            <p>Explore pocket-friendly staying options without compromising comfort...</p>
            <a href="card8.php#" class="read-more">Read More</a>
        </div>    
    </div>
</section>
</body>
</html>
<?php
include"Footer.php";
?>