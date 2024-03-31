<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Logging In - Diablo 4</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            margin: 0;
            padding: 0;
            background-color: #0f0f0f;
            color: #fff;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            color: #ff4500;
        }
        #countdown {
            font-size: 2em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Thank You for Logging In</h2>
    <p>Welcome to Diablo 4!</p>
    <div id="countdown">10.000</div> <!-- Initial display with milliseconds -->
</div>

<script>
    // Countdown from 10 to 0
    var countdown = 10000; // Start countdown from 10 seconds in milliseconds
    var countdownElement = document.getElementById('countdown');

    function updateCountdown() {
        countdown -= 10; // Subtract 10 milliseconds
        if (countdown < 0) {
            countdown = 0;
        }
        var seconds = Math.floor(countdown / 1000);
        var milliseconds = countdown % 1000;
        countdownElement.textContent = seconds + '.' + milliseconds.toString().padStart(3, '0');
        if (countdown === 0) {
            clearInterval(countdownInterval);
            window.location.href = 'index.php'; // Redirect to index.php after countdown
        }
    }

    var countdownInterval = setInterval(updateCountdown, 1); // Update countdown every 10 milliseconds
</script>

</body>
</html>
