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
        font-size: 23px;
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
<path fill="#0d47a1" d="M5.446 18.01H.548c-.277 0-.502.167-.503.502L0 30.519c-.001.3.196.45.465.45.735 0 1.335 0 2.07 0C2.79 30.969 3 30.844 3 30.594 3 29.483 3 28.111 3 27l2.126.009c1.399-.092 2.335-.742 2.725-2.052.117-.393.14-.733.14-1.137l.11-2.862C7.999 18.946 6.949 18.181 5.446 18.01zM4.995 23.465C4.995 23.759 4.754 24 4.461 24H3v-3h1.461c.293 0 .534.24.534.535V23.465zM13.938 18h-3.423c-.26 0-.483.08-.483.351 0 .706 0 1.495 0 2.201C10.06 20.846 10.263 21 10.552 21h2.855c.594 0 .532.972 0 1H11.84C10.101 22 9 23.562 9 25.137c0 .42.005 1.406 0 1.863-.008.651-.014 1.311.112 1.899C9.336 29.939 10.235 31 11.597 31h4.228c.541 0 1.173-.474 1.173-1.101v-8.274C17.026 19.443 15.942 18.117 13.938 18zM14 27.55c0 .248-.202.45-.448.45h-1.105C12.201 28 12 27.798 12 27.55v-2.101C12 25.202 12.201 25 12.447 25h1.105C13.798 25 14 25.202 14 25.449V27.55zM18 18.594v5.608c.124 1.6 1.608 2.798 3.171 2.798h1.414c.597 0 .561.969 0 .969H19.49c-.339 0-.462.177-.462.476v2.152c0 .226.183.396.422.396h2.959c2.416 0 3.592-1.159 3.591-3.757v-8.84c0-.276-.175-.383-.342-.383h-2.302c-.224 0-.355.243-.355.422v5.218c0 .199-.111.316-.29.316H21.41c-.264 0-.409-.143-.409-.396v-5.058C21 18.218 20.88 18 20.552 18c-.778 0-1.442 0-2.22 0C18.067 18 18 18.263 18 18.594L18 18.594z"></path><path fill="#00adee" d="M27.038 20.569v-2.138c0-.237.194-.431.43-.431H28c1.368-.285 1.851-.62 2.688-1.522.514-.557.966-.704 1.298-.113L32 18h1.569C33.807 18 34 18.194 34 18.431v2.138C34 20.805 33.806 21 33.569 21H32v9.569C32 30.807 31.806 31 31.57 31h-2.14C29.193 31 29 30.807 29 30.569V21h-1.531C27.234 21 27.038 20.806 27.038 20.569L27.038 20.569zM42.991 30.465c0 .294-.244.535-.539.535h-1.91c-.297 0-.54-.241-.54-.535v-6.623-1.871c0-1.284-2.002-1.284-2.002 0v8.494C38 30.759 37.758 31 37.461 31H35.54C35.243 31 35 30.759 35 30.465V18.537C35 18.241 35.243 18 35.54 18h1.976c.297 0 .539.241.539.537v.292c1.32-1.266 3.302-.973 4.416.228 2.097-2.405 5.69-.262 5.523 2.375 0 2.916-.026 6.093-.026 9.033 0 .294-.244.535-.538.535h-1.891C45.242 31 45 30.759 45 30.465c0-2.786 0-5.701 0-8.44 0-1.307-2-1.37-2 0v8.44H42.991z"></path>
</svg>

    <div class="integration-title">Staychat AI integration with Paytm</div>
    <div class="integration-desc">
        <!-- Staychat AI Goo integration connects your WhatsApp Business Account to the unified inbox. One-click setup enables two-way messaging, AI-powered automation, and seamless communication throughout the entire guest journey. -->
    </div>

    <div class="list-title">Instant Activation</div>
     <div class="feature-list">
        •  Begin selling instantly and seamlessly. Your customers can make purchases without having to disclose any personal or financial details to third-party tools.   
    </div>

    

    <div class="list-title">Accept Payments worldwide</div>
<div class="feature-list">
• Gain access to multiple currencies, ensuring convenience whether your guests prefer to pay in US Dollars or Danish Krones. This integration eliminates the common challenges hotels encounter with foreign currencies, saving both time and substantial conversion fees.  
    </div>
   
    <div class="list-title">Instant Payments </div>
<div class="feature-list">
• Upon completing a purchase, your guests can promptly settle their payment for services. Simply by selecting the relevant payment option within the document and following the subsequent steps, they can finalize the transaction in less than a minute, regardless of the amount. This streamlined process not only saves time but also conserves resources for both you and your guests.
</div>

  <div class="list-title"> Leading Security practices</div>
<div class="feature-list">
   • Take advantage of top-tier security measures, including the highest standards of secure cloud storage and data encryption in the industry. Additionally, this integration empowers your guests to make payments without having to divulge any personal or financial information to third-party tools, ensuring their privacy and security. 
</div>
    
  <div class="list-title">Invoice Automation </div>
<div class="feature-list">
   • Streamline the invoice management process through automation. Upon checkout, your guests will automatically receive their invoices, eliminating the need for manual intervention and saving valuable time and resources. This automation allows your staff to redirect their focus towards more impactful tasks.
</div>

  <div class="list-title">Receive money in your account automatically </div>
<div class="feature-list">
   • Collecting payments and reconciling them can be a tedious and resource-intensive task. However, with this integration, we've simplified the process. By combining paperless technology with one of the world's most user-friendly payment solutions, we've made payment collection and reconciliation effortless.
</div>

    <!-- <div class="feature-list">
        <strong>Setup Requirements:</strong> Google support | One-click integration<br><br>
        <strong>Perfect For:</strong> All hotel types — boutique hotels, resorts, urban properties, and hotel chains.
    </div> -->
    <!-- <button  class="btn">Integrate Now</button> -->
<button class="btn-1" onclick="window.location.href='page1.php'">Integrate Now</button>

</div>

</body>
</html>
<?php
include"Footer.php";
?>