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
<path fill="#00c300" d="M12.5,42h23c3.59,0,6.5-2.91,6.5-6.5v-23C42,8.91,39.09,6,35.5,6h-23C8.91,6,6,8.91,6,12.5v23C6,39.09,8.91,42,12.5,42z"></path><path fill="#fff" d="M37.113,22.417c0-5.865-5.88-10.637-13.107-10.637s-13.108,4.772-13.108,10.637c0,5.258,4.663,9.662,10.962,10.495c0.427,0.092,1.008,0.282,1.155,0.646c0.132,0.331,0.086,0.85,0.042,1.185c0,0-0.153,0.925-0.187,1.122c-0.057,0.331-0.263,1.296,1.135,0.707c1.399-0.589,7.548-4.445,10.298-7.611h-0.001C36.203,26.879,37.113,24.764,37.113,22.417z M18.875,25.907h-2.604c-0.379,0-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687c0.379,0,0.687,0.308,0.687,0.687v4.521h1.917c0.379,0,0.687,0.308,0.687,0.687C19.562,25.598,19.254,25.907,18.875,25.907z M21.568,25.219c0,0.379-0.308,0.688-0.687,0.688s-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687s0.687,0.308,0.687,0.687V25.219z M27.838,25.219c0,0.297-0.188,0.559-0.47,0.652c-0.071,0.024-0.145,0.036-0.218,0.036c-0.215,0-0.42-0.103-0.549-0.275l-2.669-3.635v3.222c0,0.379-0.308,0.688-0.688,0.688c-0.379,0-0.688-0.308-0.688-0.688V20.01c0-0.296,0.189-0.558,0.47-0.652c0.071-0.024,0.144-0.035,0.218-0.035c0.214,0,0.42,0.103,0.549,0.275l2.67,3.635V20.01c0-0.379,0.309-0.687,0.688-0.687c0.379,0,0.687,0.308,0.687,0.687V25.219z M32.052,21.927c0.379,0,0.688,0.308,0.688,0.688c0,0.379-0.308,0.687-0.688,0.687h-1.917v1.23h1.917c0.379,0,0.688,0.308,0.688,0.687c0,0.379-0.309,0.688-0.688,0.688h-2.604c-0.378,0-0.687-0.308-0.687-0.688v-2.603c0-0.001,0-0.001,0-0.001c0,0,0-0.001,0-0.001v-2.601c0-0.001,0-0.001,0-0.002c0-0.379,0.308-0.687,0.687-0.687h2.604c0.379,0,0.688,0.308,0.688,0.687s-0.308,0.687-0.688,0.687h-1.917v1.23H32.052z"></path>
</svg>
    <div class="integration-title">Staychat AI integration with Line</div>
    <div class="integration-desc">
        Staychat AI Line integration connects your Line Account to the unified inbox. One-click setup enables two-way messaging, AI-powered automation, and seamless communication throughout the entire guest journey.
    </div>

    <div class="list-title">What You Get:</div>

    <div class="feature-list">
        • All Line conversations centralized in Staychat AI unified inbox<br>
        • AI-powered automated responses for instant guest engagement<br>
        • Rich media support (images, PDFs, location pins, menus)<br>
        • Journey-based automation for pre-stay, in-stay, and post-stay messaging<br>
        • Real-time two-way synchronization
    </div>

    <div class="feature-list">
        <strong>Setup Requirements:</strong> Line Account | One-click integration<br><br>
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