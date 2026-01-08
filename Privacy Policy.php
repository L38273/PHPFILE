<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StayChat - Hotel Website</title>
   <link rel="stylesheet" href="sty.css">
  <style>
  /* ===============================================
   GLOBAL PAGE STYLE
=============================================== */
.navbar {
  position: fixed; 
}

body {
  margin: 0;
  padding: 0;
  background: #6B5B95;
  font-family: "Inter", Arial, sans-serif;
  color: #222;
   padding-top: 100px;
}
html, body {
  overflow-x: hidden;
}
/* Outer container */
.padding-global {
  max-width: 1100px;
  margin: 40px auto;
  padding: 30px;
  background: #ffffff;
  border: 2px solid #d0d9e6;
  border-radius: 14px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
 
}

/* Content wrapper */
.privacy-policy-component {
  padding: 25px;
  border: 2px solid #c7d6ec;
  border-radius: 14px;
  background: #f9fbff;
}

/* ===============================================
   HEADING (CENTER + BORDER)
=============================================== */
.privacy-policy-left-content {
  width: 100%;
  text-align: center;
}

.heading-style-h4 {
  display: inline-block;
  padding: 12px 30px;
  font-size: 32px;
  font-weight: 700;
  color: #1a1a1a;
  border: 3px solid #4a90e2;
  border-radius: 12px;
  background: #eef5ff;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  margin-bottom: 10px;
}

/* date text */
.text-size-regular {
  font-size: 16px;
  color: #666;
}

/* ===============================================
   TOP BAR
=============================================== */
.privacy-policy-top-content {
  border-bottom: 2px solid #d6e0ee;
  padding-bottom: 20px;
  margin-bottom: 30px;
}

/* ===============================================
   MAIN CONTENT BLOCK
=============================================== */
.privacy-policy-details {
  padding: 25px;
  background: #ffffff;
  border: 2px solid #d4ddee;
  border-radius: 12px;
}

/* ===============================================
   HEADINGS INSIDE CONTENT
=============================================== */
.privacy-policy-details h5,
.privacy-policy-details h6 {
  border-left: 4px solid #4a90e2;
  padding-left: 10px;
  margin-top: 30px;
  font-weight: 700;
  color: #222;
}

.privacy-policy-details h5 {
  font-size: 22px;
}
.privacy-policy-details h6 {
  font-size: 18px;
}

/* ===============================================
   PARAGRAPHS
=============================================== */
.privacy-policy-details p {
  margin-bottom: 16px;
  padding-bottom: 12px;
  border-bottom: 1px solid #eceffc;
  color: #333;
  font-size: 17px;
  line-height: 1.75;
}

/* ===============================================
   LIST STYLE (LEFT BORDER)
=============================================== */
.privacy-policy-details ul {
  padding-left: 20px;
  border-left: 3px solid #4a90e2;
  margin-bottom: 20px;
}

.privacy-policy-details li {
  font-size: 16px;
  margin-bottom: 8px;
  color: #444;
}

/* ===============================================
   RESPONSIVE FIXES
=============================================== */
@media (max-width: 768px) {
  .padding-global {
    padding: 18px;
    border-width: 1.5px;
  }

  .heading-style-h4 {
    font-size: 26px;
    padding: 10px 20px;
  }

  .privacy-policy-details {
    padding: 16px;
  }

  .privacy-policy-details p {
    font-size: 15px;
  }
}
.navbar {
 
   background: #8E7CC3;
}
  </style>
