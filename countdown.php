<?php
$targetDate = strtotime("2024-04-19 10:05:59");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div id="countdown"></div>

    <script>
        function updateCountdown() {
            let currentDate = new Date().getTime();
            let difference = <?php echo $targetDate * 1000 ?> - currentDate;

            let years = Math.floor(difference / (1000 * 60 * 60 * 24 * 12 * 30))
            let months = Math.floor((difference % (1000 * 60 * 60 * 24 * 30 * 12)) / (1000 * 3600 * 24 * 30))
            let days = Math.floor((difference % (1000 * 60 * 60 * 24 * 30)) / (1000 * 3600 * 24));
            let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((difference % (1000 * 60)) / 1000);
            document.getElementById("countdown").innerHTML = "Countdown: " + years + " years " + months + " months " + days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds remaining.";
            console.log(<?php echo $targetDate ?>);
        }

        setInterval(updateCountdown, 1000);
    </script>

</body>

</html>