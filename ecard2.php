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
<body style="background-color: #6B5B95">

<div class="integration-box">

    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo"> -->
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
<path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
</svg>

    <div class="integration-title">Staychat AI integration with Google</div>
    <div class="integration-desc">
        Staychat AI Google integration connects your Google Account to the unified inbox. One-click setup enables two-way messaging, AI-powered automation, and seamless communication throughout the entire guest journey.
    </div>

    <div class="list-title">What You Get:</div>

    <div class="feature-list">
        • All Googel conversations centralized in Staychat AI unified inbox<br>
        • AI-powered automated responses for instant guest engagement<br>
        • Rich media support (images, PDFs, location pins, menus)<br>
        • Journey-based automation for pre-stay, in-stay, and post-stay messaging<br>
        • Real-time two-way synchronization
    </div>

    <div class="feature-list">
        <strong>Setup Requirements:</strong> Google support | One-click integration<br><br>
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