
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>
    <link rel="stylesheet" href="sty.css">
    <style>
.navbar {

   background: #8E7CC3 ;
}
/* ===== Hover Lift (Premium Feel) ===== */
.service-section-yellow:hover,
.service-section-pink:hover,
.service-section-teal:hover,
.service-section-violet:hover {
  transform: translateY(-12px) scale(1.02);
  box-shadow: 0 25px 60px rgba(0,0,0,0.18);
}

/* ===== Image Hover Zoom ===== */
.service-right-side-content img {
  transition: transform 0.6s ease;
}
.service-section-yellow:hover img,
.service-section-pink:hover img,
.service-section-teal:hover img,
.service-section-violet:hover img {
  transform: scale(1.08);
}








body {
  font-family: "Poppins", sans-serif;
  margin: 0;
  background: #6B5B95 !important;
  color: #ffffff;
}
html, body {
  overflow-x: hidden;
 
}
.container-large {
  width: 100%;
  padding: 50px 0%;
  background-color: #6B5B95;
  
}

/* Headline Section */
.all-feature-content {
  text-align: center;
  margin-bottom: 50px;
}

.all-feature-headline {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
 
}

.headline-icon {
  width: 25px;
  height: 25px;
}

.heading-style-h2 {
  font-size: 2.2rem;
  color: #111;
  margin: 10px 0;
   color: #ffffff;
}

.text-size-medium {
  font-size: 1.1rem;
  max-width: 700px;
  margin: 0 auto;
  color: #ffffff;
}

/* --- Feature Boxes (Color Sections) --- */
.service-section-yellow,
.service-section-pink,
.service-section-teal,
.service-section-violet {
  border-radius: 20px;
  padding: 200px 10%;
  margin-bottom: 40px;
  transition: 0.3s;
   max-width: 1100px;
    margin: 0 auto 40px;
}

.service-section-yellow {
  background: #fff9e6;
  
}
.service-section-pink {
  background: #ffe6f1;
}
.service-section-teal {
  background: #e6f9f8;
}
.service-section-violet {
  background: #efe6ff;
}

/* Add light shadow */
.shadow-medium {
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

/* --- Grid Layout for Each Section --- */
.w-layout-grid.service-section-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  align-items: center;
  gap: 40px;
}

/* Left Content (Text) */
.service-left-side-content {
  padding: 20px;
}

.heading-style-h4 {
  font-size: 1.6rem;
  margin-bottom: 15px;
  color: #111;
 

}

.text-size-regular {
  font-size: 1rem;
  line-height: 1.6;
  color: #444;
}

/* Right Content (Image) */
.service-right-side-content {
   display: flex;
  justify-content: center;
  align-items: center;
}

.service-right-side-content img {
  width: 100%;
  max-width: 320px;
   height: auto;
    display: block;
  object-fit: contain;
   margin: 0 auto;
  
}

/* --- Responsive Design --- */
@media (max-width: 900px) {
  .heading-style-h2 {
    font-size: 1.8rem;
  }

  .heading-style-h4 {
    font-size: 1.4rem;
  }

  .service-section-yellow,
  .service-section-pink,
  .service-section-teal,
  .service-section-violet {
     padding: 30px 5px;
    
  }
}


@media (max-width: 768px) {
  .text-size-medium {
    font-size: 1rem;
  }

  .service-right-side-content img {
    max-width: 100%;
  }
}




    /* ================= FOOTER ================= */
.footer {
  /* background: #111; */
   background: #6B5B95;
  color: #ccc;
  padding: 10px 10px;
  margin-top: 1px;

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
  color:  #ffffffff;
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
<!-- <body style="background-color: #0d0d0d !important"> -->
<body background-color:#6B5B95 !important>
  <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
         <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3)">    
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


<!-- Learn More Button -->
<!-- <a class="link-cta w-inline-block" onclick="showDetails()"> -->
    
  <div class="container-large">
  <div data-w-id="f309e3b4-8ecc-6d34-1c4a-bb533ebd16bb" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="all-feature-content">
    <div class="all-feature-headline">
      <!-- <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66010485d3e18f518b4e995b_Vector.svg" loading="lazy" alt="vector icon" class="headline-icon"> -->
      <div class="text-size-tiny text-color-black-dark">Our Feature</div></div>
  <h2 class="heading-style-h2">Communicate. Automate. Delight. Simplify.<br></h2>
  <p class="text-size-medium">Save your team time by automatically communicating with your guests throughout their stay. &nbsp;Delight guests with quick &amp; direct responses.<br></p>
  <div class="padding-bottom padding-medium">
  </div>
