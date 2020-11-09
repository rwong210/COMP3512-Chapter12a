<?php
include 'lab12a-ex07.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Lab 12a</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lab12a-ex07.css">
</head>

<body>
    <main class="container">
        <article class="box">
            <div class="weather">
                <h2>Calgary</h2>
                <h4>Temp</h4>
                <h4>Wind</h4>

             <?php

                generateWeatherRow("October 8", "sun", 73.4, 1.2);
                generateWeatherRow("October 9", "snowflake", -9.4, 26.6);
                generateWeatherRow("October 10", "snowflake", 17.6, 4.4);
                generateWeatherRow("October 11", "cloud", 37.4, 15.3);
                generateWeatherRow("October 12", "sun", 55.4, 1.9);
                
                ?>
            </div>
        </article>
    </main>
</body>

</html>