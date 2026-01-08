<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
  <link rel="stylesheet" href="sty.css">
   <link rel="stylesheet" href="sty1.css">
   <link rel="stylesheet" href="sty2.css">
    <link rel="stylesheet" href="sty3.css">
    <link rel="stylesheet" href="sty4.css">
    <!-- <script src="webflow.js"></script> -->
    <style>



/* ===== DESKTOP ONLY STICKY ===== */
@media (min-width: 769px) {

  .sticky-reviews-wrap{
    position: sticky;
    top: 140px;              
    opacity: 0;
    transform: translateY(60px);
    transition: opacity .5s ease, transform .5s ease;
    z-index: 1;
  }

  .sticky-reviews-wrap.active{
    opacity: 1;
    transform: translateY(0);
    z-index: 5;
  }

}

/* ===== MOBILE = NORMAL SCROLL ===== */
@media (max-width: 768px) {

  .sticky-reviews-wrap{
    position: static !important;
    top: auto !important;
    opacity: 1 !important;
    transform: none !important;
    transition: none !important;
    z-index: auto !important;
  }

}

      
/* .hamburger {
  touch-action: manipulation;
} */

       
.ticker {
          
            background: white;
            
            padding: 8px;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }
/* footer me marquee */
        .spclflight {
    width: 100%;
   
    background: #6B5B95;
    padding: 10px 0;
    overflow: hidden;
    
}

