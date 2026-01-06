<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .pricing-compare{
  max-width: 1200px;
  margin: 80px auto;
  padding: 0 20px;
  font-family: Georgia, serif;
}

.pricing-compare h2{
  text-align: center;
  font-size: 42px;
  margin-bottom: 60px;
}

.compare-table{
  width: 100%;
}

.row{
  display: grid;
  grid-template-columns: 2.5fr 1fr 1fr 1fr;
  padding: 18px 0;
  align-items: center;
}

.header{
  font-weight: 600;
}

.header a{
  display: inline-block;
  margin-top: 6px;
  font-size: 14px;
  color: #0057ff;
  text-decoration: none;
}

.header a:hover{
  text-decoration: underline;
}

.feature{
  font-weight: 500;
}

.section{
  margin-top: 40px;
  font-weight: 700;
  letter-spacing: 1px;
}

.divider{
  height: 1px;
  background: #0057ff;
  margin: 30px 0;
}

.col{
  padding-right: 20px;
  font-size: 16px;
}

  </style>
</head>
<body>
  <section class="pricing-compare">
  <h2>Compare Plans & Features</h2>

  <div class="compare-table">

    <!-- Header -->
    <div class="row header">
      <div class="col feature">Compare Plans</div>
      <div class="col">Power<br><a href="#">Get Started</a></div>
      <div class="col">Premium<br><a href="#">Get Started</a></div>
      <div class="col">Enterprise<br><a href="#">Get Started</a></div>
    </div>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- Section title -->
    <div class="row section">
      <div class="col feature">GUEST JOURNEYS</div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
    </div>

    <!-- Rows -->
    <div class="row">
      <div class="col feature">Channels (Whatsapp, Email, Viber, Line etc)</div>
      <div class="col">1 channel</div>
      <div class="col">2 channels</div>
      <div class="col">4 channels</div>
    </div>

    <div class="row">
      <div class="col feature">Supported Channels</div>
      <div class="col">WhatsApp, Email, SMS, Line</div>
      <div class="col">WhatsApp, Email, SMS, Line, OTA*</div>
      <div class="col">WhatsApp, Email, SMS, Line, OTA*</div>
    </div>

    <div class="row">
      <div class="col feature">Guest Stages</div>
      <div class="col">Pre, In & Post Stay</div>
      <div class="col">Pre, In & Post Stay</div>
      <div class="col">Pre, In & Post Stay</div>
    </div>

    <div class="row">
      <div class="col feature">Journey Triggers</div>
      <div class="col">5</div>
      <div class="col">10</div>
      <div class="col">Unlimited</div>
    </div>

       <div class="row">
      <div class="col feature">Guest Segmentation</div>
      <div class="col">Basic</div>
      <div class="col">Advance</div>
      <div class="col">Advance</div>
    </div>

     <div class="divider"></div>

     <div class="row section">
      <div class="col feature">DIGITAL CHECK-IN</div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
    </div>

     <div class="row">
      <div class="col feature">Registration Type</div>
      <div class="col">
Digital Manual Form Fill</div>
      <div class="col">AI ID Extraction & Auto Verification</div>
      <div class="col">AI & Manual with Auto verification</div>
    </div>


     <div class="row">
      <div class="col feature">Modes</div>
      <div class="col">QR Code Registration</div>
      <div class="col">QR Codes, Tablet & Kiosk Registration</div>
      <div class="col">QR Codes  & Tablet Registration</div>
    </div>

    <div class="row">
      <div class="col feature">OTP Verification</div>
      <div class="col">✖</div>
      <div class="col">✔</div>
      <div class="col">✔</div>
    </div>

     <div class="row">
      <div class="col feature">PMS Sync</div>
      <div class="col">✖</div>
      <div class="col">✔</div>
      <div class="col">✔</div>
    </div>
  
     <div class="row">
      <div class="col feature">Flow Builder</div>
      <div class="col">✖</div>
      <div class="col">✔</div>
      <div class="col">✔</div>
    </div>

     <div class="row">
      <div class="col feature">Payment Collection</div>
      <div class="col">✔</div>
      <div class="col">✔</div>
      <div class="col">✔</div>
    </div>


  </div>
</section>

</body>
</html>