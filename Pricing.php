<?php
include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>
     <style>
        /* ===== Reset & Base Styles ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", Arial, sans-serif;
  color: #222;
  /* background-color: #f8f9fa; */
  background-color:#6B5B95;
  line-height: 1.6;
}


/* ===== About Section ===== */
.about-section {
  padding: 100px 20px 60px;
  text-align: center;
  background-color: #ffffff;
}

.about-section h1 {
  font-size: 2.2rem;
  color: #006b3c;
  margin-bottom: 20px;
}

.about p {
  max-width: 700px;
  margin: auto;
  font-size: 1rem;
  color: #555;
}

/* ===== Pricing Section ===== */
.pricing-section {
  padding: 80px 50px;
  text-align: center;
  /* background-color: #f1fdf5; */
  background-color: #6B5B95;
}

.pricing-section h1 {
  font-size: 2.2rem;
  color: #ffffff;
  margin-bottom: 40px;
}

.pricing-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}

.plan {
  background-color: white;
  width: 360px;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  padding: 25px;
  transition: all 0.3s ease-in-out;
}

.plan:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0, 107, 60, 0.25);
}

.plan h2 {
  color: #006b3c;
  font-size: 1.4rem;
  margin-bottom: 10px;
}

.plan .price {
  font-size: 1.8rem;
  color: #222;
  margin-bottom: 10px;
}

.plan p {
  color: #555;
  font-size: 0.95rem;
  margin-bottom: 15px;
}

.plan button {
  background-color: #006b3c;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s;
}

.plan button:hover {
  background-color: #00a857;
}


     </style>
</head >
<body style="background-color: #6B5B95">
       <!-- pricing -->
<section  id="Pricing" class="pricing-section">
    <h1>Choose Your Pricing Plan</h1>

    <div class="pricing-container">
      <!-- Base Plan -->
      <div class="plan">
        <h2>Base Plan – WhatsApp Automation</h2>
        <p class="price">₹999 <span>/ month</span></p>
        <p>Perfect for small hotels or guesthouses that mainly use WhatsApp for bookings.</p>
        <ul>
          <p>WhatsApp integration for booking confirmations</p>
          <p>Automated responses for inquiries</p>
          <p>Simple booking reminders & check-in/out updates</p>
        </ul>
        <button onclick="window.location.href='startfee.php'">Start Free Trial</button>
      </div>

      <!-- Pro Plan -->
      <div class="plan">
        <h2>Pro Plan – AI Agent + PMS</h2>
        <p class="price">₹2,599 <span>/ month</span></p>
        <p>Best for mid-size hotels using automation with property management sync.</p>
        <ul>
          <p>AI-powered booking assistant</p>
          <p>Auto room availability & pricing sync</p>
          <p>Dashboard for performance tracking</p>
        </ul>
        <br>
        <br>
        <button onclick="window.location.href='startfee.php'">Start Free Trial</button>
      </div>

      <!-- Enterprise Plan -->
      <div class="plan">
        <h2>Enterprise Plan – Unified Communication</h2>
        <p class="price">₹4,999 <span>/ month</span></p>
        <p>For large hotel chains that need advanced automation & CRM integration.</p>
        <ul>
          <p>Multi-property management</p>
          <p>Full WhatsApp + Email + SMS automation</p>
          <p>Priority 24×7 customer support</p>
        </ul>
        <button onclick="window.location.href='startfee.php'">Start Free Trial</button>
      </div>
    </div>
  </section>
</body>
</html>
<?php
include"footer.php";
?>