.spclflight ul {
    display: flex;
    align-items: center;
    gap: 40px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.spclflight ul li img {
    height: 60px;           
    width: auto;
    object-fit: contain;
}
marquee {
    padding: 10px 10%;
    /* background: #ffffff;     */
    border-top: 1px solid#6B5B95;
    border-bottom: 1px solid #6B5B95;
    scrollamount: 7;        
  /* background: #0d0d0d; */
  background: #6B5B95;
}
.space {
  height: 50px;
  width: 100%;
  background-color: #6B5B95; 
}
header.hero {
      
        background-color:#6B5B95;
}
.navbar {
  width: 100%;
   background: #8E7CC3 ;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 99999;
}

    </style>
</head>

<!-- <body style="background-color: #0d0d0d"> -->
   <body background-color:#6B5B95>
  <!-- Navbar -->
   <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
         <img src="main4.png"  alt="StayChat" style="width: 150px ; filter: brightness(5.3);" > 
      <?php
      //  include"fot2.php";
       ?>
           
       </div>
      <button class="hamburger" id="menuBtn">☰</button>
      <div class="nav-links" id="navMenu">
        <a href="#home">Home</a>
        <a href="Pricing.php#Pricing">Pricing</a>
        <a href="#about">About</a>
        <a href="Contact.php#contact">Contact</a>
        <!-- <a href=" #Demo" class="btn">Book A Demo</a> -->
          <a href="page1.php" class="btn">Book A Demo</a>
    </div>
    </div>
  </nav>
  <!-- Hero -->
  <header class="hero" id="home">
    <div class="hero1"></div>
    <br>
    <br>
    <br>
    <br>
    <!-- <h1>Reimagine Guest Management</h1> -->
     <h1>Automate your hotel to connect with anyone anywhere anytime</h1>
     <p> Helps hotels manage guest communication across WhatsApp and other Channels-turning inquiries into bookings and revenue with AI-powered automation </p>
    <!-- <p>AI-powered guest communication & hotel management made simple.</p> -->
    <div class="hero-buttons">
      <!-- <button >Book A Demo</button> -->
      <a href="page1.php" class="btn">Book A Demo</a>
      <a href="startfee.php">Start For Free</a>
    </div>
  </header>

<!-- <div data-w-id="6952bac1-9df6-0143-5242-76951efdf05f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-reviews-grid"> -->
<div  style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-reviews-grid">
<div class="sticky-reviews-wrap">
<div class="general-rewiev-wrap">
<div class="testimoninal-item">
<div class="display-flex-space-between margin-top-20">
<div class="main-person-wrap">
<div class="rewiew-person-info">
<h5 class="heading-style-h3">Engage</h5>
</div>
</div>
</div>
<div class="padding-bottom xsmall"></div>
<div class="header-top-content button-left">
<h2 class="heading-style-h5">Reach your guest at scale with easy-to-use guest messaging<br></h2>
                            <div class="features-div">
                                <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                                <p class="text-size-regular--dark">Manage WhatsApp, SMS Email templates at one place</p></div>
                                <div class="features-div">
                                    <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                                    <p class="text-size-regular--dark">Use AI to generate engaging templates</p></div>
                                    <div class="features-div">
                                        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                                        <p class="text-size-regular--dark">Unified inbox to manage guest queries &amp; requests</p></div>
                                        <div class="padding-bottom padding-xxxsmall"></div>
                                     <a data-w-id="2e8654dc-9df3-acef-4440-e966ead87e7e" href="guest-engagement-for-hospitality.php" class="link-cta w-inline-block"> 
                                      <div class="text-l8">Learn more</div>                                   
                                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-4-l8-3"></div>
                                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-3-l8-3"></div>
                                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-2-l8-3"></div>
                                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-1-l8-3"></div>
                                            <div style="transform: translate3d(-18px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-wrapper-l8-3">
                                            <div class="arrow-tail-l8-3"></div>
<img width="9" src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66f4220cd990f7eb1ce09bb2_icons8-right-arrow-48%20(2).png" alt="" class="arrow-head-l8-3">
</div> 
</a> 
</div>
</div>
<div class="review-photo">
 <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min.webp" loading="lazy" sizes="(max-width: 2060px) 100vw, 2060px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eaf981a0469ebd49134a14_Engage-01-min.webp 2060w" alt="hotel guest engagement" class="home-section-image">
</div>
</div>
</div>
<!-- </div> -->
 <div class="sticky-reviews-wrap sticky-grey-1">
    <div class="general-rewiev-wrap reverse">
        <div class="review-photo">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min.webp" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e1e49d730a9dfac687df77_automate-2-min.webp 800w" alt="hotel guest engagement" class="home-section-image"></div>
            <div class="testimoninal-item">
                <div class="display-flex-space-between margin-top-20">
                    <div class="main-person-wrap">
                        <div class="rewiew-person-info">
                            <h5 class="heading-style-h3">Mobile Check-in</h5>


                        </div>
                    </div>
                </div>
                <!-- <div class="padding-bottom xsmall">

                </div> -->
                <div class="header-top-content button-left">
                    <h2 class="heading-style-h5">Let your guests seamlessly check-in on their mobile devices<br>
                </h2>
                <div class="features-div">
                    <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                    <p class="text-size-regular--dark">Eliminate front desk lines with automated data collection</p></div>
                    <div class="features-div">
                        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                        <p class="text-size-regular--dark">Collect ID, Signatures, payments &amp; credit card details</p>
                    </div>
                    <div class="features-div">
                        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
                        <p class="text-size-regular--dark">Customizable workflow to meet your needs</p></div>
                        <div class="padding-bottom padding-xxxsmall"></div>
                        <a data-w-id="987c0548-6884-01a8-5193-8897b4b31b63" href="contactless-checkin-checkout.php" class="link-cta w-inline-block">
                            <div class="text-l8">Learn more</div>
                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-4-l8-3"></div>
                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-3-l8-3"></div>
                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-2-l8-3"></div>
                            <div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-1-l8-3"></div>
                            <div style="transform: translate3d(-18px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-wrapper-l8-3">
                                <div class="arrow-tail-l8-3">

                                </div>
                                <img width="9" src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66f4220cd990f7eb1ce09bb2_icons8-right-arrow-48%20(2).png" alt="" class="arrow-head-l8-3">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-reviews-wrap sticky-yellow-3">
            <div class="general-rewiev-wrap">
                <div class="testimoninal-item">
                    <div class="display-flex-space-between margin-top-20">
                        <div class="main-person-wrap">
                            <div class="rewiew-person-info">
                                <h5 class="heading-style-h3">Upsell</h5>
                            </div>
                        </div>
                    </div>
                    <div class="padding-bottom xsmall">

                    </div>
                    <div class="header-top-content button-left">
                        <h2 class="heading-style-h5">Offer personalised upsell with ease &amp; drive more revenue<br>
                    </h2>
                    <div class="features-div">
        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
        <p class="text-size-regular--dark">Upsell throughout the guest journey- pre arrival, in stay &amp; post stay</p>
    </div>
    <div class="features-div">
        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
        <p class="text-size-regular--dark">Save time with StayChat AI &amp; personalise upsell at scale</p>
    </div>
    <div class="features-div">
        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
        <p class="text-size-regular--dark">Pocket 100% of the upsell revenue- StayChat AI never takes a cut</p>
    </div>
    <div class="padding-bottom padding-xxxsmall"></div>
        <a data-w-id="67672e7b-d36d-5d49-7a8f-2693bfff9e66" href="hotel-upsell-software.php" class="link-cta w-inline-block"><div class="text-l8">Learn more</div><div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-4-l8-3"></div>
<div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-3-l8-3"></div>
<div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-2-l8-3"></div>
<div style="opacity: 0; transform: translate3d(-5px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-tail-dot-1-l8-3"></div>
<div style="transform: translate3d(-18px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="arrow-wrapper-l8-3">
    <div class="arrow-tail-l8-3">
    </div>
    <img width="9" src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66f4220cd990f7eb1ce09bb2_icons8-right-arrow-48%20(2).png" alt="" class="arrow-head-l8-3">
</div>
</a>
</div>
</div>
<div class="review-photo">
<img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min.webp" loading="lazy" sizes="(max-width: 4240px) 100vw, 4240px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-2000.webp 2000w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-2600.webp 2600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min-p-3200.webp 3200w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb17c9dde493cf813f2e7a_upsell-01-min.webp 4240w" alt="hotel guest engagement" class="home-section-image"></div></div></div><div class="sticky-reviews-wrap sticky-grey-4">
<div class="general-rewiev-wrap reverse">
    <div class="review-photo">
<img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eb01817c3c6eb589ac2e48_delight-1-min.webp" loading="lazy" sizes="(max-width: 798px) 100vw, 798px" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eb01817c3c6eb589ac2e48_delight-1-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66eb01817c3c6eb589ac2e48_delight-1-min.webp 798w" alt="hotel guest engagement" class="home-section-image">\
</div>
<div class="testimoninal-item">
<div class="display-flex-space-between margin-top-20">
<div class="main-person-wrap">
<div class="rewiew-person-info">
<h5 class="heading-style-h3">Smart Checkout</h5>
</div>
</div>
</div>
<div class="padding-bottom xsmall">

</div>
<div class="header-top-content button-left">
<h2 class="heading-style-h5">Turnover room faster with StayChat mobile checkout<br></h2>
<div class="features-div">
<img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
<p class="text-size-regular--dark">Take control of the reviews &amp; drive positive reviews online </p></div>
<div class="features-div">
<img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
<p class="text-size-regular--dark">Drive ancillary revenue &amp; collect payments online</p></div><div class="features-div">
    <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/6746b75b18df7367c4ab6fd1_icons8-check-96.png" loading="lazy" alt="circle tick icon" class="icon-check">
    <p class="text-size-regular--dark">Deliver eFolios automatically</p>
</div>
<div class="padding-bottom padding-xxxsmall"></div>
</div>
</div>
</div>
</div>
   </div>


<div  style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="our-reviews-grid">

<section id="about">
    <h2>About StayChat AI</h2>

    <div class="about-content">

<div class="container-large">
  
                            <div class="w-layout-grid service-section-grid">
                              <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16ed-98a769e7" class="service-left-side-content">
                                <div class="header-top-content button-left">
                                  <h2 class="heading-style-h4">24/7 AI-empowered team members<br>
                                  
                                  </h2>
                                  <div class="padding-bottom padding-xxsmall"></div>
                                 
                                  <p class="text-size-regular text-color-black-dark"><strong>StayChat AI</strong> is a hotel-focused communication and automation platform designed to modernize how hospitality businesses interact with guests. In today’s always-on world, hotels receive inquiries from multiple channels—especially WhatsApp—yet most still manage them manually, leading to delayed responses, missed bookings, and operational stress. StayChat AI brings all guest conversations into one intelligent system, allowing hotels to stay responsive, consistent, and available anytime, from anywhere.<br><br>
                                At its core, StayChat AI uses artificial intelligence to understand guest intent, respond instantly to common inquiries, and assist hotel teams with bookings, confirmations, and follow-ups. It integrates with hotel operations to track inquiries, manage leads, and support upselling services such as early check-ins, room upgrades, or local experiences. By combining automation with human oversight, StayChat ensures conversations feel natural and personal while significantly reducing staff workload.</p> 
                                  <!-- <p class="text-size-regular text-color-black-dark">Improve operational efficiency, guest satisfaction, &amp; revenue potential with Guestara’s AI Agents acting as your 24/7 guest services team. Provide personalized communication, suggest tailored recommendations, &amp; offer relevant add-ons, ensuring every guest interaction is meaningful.</p> -->
                                </div>
                              </div>
                                  <div id="w-node-f309e3b4-8ecc-6d34-1c4a-bb533ebd16f5-98a769e7" class="service-right-side-content">
                                    <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min.webp" loading="eager" sizes="100vw" srcset="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-500.webp 500w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-800.webp 800w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-1080.webp 1080w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-1600.webp 1600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-2000.webp 2000w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-2600.webp 2600w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min-p-3200.webp 3200w, https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d60867db4c9b21cd05bdda_engage-4-min.webp 3334w" alt="AI for hotels" class="service-section-image-violet">
                                  </div>
                                </div>
                              </div>



      <div class="about-text">
        <br>

        <!-- <p>Welcome to <strong>StayChat AI</strong>, your perfect destination for luxury and comfort. Located in the heart of Goa, we combine modern elegance with warm hospitality to make your stay unforgettable.</p>

        <p>Founded in 2015, StayChat AI has become a favorite for travelers who value style and comfort. Whether you're here for business or leisure, our team is dedicated to providing exceptional service.</p> -->

        <!-- <h3>Our Facilities</h3>
        <ul>
          <li>Free High-Speed Wi-Fi</li>
          <li>Swimming Pool & Spa</li>
          <li>Restaurant & Bar</li>
          <li>Gym & Fitness Center</li>
          <li>Conference Room</li>
          <li>Airport Pickup & Drop</li>
        </ul> -->
      </div>

      <div class="about-image">
        <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66d5f9d31800bb2dcd5fce21_engage-2-1.webp" alt="StayChat Hotel Lobby">
      </div>
    </div>
  </section>
 <?php 
 #include"fot3.php";
 ?>
<div class="main">
<div class="section-home-7 fullscreen">
  <div class="cta-card-large-v">
    <div class="cta-card-left-content2">
      <h2 class="heading-style-h2--dark2">See StayChat in action now.</h2>
      <p class="text-size-regular2">
        There's only so much we can say — so let us show you! Schedule a demo today and reach your business goals.
      </p>
      <div class="cta-bottom-wrapper2">
        <a href="page1.php" class="button1">Book A Demo →</a>
        <a href="startfee.php" class="button is-secondary">Get started free →</a>
      </div>
    </div>
    <div class="cta-right-content--v2">
      <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb6c35e3d0eaf4e5cf478b_cta.webp"
           alt="CTA Image" class="cta-image">
    </div>
  </div>
</div>
</div>
</div>

<marquee class="tick" behavior="scroll" direction="left" scrollamount="20">
   <div class="spclflight">
					  <ul data-copy="">
					 <li><img src="https://promos.makemytrip.com/images/partnerLogo/dh/amritara.jpg" alt=""></li>
                        <li><img src="https://promos.makemytrip.com/images/partnerLogo/hotels/ananta.jpg" alt=""></li>
                        <li><img src="https://promos.makemytrip.com/images/partnerLogo/dh/best-western.jpg" alt=""></li>
                        <li><img src="https://promos.makemytrip.com/images/partnerLogo/dh/bloom-hotel.jpg" alt=""></li>
                        <li><img src="https://promos.makemytrip.com/images/partnerLogo/dh/cgh-earth.png" alt=""></li>
                        <li><img src="https://promos.makemytrip.com/images/partnerLogo/dh/clarks.jpg" alt=""></li>
					             	<li><img src="https://gos3.ibcdn.com/alaya-1761849775.jpg" alt=""></li>
					            	<li><img src="https://gos3.ibcdn.com/opo-1761979606.jpg" alt=""></li>
	                      <li><img src="https://gos3.ibcdn.com/nabhananta-1763470551.png" alt=""></li>
					              <li><img src="https://gos3.ibcdn.com/staybird-1763470564.png" alt=""></li>
	                      <li><img src="https://gos3.ibcdn.com/jaisrushti-1763470591.png" alt=""></li>
					              <li><img src="https://gos3.ibcdn.com/vineapple-1763470610.png" alt=""></li>
					              <li><img src="https://gos3.ibcdn.com/orion-1761979595.jpg" alt=""></li>
              			 </ul>  
				  </div> 
    </marquee>
 
<?php

include"Footer.php";
?>

<script>
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");

let startX = 0;
let startY = 0;
let isSwipe = false;

/* Touch start */
menuBtn.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
  startY = e.touches[0].clientY;
  isSwipe = false;
});

/* Touch move (detect swipe) */
menuBtn.addEventListener("touchmove", (e) => {
  const moveX = e.touches[0].clientX;
  const moveY = e.touches[0].clientY;

  if (Math.abs(moveX - startX) > 10 || Math.abs(moveY - startY) > 10) {
    isSwipe = true;
  }
});

/* Touch end */
menuBtn.addEventListener("touchend", (e) => {
  if (isSwipe) return; 
  navMenu.classList.toggle("active");
});

/* Desktop click */
menuBtn.addEventListener("click", (e) => {
  navMenu.classList.toggle("active");
});

/* Close menu on outside click */
document.addEventListener("click", (e) => {
  if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
    navMenu.classList.remove("active");
  }
});
</script>

<script>
const sections = document.querySelectorAll(".sticky-reviews-wrap");

window.addEventListener("scroll", () => {
  const triggerPoint = window.innerHeight * 0.65;

  sections.forEach((section, index) => {
    const rect = section.getBoundingClientRect();

    if (rect.top < triggerPoint) {
      section.classList.add("active");
    } else {
      section.classList.remove("active");
    }
  });
});
</script>

</body>
</html>