</head>
  <body background-color:#6B5B95>
   <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
       <a href="index.php#">
         <img src="main4.png"  alt="StayChat" style="width: 150px;filter: brightness(5.3);"> 
          </a> 
      </div>
      <button class="hamburger" id="menuBtn" >☰</button>
      <div class="nav-links" id="navMenu">
        <a href="index.php#home">Home</a>
        <a href="Pricing.php#Pricing">Pricing</a>
        <a href="index.php#about">About</a>
        <a href="Contact.php#contact">Contact</a>
        <a href="page1.php#" class="btn">Book A Demo</a>
      </div>
    </div>
  </nav>
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-section-large padding-top-medium">
        <div class="privacy-policy-component">
          <div class="privacy-policy-top-content">
            <div class="privacy-policy-left-content">
              <h1 class="heading-style-h4">StayChat AI Privacy Policy</h1>
              <p class="text-size-regular">Last updated: 20/11/2025</p>
            </div>
            <a href="#" class="privacy-policy-right-content w-inline-block">
              <!-- <div>Download PDF</div></a></div> -->
              <div class="padding-bottom padding-medium"></div>
              <div class="privacy-policy-details w-richtext">
                <h5>Introduction</h5>
                <p>StayChat AI Private Limited, (StayChat AI,” “we”, “us” or “our”) developed our services to help you gain operations efficiency. We understand that privacy is important to both our online visitors and registered users. We respect your privacy and will take reasonable steps to protect your information as described in this Privacy Policy.</p>
                <p>In the event of any inconsistency between our Terms of Service and this Privacy Policy, our Terms of Service prevail.</p>
                <h5>1. What does this Privacy Policy apply to?</h5>
                <p>StayChat AI is located at D:36/177-1,Agastya kunda, Dadhasawmedh road, Varanasi-221001. This Privacy Policy applies to the StayChat.com website, including all subpages and successor pages (collectively referred to as the “Site”), and also applies to all software and services that we offer, including services that we offer through our Site when you register for a StayChat AI account (collectively referred to as the “Services”).</p>
                <p>By using our Site or Services, you are accepting the practices described in this Policy.</p>
                <h5>2. Information collection and use</h5>
                <p>Broadly speaking, we collect information in three ways: <br>(1) when you provide it directly to us,<br> (2) when we obtain information about you from third parties or our systems, <br> (3) passively through technology such as “cookies.” The types of information that we collect and our use of that information are described below.</p>
                <h6 class="heading-6">Personal Information</h6>
                <p>The term “Personal Information”, as used in this Privacy Policy, refers to any information that can be used to identify or relates to an identifiable person. Personal information does not include information that has been aggregated or made anonymous such that it can no longer be reasonably associated with a specific person. Personal Information we collect may include:</p>
                <ul role="list"><li class="list-item-8">Name</li>
                <li class="list-item-13">Email</li>
                <li class="list-item-12">Phone Number</li>
                <li class="list-item-11">Credit and debit card number</li>
                <li class="list-item-10">Account username and security codes</li>
                <li class="list-item-9">Any reservation information</li></ul>
                <h6 class="heading-2">Cookies, Web Server Logs and Other Technologies</h6>
                <p>Similar to many commercial websites, we utilize “cookies” and other technologies to collect information in connection with our Site. “Cookies” are a feature of web browser software that allows web servers to recognize the computer used to access a website. Cookies store information accessed through your browser to streamline activities and make the online experience easier and more personalized. Information gathered through cookies and web-server log files may include information such as the date and time of visits, the pages viewed, IP addresses, links to/from any page, and time spent at a site. We use cookie data to measure web traffic and usage activity on our Site for purposes of improving and enhancing the functionality of our Site, to look for possible fraudulent activity, and to better understand the sources of traffic and transactions on our Site. Cookies also allow our servers to remember your account information for future visits and to provide personalized and streamlined information across related pages on our Site. In order to understand and improve the effectiveness of our advertising, we may also use web beacons, cookies, and other technology to identify the fact that you have visited our Site or seen one of our advertisements. If you do not want information collected through the use of cookies, most browsers allow you to automatically decline cookies, or be given the choice of declining or accepting a particular cookie (or cookies) from a particular site. You may also consider visiting aboutcookies.org, which provides helpful information about cookies. You can choose to disable cookies for our Site but this may limit your ability to use our Site and Services.</p><p>Certain information is collected by most browsers, such as your Media Access Control (MAC) address, computer type (Windows or Macintosh), screen resolution, operating system name and version, language, and browser type and version. We use this information to ensure that the Site functions properly.</p><p>Your IP address is automatically assigned to your computer by your Internet Service Provider. An IP address may be identified and logged automatically in our server log files whenever a user accesses the Site, along with the time of the visit and the page(s) that were visited. Collecting IP addresses is standard practice and is done automatically by many websites, applications and other services. We use IP addresses for purposes such as calculating usage levels, diagnosing server problems and administering the Services. We may also derive your approximate location from your IP address.</p><p>We use third-party analytics services, such as Google Analytics, a web analytics service provided by Google, Inc. (“Google”). Google Analytics uses cookies to help us analyze how users use the Site and enhance your experience when you use the Service. For more information on how Google uses this data, go to www.google.com/policies/privacy/partners/. You may also download the Google Analytics opt-out browser add on, available here.</p><h6 class="heading-3">Site Visitors </h6>
                <p>To simply browse our Site, you are not required to provide any Personal Information. However, we may gather information from cookies and similar technologies, as described directly above, for the purposes of monitoring and improving our Site and understanding and improving the effectiveness of our advertising.</p>
                <h6 class="heading-7">Site Users, General</h6>
                <p>To use our Site and Service we collect Personal Information such as the following:</p>
                <ul role="list">
                  <li class="list-item-6">Your name, company name, billing information (including credit card information), location, email address, phone number, signature, reservation details, notes, names of other guests you provide during the transaction process, to complete your usage of the site.</li>
                  <li class="list-item-7">Your IP addresses, devices, and locations used to access StayChat AI, which will be linked to your account for fraud detection/prevention purposes</li>
                </ul>
                <h6 class="heading-3">Site Users, Customers</h6>
                <p>To use our Site and Services, you must register for a StayChat AI account. When you register for an account, we collect Personal Information such as the following:</p>
                <ul role="list">
                  <li class="list-item-4">Your name, company name, location, email address, phone number, and account password, role and department, signatures</li>
                  <li class="list-item-5">Your IP addresses, devices, and locations used to access StayChat AI, which will be linked to your account for fraud detection/prevention purposes</li></ul>
                  <h6 class="heading-4">Children</h6>
                  <p>Our Site and Services are not intended for children.</p>
                  <h6 class="heading-5">Use</h6>
                  <p>We may use Personal Information in a manner that is consistent with this Privacy Policy for our legitimate business interests, including to respond to your inquiries and fulfill your requests, complete your transactions, provide you with customer service, send administrative information to you, and to personalize your experience on the Site and Services. We may also use Personal Information and other information collected through the Site or Services to help us improve the content and functionality of the Site and Services, to better understand our users and to improve the Site and Services. We may use this information to contact you in the future to tell you about services we believe will be of interest to you. Information regarding how to opt-out of marketing communications is provided in Section 4 (“Choice and opt-out”) below.</p><p>We may use and disclose information that is not Personal Information for any purpose, except where we are required to do otherwise under applicable law. In some instances, we may combine non-Personal Information with Personal Information. If we do, we will treat the combined information as Personal Information as long as it is combined.</p>
                  <h5>3. Sharing and disclosure of information</h5>
                  <p>We may disclose your Personal Information for the purposes described in this Privacy Policy, including to third party service providers who provide services such as website hosting, data analysis, payment processing, order fulfillment, information technology and related infrastructure provision, customer service, email delivery, auditing and other services.</p>
                  <p>In addition, in the event of a merger, acquisition, reorganization, bankruptcy, or other similar events, any information in our possession may be transferred to our successor or assign.</p>
                  <h5>4. Choice and opt-out</h5>
                  <p>We may occasionally email you with information about offers or new services. You can opt out of these marketing email communications by replying with unsubscribe in the subject line, or via an unsubscribe link included in such communications. However, you will continue to receive certain email communications related to your account including information regarding transactions and your relationship with StayChat AI.</p>
                  <h5>5. Protection of information</h5>
                  <p>Although no data transmission can be guaranteed to be 100% secure, we take reasonable steps to protect Personal Information. StayChat AI maintains reasonable administrative, technical, and physical procedures to protect information stored in our servers, which are located primarily in the India.</p>
                  <h5>6. Changes and notifications</h5>
                  <p>This Privacy Policy was last updated on the date indicated above. We reserve the right, in our sole and absolute discretion, to make changes to this Privacy Policy from time to time. Please review this Privacy Policy periodically to check for updates. Any changes will become effective when we post the revised Privacy Policy on the Site. Your use of the Site or Services following these changes means that you accept the revised Privacy Policy.</p>
                  <h5>7. Jurisdictional disclosures</h5>
                  <p>The Site and Services are controlled and operated by us from the India and are not intended to subject us to the laws or jurisdiction of any state, country or territory other than that of the India. Your Personal Information may be stored and processed in any country where we have facilities or in which we engage service providers, and by using the Site and Services you consent to the transfer of information to countries outside of your country of residence, including the India, which may have data protection rules that are different from those of your country. In certain circumstances, courts, law enforcement agencies, regulatory agencies or security authorities in those other countries may be entitled to access your Personal Information.</p>
                  <h5>8. Access to information; Contact us</h5>
                  <p>Although no data transmission can be guaranteed to be 100% secure, we take reasonable steps to protect Personal Information. StayChat AI maintains reasonable administrative, technical, and physical procedures to protect information stored in our servers, which are located primarily in the India.</p>
                </div>
              </div>
            </div></div></div></div>


                   <?php include "Footer.php"; ?>
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
