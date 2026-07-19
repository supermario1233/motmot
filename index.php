<?php
$partner = "Arianne";   // Change to your partner's name
$months = 6;            // Change to your current monthsary
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Monthsary ❤️</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ff758c,#ff7eb3);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:#fff;
            width:420px;
            padding:35px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            color:#ff4d6d;
            margin-bottom:15px;
        }

        p{
            color:#555;
            font-size:18px;
            line-height:1.7;
        }

        .heart{
            font-size:60px;
            animation:beat 1s infinite;
            margin-bottom:15px;
        }

        @keyframes beat{
            0%{transform:scale(1);}
            50%{transform:scale(1.2);}
            100%{transform:scale(1);}
        }

        .footer{
            margin-top:20px;
            color:#ff4d6d;
            font-weight:bold;
            font-size:20px;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="heart">❤️</div>

    <h1>Happy <?php echo $months; ?>th Monthsary!</h1>

    <p>
        Dear <strong><?php echo htmlspecialchars($partner); ?></strong>,<br><br>

        Thank you for another wonderful month together.
        Every moment with you is a blessing, and I appreciate all the love,
        happiness, and memories we've shared.
        I hope our journey continues to be filled with laughter,
        understanding, and endless love.
    </p>

    <div class="footer">
        I love you always. ❤️
    </div>
</div>

</body>
</html> 