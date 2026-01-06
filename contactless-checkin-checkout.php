<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
  <link rel="stylesheet" href="sty.css">
   <style>
.navbar {
  position: fixed;       
  /* top: 0;
  left: 0;
  width: 100%;
  z-index: 9999; */

}

.service-section-grid img {
  transition: transform 0.5s ease;
}

.service-section-grid:hover img {
  transform: scale(1.06);
}




    html, body {
  overflow-x: hidden;
}
    .section-service-2 {
  padding: 80px 0;
  /* background: #fff; */
  font-family: Arial, sans-serif;
  background-color: #0d0d0d;
}

/* Container */
.padding-global {
  padding-left: 20px;
  padding-right: 20px;
   
}

.container-large {
  max-width: 1200px;
  margin: auto;
}

/* Headline */
.all-feature-content {
  text-align: center;
  margin-bottom: 60px;
   color: #ffffff;
}

.all-feature-content .headline-icon {
  width: 50px;
  margin-bottom: 10px;
   
}

.heading-style-h2 {
  font-size: 38px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #ffffff;
}

.text-size-medium {
  font-size: 18px;
  color: #444;
  line-height: 1.6;
   color: #ffffff;
}

/* Service Box Sections */
.service-section-pink,
.service-section-lime,
.service-section-turquoise,
.service-section-violet {
  padding: 50px;
  border-radius: 18px;
  margin-bottom: 50px;
  background: #fff;
}

