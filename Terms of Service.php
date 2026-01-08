
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
        <a href="index.php#">
          <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3);"> 
          </a>
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
  <p class="privacy-policy-details w-richtext">Welcome to StayChat Private Limited (“StayChat”, “we”, “our”, or “us”).
By using our website, applications, or services (“Services”), you agree to these Terms.
</p>
  </div>
  </div>
  <div class="padding-bottom padding-medium">
  </div>
  <div class="privacy-policy-details w-richtext">
  <h5>1. What StayChat Does</h5>
  <p>StayChat provides communication automation and messaging tools for hospitality businesses, including integrations with WhatsApp and Property Management Systems (PMS).<br>We help hotels manage guest conversations, bookings, and operations more efficiently.</p>
    <h5>2. Acceptable Use</h5>
<p>You agree to:<br>•	Use StayChat only for lawful business purposes<br>
	•	Comply with all applicable laws and regulations<br>
	•	Follow WhatsApp / Meta platform policies when using WhatsApp integrations</p>
  <p>You are responsible for all activity under your account and for keeping your login credentials secure.</p>
  <h5>3.Service Availability & Accuracy</h5>
  <p>We aim to provide reliable, high-quality service, but:<br>
	•	We do not guarantee uninterrupted or error-free operation<br>
	•	Automation outcomes may vary based on user inputs and third-party systems</p>
  <strong>StayChat is not responsible for issues caused by:</strong>
  <p>
    •	Incorrect data or configurations<br>
	•	Misuse of the platform<br>
	•	Third-party services (WhatsApp APIs, PMS providers, hosting services, telecom networks)
  </p>
  <h5>4.Payments & Subscriptions</h5>
  <p>•	Paid plans are billed according to the pricing shared at signup<br>
	•	Failure to pay may result in suspension or termination of services<br>
	•	Fees are non-refundable unless explicitly stated otherwise</p>
  <h5>5.Data, Privacy & GDPR</h5>
<p>Your privacy matters to us.<br>
	•	We process customer and guest data only to provide and improve our Services<br>
	•	We act as a data processor, and you remain the data controller for guest data<br>
	•	Our data handling practices comply with applicable data protection laws, including GDPR, where applicable</p>
  <h5>6.WhatsApp & Third-Party Platforms </h5>
<p>•	StayChat uses official WhatsApp Business APIs<br>
	•	Your use of WhatsApp through StayChat must comply with Meta / WhatsApp policies<br>
	•	We are not responsible for account restrictions, suspensions, or outages caused by WhatsApp or other third-party platforms</p> 
 <h5>7. Intellectual Property</h5>
 <p>All software, code, designs, trademarks, and branding belong exclusively to StayChat Private Limited.<br>
You may not copy, resell, reverse-engineer, or misuse our technology without written permission.</p>
  <h5>8. Limitation of Liability</h5>
  <p>To the maximum extent permitted by law:<br>•	StayChat is not liable for indirect, incidental, or consequential losses
	•	We are not responsible for business loss, revenue loss, or data loss not caused by our direct negligence<br>
Our total liability is limited to the amount you paid us in the three (3) months prior to the claim.</p>
  <h5>9. Account Termination</h5>
  <p>•	We may suspend or terminate accounts that violate these Terms or applicable laws<br>
	•	You may request account deletion at any time, subject to legal and compliance obligations</p>
<h5>10. Governing Law</h5>
<p>These Terms are governed by the laws of India.<br>
Any disputes shall be resolved exclusively in Varanasi, Uttar Pradesh, India.
 </p> 
 <h5>11. Contact</h5>
  <p>
For questions or support:<br>
📩 support@staychat.in</p>
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