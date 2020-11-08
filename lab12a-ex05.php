<html>

<head>
   <title>Lab 12a</title>
   <style>
      img {
         float: left;
         width: 200px;
         display: block;
         margin-right: 10px;
      }

      h2 {
         margin: 0;
         font-size: 1.25em;
      }
   </style>
</head>

<body>
   <?php
   $thumbnail = "134020.jpg";
   $title = "Portrait of Isabella of Portugal";
   $img = "<img src='images/$thumbnail' alt='title' title=$title' />";
   $year = 1800;
   $era = "15th Century";
   if ($year >= 1500)
      if ($year < 1500) {
         $era = "Early times";
      } else if ($year >= 1500 && $year < 1600) {
         $era = "16th Century";
      } else if ($year >= 1600 && $year < 1700) {
         $era = "17th Century";
      } else if ($year >= 1700 && $year < 1800) {
         $era = "18th Century";
      } else {
         $era = "Modern times";
      }

   ?>

   <?= $img ?>
   <h2><?= $era ?></h2>


</body>

</html>