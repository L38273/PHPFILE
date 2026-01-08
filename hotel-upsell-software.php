<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
  <link rel="stylesheet" href="sty.css">
  <style>
    /* ======= Global ======= */
.navbar {
  position: fixed; 
  background: #8E7CC3;
}
    html, body {
  overflow-x: hidden;
}
.section-service-2 {
  padding: 80px 0;
  /* background: #ffffff; */
  font-family: Arial, sans-serif;
  background-color: #6B5B95;
   
}

.padding-global {
  padding-left: 20px;
  padding-right: 20px;
 
}

.container-large {
  max-width: 1200px;
  margin: 0 auto;
   
}

/* ======= Title Block ======= */
.all-feature-content {
  text-align: center;
  margin-bottom: 70px;
   color: #ffffff;
}

.headline-icon {
  width: 50px;
  margin-bottom: 10px;
    
}

.heading-style-h2 {
  font-size: 38px;
  font-weight: bold;
  margin-bottom: 10px;
   color: #ffffff;
  
}

.text-size-medium {
  font-size: 18px;
  line-height: 1.6;
  /* color: #333; */
 color: #ffffff;

}

/* ======= Sections Colors ======= */
.service-section-turquoise {
  background: #dbfff8;
}

.service-section-pink {
  background: #ffe5f0;
}

.service-section-purple {
  background: #f3e8ff;
}

.service-section-yellow {
  background: #fff7d6;
}

/* ======= Card Shadow ======= */
.shadow-medium {
  border-radius: 20px;
  padding: 50px;
  margin-bottom: 50px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* ======= Grid Layout ======= */
.service-section-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
}

.heading-style-h4 {
  font-size: 28px;
  margin-bottom: 12px;
}

.text-size-regular {
  font-size: 17px;
  color: #333;
  line-height: 1.6;
}

/* ======= Images ======= */
.service-section-image-turquoise,
.service-section-image-pink,
.service-section-image-purple,
.service-section-image-yellow {
  width: 100%;
  border-radius: 18px;
}

/* ======= Responsive Mobile ======= */
@media (max-width: 768px) {

  .service-section-grid {
    grid-template-columns: 1fr;
  }

  .shadow-medium {
    padding: 30px;
  }

  .heading-style-h2 {
    font-size: 28px;
  }
  
  .heading-style-h4 {
    font-size: 24px;
  }

  .text-size-medium {
    font-size: 16px;
     
  }

  .text-size-regular {
    font-size: 16px;
  }
}


.back-btn {
  padding: 8px 15px;
  background: #0078ff;
  color: #fff;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
}

.back-btn:hover {
  background: #005fcc;
}

    /* ================= FOOTER ================= */
.footer {
  background: #6B5B95;
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
  color: #0d0d0d;
  margin-bottom: 12px;
}

