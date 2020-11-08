<html>
<head>
<title>Lab 12a</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">  
<link rel="stylesheet" href="css/lab12a-ex03.css">    
</head>
<body>
<h1>  Age calculator</h1>
<?php 
$birthday = mktime(0,0,0,1,15,2004);
$today = time();
$secondsOld = $today - $birthday;
echo "<p>Time elapsed since " . date("M d, Y",$birthday) . ":</p>";
?>

<ul>
   <li><?php echo $secondsOld?> seconds, or </li>
   <li><?php echo number_format($secondsOld/(60*60*24), 0);  ?> days, or </li>
   <li><?php echo number_format($secondsOld/(60*60*24*30.4), 1); ?> months, or </li>
   <li><?php echo number_format($secondsOld/(60*60*24*365.242375), 2); ?> years</li>
</ul>
</body>
</html>
