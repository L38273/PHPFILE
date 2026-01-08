<?php 
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>StayChat - Hotel Website</title>

<style>
    body {
        font-family: Arial;
        background: #6B5B95;
        margin:0;
        /* padding-top: 9990px; */
        /* padding-bottom: 40px; */
        
    }
h1 {
    font-size: 28px;
    font-weight: bold;
    color: #1a3bad;    
    margin-bottom: 20px;
    /* text-align: left;   */
    text-align: center; 
}

    .page2-wrapper-1 {
        display: flex;
        justify-content: center;
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }


    .form-box {
        width: 600px;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 12px rgba(0,0,0,0.12);
    }

    .input-row {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccd6e6;
        background: #f4f9ff;
        font-size: 16px;
    }

    textarea {
        width: 100%;
        height: 80px;
        margin-top: 10px;
        border-radius: 8px;
        border: 1px solid #ccd6e6;
        background: #f4f9ff;
        padding: 10px;
    }

    .buttons {
        margin-top: 25px;
        display: flex;
        justify-content: space-between;
    }

    .btn {
        padding: 12px 35px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }

    .back { background: #eef3ff; border: none; color: #1a3bad; }
    .confirm { background: #6ca3ff; border: none; color: white; }

</style>
</head>

<body style="background-color: #6B5B95">


<div class="page2-wrapper-1">
    <div class="form-box">
           <h1>Get a Personalised Demo</h1>
        <form action="connection.php" method="GET">

            <div class="input-row">
                
                <input type="text" name="first_name" placeholder="First name *" required>
                <input type="text" name="last_name" placeholder="Last name *" required>
            </div>

            <input type="email" name="email" placeholder="Your email address *" required style="margin-bottom:20px;">

            <input type="text" name="property_name" placeholder="Property / Group Name *" required style="margin-bottom:20px;">

            <h4>Are you using a PMS? *</h4> 
            <label><input type="radio" name="pms" value="Yes" required> Yes</label><br>
            <label><input type="radio" name="pms" value="No" required> No</label>

            <textarea name="message" placeholder="Optional: Any details for the meeting..."></textarea>

            <h4>Add guests</h4>
            <p>Invite up to 10 guests to attend the meeting.</p>

            <input type="email" name="guest_email" placeholder="Add an email" required style="margin-bottom:20px;">

            <div class="buttons">
                <button type="button" class="btn back" onclick="history.back()">← Back</button>
                <button type="submit" class="btn confirm">Confirm</button>
            </div>
            
        </form>
    </div>
</div>

<?php 
include "Footer.php";
?>

</body>
</html>