.service-section-pink { background: #ffe5f0; }
.service-section-lime { background: #ebffdb; }
.service-section-turquoise { background: #dbfff8; }
.service-section-violet { background: #f0e6ff; }

/* Shadow */
.shadow-medium {
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

/* Grid Layout */
.service-section-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  align-items: center;
}

.service-left-side-content h2 {
  font-size: 28px;
  margin-bottom: 10px;
}

.text-size-regular {
  font-size: 17px;
  color: #333;
  line-height: 1.6;
}

/* Images */
.service-section-image-pink,
.service-section-image-lime,
.service-section-image-turquoise,
.service-section-image-violet {
  width: 100%;
  border-radius: 16px;
}

/* Responsive */
@media (max-width: 768px) {
  .service-section-grid {
    grid-template-columns: 1fr;
  }

  .service-left-side-content {
    text-align: left;
  }

  .heading-style-h2 {
    font-size: 28px;
  }
}
    /* ================= FOOTER ================= */
.footer {
  background: #111;
  color: #ccc;
  padding: 40px 20px;
  margin-top: 40px;
}

.footer-container {
  max-width: 1200px;
  margin: auto;
}

/* Top Area */
.footer-top {
  text-align: center;
  margin-bottom: 30px;
}

.footer-logo {
  font-size: 1.8rem;
  color: #fff;
  font-weight: 700;
}

.footer-desc {
  color: #aaa;
  margin-top: 8px;
}

/* Footer link columns */
.footer-links-box {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.footer-column h4 {
  color: #fff;
  margin-bottom: 12px;
}

.footer-column a {
  display: block;
  color: #00c4ff;
  text-decoration: none;
  margin-bottom: 8px;
  transition: 0.3s ease;
}

.footer-column a:hover {
  text-decoration: underline;
}

/* Footer bottom */
.footer-bottom {
  text-align: center;
  padding-top: 15px;
  border-top: 1px solid #333;
  color: #999;
}

/* Mobile */
@media (max-width: 768px) {

  .footer-links-box {
    flex-direction: column;
    text-align: center;
  }

  .footer-column {
    margin-bottom: 20px;
  }
}
.wa-icon{
  width:44px;
  height:44px;
  /* background:#25D366; */
  /* background: black; */
  display:inline-flex;
  align-items:center;
  justify-content:center;
  border-radius:50%;
  text-decoration:none;
}

.wa-icon img{
  width:50px;
  height:50px;
}
   </style>
</head>
<body style="background-color: #0d0d0d">

 <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
       <img src="main3.png"  alt="StayChat" style="width: 150px" > 
      </div>
      <button class="hamburger" id="menuBtn" >☰</button>
      <div class="nav-links" id="navMenu">
        <a href="inde.php#home">Home</a>
        <a href="inde.php#Pricing">Pricing</a>
        <a href="inde.php#about">About</a>
        <a href="Contact.php#contact">Contact</a>
        <a href="page1.php#Demo" class="btn">Book A Demo</a>
      </div>
    </div>
  </nav>

<div class="section-service-2">
  <div class="padding-global">
    <div class="container-large">
      <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da92727" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="all-feature-content">
        <div class="all-feature-headline">
          <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66010485d3e18f518b4e995b_Vector.svg" loading="lazy" alt="vector icon" class="headline-icon">
        <div class="text-size-tiny text-color-black-dark">Our Feature</div></div>
        <h2 class="heading-style-h2">Mobile Check-In &amp;&nbsp;Checkout your guests &amp; staff love<br></h2>
        <p class="text-size-medium">Elevate your guest experience with StayChat AI Mobile Check-In. With StayChat AI, guests check in at their convenience using their own mobile device. No apps or hardware required. It’s smooth for them, &amp; seamless for you.<br></p>
        <div class="padding-bottom padding-medium"></div></div>
        <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da92733" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-pink shadow-medium">
          <div class="w-layout-grid service-section-grid">
            <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92735-8243271e" class="service-left-side-content">
              <div class="header-top-content button-left"><h2 class="heading-style-h4">Eliminate Front Desk Lines<br></h2>
                <div class="padding-bottom padding-xxsmall"></div>
                <p class="text-size-regular text-color-black-dark">Tired of long lines? Trust us, your guests and staff are too. With StayChat AI Contactless Check-In, guests can skip the front desk entirely, freeing up staff to focus on other tasks.</p><div class="padding-bottom padding-xxxsmall"></div>
                <p class="text-size-regular text-color-black-dark">Take the guessing out of the equation. Provide guests with all the information they need before arrival with a seamless mobile registration for hotels</p></div></div>
                <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da9273d-8243271e" class="service-right-side-content">
                  <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49dd6b19eaaeb8f1dd4_automate-1-min.webp" loading="eager" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49dd6b19eaaeb8f1dd4_automate-1-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49dd6b19eaaeb8f1dd4_automate-1-min.webp 800w" alt="hotel online check-in" class="service-section-image-pink"></div></div></div>
                  <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da9273f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-lime shadow-medium">
                    <div class="w-layout-grid service-section-grid">
                    <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92741-8243271e" class="service-left-side-content">
                      <div class="header-top-content button-left">
                        <h2 class="heading-style-h4">Boost guest satisfaction<br></h2>
                        <div class="padding-bottom padding-xxsmall"></div>
                        <p class="text-size-regular text-color-black-dark">StayChat AI Mobile Check-In enables you to offer a smooth, hassle-free check-in experience that impresses guests while setting your property apart from the competition. No more front desk bottlenecks, just a streamlined, stress-free arrival process that enhances guest satisfaction from the moment they step in.</p></div></div>
                        <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92749-8243271e" class="service-right-side-content">
                          <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7b444ced3f377e214edf_boost-guest-statifaction-67bc7757875d0.webp 1662w" alt="paper less check-in" class="service-section-image-lime"></div></div></div>
                          <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da9274b" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-turquoise shadow-medium">
                            <div class="w-layout-grid service-section-grid">
                              <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da9274d-8243271e" class="service-left-side-content">
                                <div class="header-top-content button-left">
                                  <h2 class="heading-style-h4">Drive pre arrival upsells<br></h2>
                                  <div class="padding-bottom padding-xxsmall"></div>
                                  <p class="text-size-regular text-color-black-dark">Leverage<strong> </strong>mobile registration to engage guests even before they arrive. Offer room upgrades, early check-ins, or exclusive amenities through an intuitive hotel check-in system that turns check-in into a revenue-generating opportunity. With personalized upsell options, you can maximize guest spending while enhancing their stay.<br></p></div></div>
                          <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92755-8243271e" class="service-right-side-content">
                            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.9957275390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min.webp 1662w" alt="increase hotel reviews" class="service-section-image-turquoise"></div></div></div>
                            <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da92757" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-violet shadow-medium">
                            <div class="w-layout-grid service-section-grid">
                              <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92759-8243271e" class="service-left-side-content">
                                <div class="header-top-content button-left">
                                  <h2 class="heading-style-h4">Go green with digital guest ID's and Signature<br></h2>
                                  <div class="padding-bottom padding-xxsmall"></div>
                                  <p class="text-size-regular text-color-black-dark">StayChat AI lets your guests scan &amp; sign all needed documents before arrival. So you have everything needed to complete hotel online check-in, &amp; can allow your guests to start enjoying the ultimate vacation experience right when they arrive.</p>
                                  <div class="padding-bottom padding-xxxsmall"></div>
                                  <p class="text-size-regular text-color-black-dark">Guests can easily provide all documentation before they ever step foot on your property. That way you have everything you need and can focus on providing top-notch hospitality with a mobile check-in experience.</p></div></div>
                <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92761-8243271e" class="service-right-side-content">
                  <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min.webp" loading="eager" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min.webp 800w" alt="increase hotel ancillary reviews" class="service-section-image-violet"></div></div></div><div data-w-id="50974764-f835-10eb-27ce-52c7f4716402" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-pink shadow-medium">
                    <div class="w-layout-grid service-section-grid">
                      <div id="w-node-_50974764-f835-10eb-27ce-52c7f4716404-8243271e" class="service-left-side-content">
                        <div class="header-top-content button-left">
                          <h2 class="heading-style-h4">Reduce frauds &amp; chargebacks<br></h2>
                          <div class="padding-bottom padding-xxsmall"></div>
                          <p class="text-size-regular text-color-black-dark">Fraudulent bookings and chargebacks can hurt your bottom line. StayChat AI hotel check-in software integrates AI-powered fraud detection, helping you flag suspicious bookings, verify guests securely, and reduce chargebacks<!-- -->. Protect your business while ensuring a seamless check-in process for legitimate guests.</p></div></div>
                          <div id="w-node-_50974764-f835-10eb-27ce-52c7f471640f-8243271e" class="service-right-side-content">
                            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7d628dbd52aa948ef19c_fraud-67bc7753d1145.webp 1662w" alt="hotel online check-in" class="service-section-image-pink"></div></div></div><div data-w-id="d3d52dc4-4634-0e10-b030-845a708dcc6c" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-lime shadow-medium"><div class="w-layout-grid service-section-grid"><div id="w-node-d3d52dc4-4634-0e10-b030-845a708dcc6e-8243271e" class="service-left-side-content"><div class="header-top-content button-left"><h2 class="heading-style-h4">No app download required<br></h2><div class="padding-bottom padding-xxsmall"></div><p class="text-size-regular text-color-black-dark">Unlike traditional check-in solutions that require guests to download an app, Guestara offers a web-based guest app for ultimate convenience. Guests can complete their mobile check-in process from any device with just a few taps no extra steps, no unnecessary downloads, just a frictionless experience.</p></div></div><div id="w-node-d3d52dc4-4634-0e10-b030-845a708dcc76-8243271e" class="service-right-side-content"><img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/67bc7e7eef861614c416fc1d_no-app-download-67bc775471524.webp 1662w" alt="paper less check-in" class="service-section-image-lime"></div></div></div></div></div></div>


<!-- <script>
    // --- Mobile Menu Toggle ---
    const menuBtn = document.getElementById('menuBtn');
    const navMenu = document.getElementById('navMenu');
    menuBtn.addEventListener('click', () => {
      navMenu.classList.toggle('open');
    });
  </script>  -->
 

<script>
  const menuBtn = document.getElementById("menuBtn");
  const navMenu = document.getElementById("navMenu");

  // Toggle menu
  menuBtn.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });

  // Hide menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!navMenu.contains(e.target) && !menuBtn.contains(e.target)) {
      navMenu.classList.remove("active");
    }
  });