</div>
<div data-w-id="f309e3b4-8ecc-6d34-1c4a-bb533ebd16c7" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-yellow shadow-medium">
  <div class="w-layout-grid service-section-grid">
    <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16c9-98a769e7" class="service-left-side-content">
      <div class="header-top-content button-left">
        <h2 class="heading-style-h4">Personalize relationships throughout the guest journey<br>
        </h2>
        <div class="padding-bottom padding-xxsmall">

        </div>
        <p class="text-size-regular text-color-black-dark">Communicate with guests throughout their stay. Easily customize when &amp; what messages go out to your guests &amp; ensure your brand standards are upheld.</p></div></div>
        <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16d1-98a769e7" class="service-right-side-content">
          <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1.webp" loading="eager" sizes="100vw" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-2000.webp 2000w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1-p-2600.webp 2600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d6015fd88245987bcabf3c_engage-1-1.webp 3334w" alt="personalise guest communication" class="service-section-image-yellow">
        </div>
      </div></div>
      <div data-w-id="f309e3b4-8ecc-6d34-1c4a-bb533ebd16d3" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-pink shadow-medium">
        <div class="w-layout-grid service-section-grid">
          <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16d5-98a769e7" class="service-left-side-content">
            <div class="header-top-content button-left">
              <h2 class="heading-style-h4">Welcome guest in their native language<br>
              </h2>
              <div class="padding-bottom padding-xxsmall">
              </div>
              <p class="text-size-regular text-color-black-dark">Take personalisation to next level with automated translation. StayChat AI automatically translates 100+ languages so you can provide top-notch hospitality to all guests.</p></div></div>
              <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16dd-98a769e7" class="service-right-side-content">
                <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min.webp" loading="eager" sizes="100vw" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-2000.webp 2000w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min-p-2600.webp 2600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f916312957f6bb500ee2_engage-3-1-min.webp 3334w" alt="guest communication in native language" class="service-section-image-pink">
              </div>
            </div>
          </div>
                <div data-w-id="f309e3b4-8ecc-6d34-1c4a-bb533ebd16df" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="service-section-teal shadow-medium">
                  <div class="w-layout-grid service-section-grid">
                    <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16e1-98a769e7" class="service-left-side-content">
                      <div class="header-top-content button-left">
                        <h2 class="heading-style-h4">One unified hub for all guest communication channels<br></h2>
                        <div class="padding-bottom padding-xxsmall"></div>
                        <p class="text-size-regular text-color-black-dark">Stay organized &amp; communicate with guests in one centralized place. Send, receive, track &amp; manage all communications across all channels from one hub. &nbsp;With Inbound Messaging support, turn every conversation into an improved experience or a upsell.</p></div></div>
                        <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16e9-98a769e7" class="service-right-side-content">
                          <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1.webp" loading="eager" sizes="100vw" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1-p-2000.webp 2000w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1.webp 3334w" alt="hotel unified inbox" class="service-section-image-teal"></div></div></div>
                          <div data-w-id="f309e3b4-8ecc-6d34-1c4a-bb533ebd16eb" style="opacity: 0;" class="service-section-violet shadow-medium">
                              </div>
                            </div>
                            <!-- </a> -->

<script>
function showDetails() {
    document.getElementById("details").style.display = "block";
    document.getElementById("details").scrollIntoView({ behavior: "smooth" });
}
</script>

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
        <a href="Privacy Policy.php#">Privacy Policy</a>
        <a href="Terms of Service.php#">Terms of Service</a>
        <a href="Cookie Policy.php#">Cookie Policy</a>
      </div>
    </div>

   

    <div class="footer-bottom">

  <a href="https://wa.me/+919616422222" target="_blank" class="wa-icon">
  <img src="https://img.icons8.com/?size=100&id=964RahB4l606&format=png&color=000000" alt="WhatsApp">
</a>

<a href="https://www.linkedin.com/company/staychat-ai/" target="_blank" class="wa-icon">
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




