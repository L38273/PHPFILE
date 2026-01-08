<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
   
  <style>
    /* ================= FOOTER ================= */
.footer {
  background: #6B5B95;
  color: #ccc;
  padding: 40px 20px;
  margin-top: 40px;
}
.footer-1 {
    background: #6B5B95;
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



 .section-1 {
    padding: 50px 0;
    background: #6B5B95;
    background-size: 50cm;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
} 

.section-2 {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 12px;
    justify-items: center;
    align-items: center;
}


.section-2 img {
    width: 120px;
    height: 60px;
    object-fit: contain;
    background: #fff;
    padding: 10px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    border: 1px solid #eee;
    transition: 0.3s ease;
}

.section-2 img:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}


@media (max-width: 1024px) {
    .section-2 {
        grid-template-columns: repeat(4, 1fr);
    }
}


@media (max-width: 768px) {
    .section-2 {
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .section-2 img {
        width: 100px;
        height: 50px;
    }
}


@media (max-width: 480px) {
    .section-2 img {
        width: 85px;
        height: 45px;
    }
}


.button {
    display: inline-block;
    background: #00c853;
    color: white;
    padding: 12px 28px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s ease;
    margin-top: 25px;
    box-shadow: 0 4px 12px rgba(0, 200, 83, 0.3);
}

.button:hover {
    background: #00e676;
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0, 200, 83, 0.4);
}
.section-1 h1 {
    font-size: 2.2rem;
    color: #fff;
    font-weight: 700;
    margin-bottom: 10px;
    text-align: center;
}

.section-1 p {
    font-size: 1.1rem;
    color: #ddd;
    text-align: center;
    margin-bottom: 25px;
}
@media (max-width: 768px) {
    .section-1 h1 {
        font-size: 1.7rem;
    }
    .section-1 p {
        font-size: 1rem;
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

.wa-icon-1{
   width:44px;
  height:44px;
  display:inline-flex;
  align-items:center;
  justify-content:center;
  border-radius:50%;
  text-decoration:none;
}
.wa-icon-1 img{
  width:80px;
  height:80px;
  /* margin-left: 30px; */
  margin-right: 30px;

}



  </style>
</head>
<body style="background-color: #6B5B95">
  <div class="footer-1">
   <div class="section-1">
          <h1>Your hospitality tech stack’s best friend</h1>
         <p>We work closely with the industry leaders to offer seamless solutions</p>
        <div class="section-2">
          

            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cae08c7aa15f20b689d63a_hotelogix.png">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb1fb26685a7e31b7c08f0_Cloudbeds.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb1fb22db51139d673552f_staah.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66e8ddfe171ca3c335f0e6d6_beds24-1.svg">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb1f506685a7e31b7bb54d_apaleo.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb1f508408c438e5ffd3b7_whatsapp-p-500.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cae119fdfb4395bcb1ffad_Siteminder.png">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/68e51901ca5637eed2161e4e_yanoljacloudsolution_logo-min.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/670266681cd620f266e79840_twilio.svg">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb212d1238deea1b4b2561_Google-Review-Symbol.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb2163cbc44277bdd24981_Mailchimp-Logo.webp">
            <img src="https://cdn.prod.website-files.com/66010485d3e18f518b4e989b/66cb212cdde493cf814755f9_Little%20Hotelier.webp">

        </div>

        <a href="Exploreintegrations.php#Exploreintegrations" class="button">Explore integrations</a>

  </div>
  <footer class="footer">
  <div class="footer-container">

    <div class="footer-top">
      <h2 class="footer-logo">StayChat AI</h2>
      <p class="footer-desc"> Hotel direct booking  automation powered by AI.</p>
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
        <a href="page1.php"#>Book A Demo</a>
        <a href="Refund.php#">Refund/Cancellation Policy</a>
        <a href="startfee.php#">Start For Free</a>
      </div>

 <div class="footer-column">
        <h4>Integrations</h4>
        <a href="ecard1.php#">WhatsApp</a>
        <a href="ecard3.php#">Paytm</a>
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

<!-- <a href="inde.php#" target="_blank" class="wa-icon-1">
  <img src="main2.png" alt="instagram">
</a> -->

 <a href="index.php#">
        <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3)"> 
        </a>

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
  </div>
</body>
</html>