</script>


 <footer class="footer">
  <div class="footer-container">

    <div class="footer-top">
      <h2 class="footer-logo">StayChat AI</h2>
      <p class="footer-desc">Building modern websites with clean UI and smooth experience.</p>
    </div>

    <div class="footer-links-box">
      <div class="footer-column">
        <h4>Company</h4>
        <a href="inde.php#home">Home</a>
        <a href="inde.php#about">About</a>
        <a href="inde.php#Pricing">Pricing</a>
        <a href="Contact.php#contact">Contact</a>
      </div>

      

      <div class="footer-column">
        <h4>Resources</h4>
        <a href="Blog.php#">Blog</a>
        <a href="page1.php#">Book A Demo</a>
        <a href="Refund#">Refund/Cancellation Policy</a>
      </div>

 <div class="footer-column">
        <h4>Integrations</h4>
        <a href="ecard1.php#">WhatsApp</a>
        <a href="ecard5.php"#>Microsoft Outlook</a> 
        <a href="ecard3.php#">Paytm</a>
      </div>

      <div class="footer-column">
        <h4>Legal</h4>
        <a href="Privacy Policy.php#">Privacy Policy</a>
        <a href="Terms of Service.php#">Terms of Service</a>
        <a href="Cookie Policy.php#">Cookie Policy</a>
      </div>
    </div>

    <!-- <div class="footer-bottom">
      <p>© 2025 StayChat AI. All rights reserved.</p>
    </div> -->
    <div class="footer-bottom">

  <a href="https://wa.me/+919616422222" target="_blank" class="wa-icon">
  <img src="https://img.icons8.com/?size=100&id=964RahB4l606&format=png&color=000000" alt="WhatsApp">
</a>

<a href="https://www.linkedin.com/company/staychat-ai/" target="_blank" class="wa-icon">
  <!-- <img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" alt="facebook"> -->
   <img src="https://img.icons8.com/?size=100&id=13930&format=png&color=000000" alt="linkedin">
</a>

<a href="https://www.instagram.com/staychat_ai?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="wa-icon">
  <img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" alt="instagram">
</a>

  <p>© 2025 StayChat AI. All rights reserved.</p>
</div>

  </div>
</footer>

                            </body>
</html>
