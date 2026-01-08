
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
  <link rel="stylesheet" href="sty.css">
  <style>
    /* General Body */
    .navbar {
  position: fixed; 
  background: #8E7CC3;
}

body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #6B5B95;
  margin: 0;
  padding: 0;
  padding-top: 150px;

}

html, body {
  overflow-x: hidden;
}


/* Container */
.container-large {
  max-width: 1000px;
  margin: 0 auto;
  padding: 40px 20px;
  background-color: #fff;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  border-radius: 8px;
  /* padding-top: 150px; */
}

/* Headings */
.heading-h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #0a7cff;
}

h5 {
  font-size: 20px;
  font-weight: 600;
  margin-top: 30px;
  margin-bottom: 10px;
  color: #0a7cff;
}

/* Paragraphs */
p {
  font-size: 16px;
  color: #555;
  margin-bottom: 16px;
}

/* Links */
a {
  color: #0a7cff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Policy Component Layout */
.privacy-policy-component {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

/* Top Section (Heading + Date + Button) */
.privacy-policy-top-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.privacy-policy-left-content {
  display: flex;
  flex-direction: column;
}

.text-regular {
  font-size: 14px;
  color: #888;
}

/* Right content / button */
.privacy-policy-right-content {
  background-color: #0a7cff;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-align: center;
}

/* Rich text content */
.privacy-policy-details {
  color: #555;
}

.privacy-policy-details ul {
  margin-left: 20px;
}

.privacy-policy-details li {
  margin-bottom: 8px;
}

/* Responsive */
@media (max-width: 768px) {
  .privacy-policy-top-content {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }

  .privacy-policy-right-content {
    width: 100%;
    text-align: center;
  }
}

  </style>
</head>
  <body style="background-color:#6B5B95">
   <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        
          <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3);"> 
        </div>
      <button class="hamburger" id="menuBtn">☰</button>
      <div class="nav-links" id="navMenu">
        <a href="index.php#home">Home</a>
        <a href="Pricing.php#Pricing">Pricing</a> 
        <a href="index.php#about">About</a>
        <a href="contact.php#contact">Contact</a> 
       
          <a href="page1.php" class="btn">Book A Demo</a> 
       </div>
    </div>
  </nav>   
  <div class="container-large">
  <div class="padding-section-large padding-top-medium">
  <div class="privacy-policy-component">
  <div class="privacy-policy-top-content">
  <div class="privacy-policy-left-content">
  <h1 class="heading-h3">Terms of Service</h1>
  <p class="text-regular opacity-80">Last updated: 20/11/2025</p>
  <p class="privacy-policy-details w-richtext">Welcome to StayChat Private Limited (“StayChat”, “we”, “our”, “us”). By accessing or using our website, app, or services, you agree to the following Terms & Conditions.
</p>
  </div>
  </div>
  <div class="padding-bottom padding-medium">
  </div>
  <div class="privacy-policy-details w-richtext">
  <h5>1. Use of Services</h5>
  <p>1.1.You agree to use StayChat services only for lawful business purposes.<br>1.2.You are responsible for maintaining the confidentiality of your account and all activities under it.;</p>
    <h5>2. Service Accuracy</h5>
    <p>2.1.We work to ensure accurate and reliable automation, but we do not guarantee error-free performance.<br>2.2.StayChat is not responsible for losses caused by user input errors, misuse, or third-party failures (WhatsApp API, PMS integrations, hosting providers, etc.).</p>

  <h5>3. Payments & Subscriptions</h5>
  <p>3.1.For paid plans, fees must be paid as per the pricing displayed or communicated.<br>3.2.Non-payment may result in suspension of services.</p>
  <h5>4. Intellectual Property</h5>
  <p>4.1.All logos, code, content, and branding belong to StayChat Private Limited.<br>4.2.You may not copy, modify, or resell our technology without written permission.</p>
  <h5>5. User Content</h5>
  <p>5.1.By using our services, you grant us permission to process your messages and data solely for automation, support, and improvement.<br>5.2.You are responsible for ensuring your content is legal and does not violate the rights of others.</p>
  <h5>6. Third-Party Integrations</h5>
  <p>6.1.StayChat may integrate with WhatsApp, PMS systems, CRMs, and other tools.<br>6.2.We are not responsible for downtime or issues caused by third-party platforms.</p>
  <h5>7. Limitation of Liability</h5>
  <p>7.1.StayChat is not liable for Business losses Data loss not caused by our negligence Third-party service interruptions Misuse of the platform by users Our total liability is limited to the amount you paid us in the past 3 months.</p>
  <h5>8. Termination</h5>
  <p>8.1. We may suspend or terminate accounts that violate these Terms or misuse the platform.<br>8.2.You may request account deletion anytime.</p>
  <h5>9. Governing Law</h5>
<p>9.1.These Terms are governed by the laws of India.<br>9.2.Any disputes will be resolved in Varanasi, Uttar Pradesh.</p>  
<h5>10. Contact Us</h5>
<p>For questions or support, contact:
<br>📩 support@staychat.in </p> 
  
</div>
</div></div></div>
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
</body>
</html>
<?php include"Footer.php";?>