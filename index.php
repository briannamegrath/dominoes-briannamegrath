<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dominoes with PHP</title>
  <link rel="stylesheet" href="dominoes-briannamegrath/dominoes.css">
</head>
<body>
  <h1>Brianna's Dominoes</h1>
  <div class="dominoes">
    <?php
    $dots = ['one', 'two', 'three', 'four', 'five', 'six'];
   
      for ($i = 0; $i < 100; $i++){
        echo '<div class="domino">';
          $dotsTop = rand(1, 6);
          $dotsBottom = rand(1,6);

         echo "<div class=\"dots {$dots[$dotsTop -1]}\">";
        

          for ($j = 0; $j < $dotsTop; $j++){
            echo "<div class=\"dot\"></div>";
          }
         echo '</div>';

         echo "<div class=\"dots {$dots[$dotsBottom -1]}\">";
        

          for ($j = 0; $j < $dotsBottom; $j++){
            echo "<div class=\"dot\"></div>";
          }
         echo '</div>';
        echo '</div>';
      }
    ?>
    <!-- REMOVE THE DEMO CODE -->
   <!-- <div class="domino">
      <div class="dots one">
        <div class="dot"></div>
      </div>
      <div class="dots two">
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <div class="domino">
      <div class="dots three">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="dots four">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <div class="domino">
      <div class="dots five">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="dots six">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div> -->
    <!-- REMOVE THE DEMO CODE -->
  </div>
</body>
</html>