.footer-column a {
  display: block;
  color: #ffffff;
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


.service-right-side-content img {
  width: 100%;
  max-width: 280px;
  transition: transform 0.6s ease, box-shadow 0.6s ease;
}

.service-section-yellow:hover img,
.service-section-pink:hover img,
.service-section-teal:hover img,
.service-section-violet:hover img {
  transform: scale(1.08);
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}


  </style>
</head>
<body style="background-color: #6B5B95">

<nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        <a href="index.php#" target="_blank">
        <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3)"> 
        </a>
      </div>
      <button class="hamburger" id="menuBtn" >☰</button>
      <div class="nav-links" id="navMenu">
        <a href="index.php#home">Home</a>
        <a href="pricing.php#Pricing">Pricing</a>
        <a href="index.php#about">About</a>
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
            <br>
            <br><br>
            <!-- <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66010485d3e18f518b4e995b_Vector.svg" loading="lazy" alt="vector icon" class="headline-icon"> -->
            <div class="text-size-tiny text-color-black-dark">Our Feature</div></div>
            <h2 class="heading-style-h2">Serve up the perfect add-on at the right time<br></h2>
            <p class="text-size-medium">Elevate your revenue game with StayChat AI personalised upsell tool. Whether it's room upgrades, early check-ins or F&amp;B, StayChat AI makes it easy for guests to purchase upsells anytime from their own mobile device. No app downloads needed!<br></p>
            <div class="padding-bottom padding-medium"></div></div>
            <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da92733" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-turquoise shadow-medium">
              <div class="w-layout-grid service-section-grid">
                <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92735-33258260" class="service-left-side-content">
                  <div class="header-top-content button-left">
                    <h2 class="heading-style-h4">Pre-arrival upselling<br></h2>
                    <div class="padding-bottom padding-xxsmall"></div>
                    <p class="text-size-regular text-color-black-dark">Connect with guests the minute they book &amp; offers a wide range of personalised upselling options based on their preference. </p>
                    <div class="padding-bottom padding-xxxsmall"></div>
                    <p class="text-size-regular text-color-black-dark">Let your guests create the exact experience suitable to their needs. Guests can choose to upgrade their room, add amenities like breakfast, or spa, customize their room based &amp; much more. </p></div></div>
                    <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da9273d-33258260" class="service-right-side-content">
                      <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.9957275390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef0090c01dcb30acf1db_upsell-1-min.webp 1662w" alt="pre-arrival hotel upselling" class="service-section-image-turquoise"></div></div></div>
                      <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da9273f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-pink shadow-medium">
                        <div class="w-layout-grid service-section-grid">
                          <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92741-33258260" class="service-left-side-content">
                            <div class="header-top-content button-left">
                              <h2 class="heading-style-h4">In-stay hotel upselling<br></h2>
                              <div class="padding-bottom padding-xxsmall"></div>
                              <p class="text-size-regular text-color-black-dark">Continue to provide tailored upsells that aim to enhance guests’ stay. StayChat  AI understands what each guest is looking for &amp; offers them the best options to fulfil their needs. </p>
                              <div class="padding-bottom padding-xxxsmall"></div>
                              <p class="text-size-regular text-color-black-dark">From guests traveling with family might want a guided tour or activity, while guests traveling for a honeymoon might want a spa package, or concierge services for a romantic dinner. </p></div></div>
                              <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92749-33258260" class="service-right-side-content">
                                <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef05cd075a4475cb608e_upsell-2-min.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef05cd075a4475cb608e_upsell-2-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef05cd075a4475cb608e_upsell-2-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef05cd075a4475cb608e_upsell-2-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9ef05cd075a4475cb608e_upsell-2-min.webp 1662w" alt="in-stay hotel upselling" class="service-section-image-pink"></div></div></div>
                      <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da9274b" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-purple shadow-medium">
                        <div class="w-layout-grid service-section-grid">
                          <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da9274d-33258260" class="service-left-side-content">
                            <div class="header-top-content button-left">
                              <h2 class="heading-style-h4">Save time with automation<br></h2>
                              <div class="padding-bottom padding-xxsmall"></div>
                              <p class="text-size-regular text-color-black-dark">Our easy to use work flow simplifies tracking guest requests for your staff. They can simply accept, reject, or schedule requests and monitor their status, whether the request is in process, late, or completed.</p>
                              <div class="padding-bottom padding-xxxsmall"></div>
                              <p class="text-size-regular text-color-black-dark">StayChat  AI analyze guest data &amp; recommend personalized &amp; automated upsells, upgrades &amp; services that streamline operations and maximize efficiency.</p></div></div>
                              <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92755-33258260" class="service-right-side-content">
                                <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9f2f79c750425735bb933_upsell-3-min.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9f2f79c750425735bb933_upsell-3-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9f2f79c750425735bb933_upsell-3-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9f2f79c750425735bb933_upsell-3-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9f2f79c750425735bb933_upsell-3-min.webp 1662w" alt="hotel upselling automation" class="service-section-image-purple"></div></div></div>
                                <div data-w-id="3a31df64-7d7f-6161-62a5-b2584da92757" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-yellow shadow-medium">
                                  <div class="w-layout-grid service-section-grid">
                                    <div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92759-33258260" class="service-left-side-content">
                                      <div class="header-top-content button-left">
                                        <h2 class="heading-style-h4">Unlimited upsell oppotunity<br></h2>
                                        <div class="padding-bottom padding-xxsmall"></div>
                                        <p class="text-size-regular text-color-black-dark">Increase sales &amp; improve guest experience with bestsellers, including room upgrades, early check-in, late checkout, F&amp;B items, parking, pet fees &amp; more. StayChat AI provides a range of customizable upsell items for flexible selling.</p><div class="padding-bottom padding-xxxsmall"></div>
                                        <p class="text-size-regular text-color-black-dark">You pocket 100% of the upsell revenue you drive—StayChat AI never takes a cut. With our simple setup process &amp; integrations with popular PMS systems, you can start upselling and earning in no time.</p></div></div><div id="w-node-_3a31df64-7d7f-6161-62a5-b2584da92761-33258260" class="service-right-side-content">
                                          <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9fe50e3fcbfb4f5012494_upsell-4-min.webp" loading="eager" sizes="(max-width: 1919px) 100vw, 1661.988525390625px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9fe50e3fcbfb4f5012494_upsell-4-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9fe50e3fcbfb4f5012494_upsell-4-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9fe50e3fcbfb4f5012494_upsell-4-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d9fe50e3fcbfb4f5012494_upsell-4-min.webp 1662w" alt="unlimited hotel upselling" class="service-section-image-yellow"></div></div></div></div></div></div>
<!-- <script>
    // --- Mobile Menu Toggle ---
    const menuBtn = document.getElementById('menuBtn');
    const navMenu = document.getElementById('navMenu');
    menuBtn.addEventListener('click', () => {
      navMenu.classList.toggle('open');
    });
  </script> -->

<!-- <script>
function smartBack() {
  if (document.referrer !== "") {
    history.back();
  } else {
    window.location.href = "inde.php#home";
  }
}
</script> -->

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
        <a href="index.php#home">Home</a>
        <a href="index.php#about">About</a>
        <a href="Pricing.php#Pricing">Pricing</a>
        <a href="Contact.php#contact">Contact</a>
      </div>

      <div class="footer-column">
        <h4>Resources</h4>
        <a href="Blog.php#">Blog</a>
        <a href="page1.php#">Book A Demo</a>
        <a href="Refund.php#">Refund/Cancellation Policy</a>
        <a href="startfee.php#">Start For Free</a>
      </div>

 <div class="footer-column">
        <h4>Integrations</h4>
        <a href="ecard1.php#">WhatsApp</a>
        <!-- <a href="#eca.php#">Pmc</a> -->
        <a href="#pms.php#">PMS</a>
        <a href="#">Channel manager</a>
      </div>

      <div class="footer-column">
        <h4>Legal</h4>
        <a href="Privacy Polic.php#">Privacy Policy</a>
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

