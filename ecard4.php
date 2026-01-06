<?php
include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Integration Box</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f4f7;
       

    }

    .integration-box {
        width: 50%;
        max-width: 1100px;
        background: white;
        margin: 40px auto;
        padding: 70px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        text-align: center;
        min-height: 700%;
    }

    .integration-box img {
        width: 110px;
        margin-bottom: 20px;
    }

    .integration-title {
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #111;
       
    }

    .integration-desc {
        font-size: 15px;
        color: #555;
        max-width: 800px;
        margin: auto;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .list-title {
        font-weight: bold;
        margin-top: 25px;
        margin-bottom: 10px;
        font-size: 17px;
        color: #222;
        text-align: left;
    }

    .feature-list {
        text-align: left;
        width: 80%;
        max-width: 800px;
        margin: 0 auto;
        margin-bottom: 20px;
        line-height: 1.7;
        color: #444;
    }

    .btn-1 {
        margin-top: 30px;
        padding: 10px 28px;
        background: #000A1F;
        color: white;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s;
    }

    .btn-1:hover {
        background: #071a40;
    }


   @media (max-width: 600px) {
    .integration-box {
        width: 95%;     
        padding: 20px;  
    }

    .integration-title {
        font-size: 20px;
    }

    .integration-desc,
    .feature-list {
        font-size: 14px;
        width: 100%;
    }

    .integration-box img {
        width: 80px;
    }

</style>

</head>
<body style="background-color: #0d0d0d">

<div class="integration-box">

    <img src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000" alt="WhatsApp Logo">

    <div class="integration-title">Staychat AI integration with Facebook</div>
    <div class="integration-desc">
        Staychat AI Facebook integration connects your WhatsApp Business Account to the unified inbox. One-click setup enables two-way messaging, AI-powered automation, and seamless communication throughout the entire guest journey.
    </div>

    <div class="list-title">What You Get:</div>

    <div class="feature-list">
        • All Facebook conversations centralized in Staychat AI unified inbox<br>
        • AI-powered automated responses for instant guest engagement<br>
        • Rich media support (images, PDFs, location pins, menus)<br>
        • Journey-based automation for pre-stay, in-stay, and post-stay messaging<br>
        • Real-time two-way synchronization
    </div>

    <div class="feature-list">
        <strong>Setup Requirements:</strong> Facebook  Account | One-click integration<br><br>
        <strong>Perfect For:</strong> All hotel types — boutique hotels, resorts, urban properties, and hotel chains.
    </div>

    <!-- <button  class="btn">Integrate Now</button> -->
<button class="btn-1" onclick="window.location.href='page1.php'">Integrate Now</button>

</div>

</body>
</html>
<?php
include"Footer.php";
?>