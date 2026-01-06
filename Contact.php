<?php
include"navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f6f7fb;
      /* padding: 40px 20px; */
    }

    .contact-wrapper {
      max-width: 1100px;
      margin: auto;
      background: #fff;
      border-radius: 20px;
      padding: 40px;
    }

    .heading {
      text-align: center;
      margin-bottom: 40px;
    }

    .heading h1 {
      font-size: 32px;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .heading p {
      /* color: #666; */
         color: #ffffff

    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
    }

    /* Left Form */
    .contact-form {
      background: #f0f6ff;
      padding: 30px;
      border-radius: 16px;
    }

    .contact-form label {
      font-weight: 600;
      display: block;
      margin: 15px 0 6px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ddd;
      outline: none;
    }

    .contact-form textarea {
      resize: none;
      height: 120px;
    }

    .contact-form button {
      margin-top: 20px;
      background: #0d6efd;
      color: #fff;
      border: none;
      padding: 14px 24px;
      border-radius: 25px;
      cursor: pointer;
      font-size: 15px;
    }

    /* Right Info */
    .contact-info {
      background: #f2f1ff;
      padding: 30px;
      border-radius: 16px;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .info-box {
      display: flex;
      gap: 15px;
      align-items: flex-start;
    }

    .icon {
      width: 40px;
      height: 40px;
      background: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .info-box h4 {
      margin-bottom: 6px;
    }

    .info-box span {
      display: inline-block;
      margin-top: 6px;
      background: #cfe2ff;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 14px;
    }

    @media (max-width: 900px) {
      .contact-grid {
        grid-template-columns: 1fr;
      }
    }
.heading:hover{
   transform: scale(1.08);
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}
.contact-wrapper:hover{
   transform: scale(1.08);
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
}

  </style>
</head>
<body>

  <div class="heading">
    <h1>We’d love to hear from you!</h1>
    <p>Have questions? Fill out the form and one of our team members will reach out.</p>
  </div>

  <div class="contact-wrapper">
    <div class="contact-grid">

      <!-- Form -->
      <form class="contact-form">
        <label>Full Name</label>
        <input type="text" placeholder="Ex: John Alex" />

        <label>Email Address</label>
        <input type="email" placeholder="Ex: john@example.com" />

        <label>Phone Number</label>
        <input type="text" placeholder="Ex: +91 98765 43210" />

        <label>Subject</label>
        <input type="text" placeholder="Ex: Services" />

        <label>Leave Us a Message</label>
        <textarea placeholder="Write your message here..."></textarea>

        <button type="submit">Send Message</button>
      </form>

      <!-- Info -->
      <div class="contact-info">

        <div class="info-box">
          <div class="icon">✉️</div>
          <div>
            <h4>Send Us an Email</h4>
            <p>Simplifying Contact with Our Email Correspondence Channel</p>
            <span>staychatpvt.ltd@gmail.com</span>
          </div>
        </div>

        <div class="info-box">
          <div class="icon">📞</div>
          <div>
            <h4>Give Us a Call</h4>
            <p>Contact Us Today via Phone for Prompt Support</p>
            <span>+919616422222 </span>
          </div>
        </div>

        <div class="info-box">
          <div class="icon">🏢</div>
          <div>
            <h4>Visit Us</h4>
            <p>Second Floor </p>
          </div>
        </div>

      </div>

    </div>
  </div>

</body>
</html>
<?php
include"Footer.php";
?>