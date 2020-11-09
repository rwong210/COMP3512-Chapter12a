<?php

    define("usd", 0);
    define("euro", 0);
    define("pnd", 0);

    function usdToEuro($usd){
        $euro = number_format($usd * 0.87, 0);
        return $euro;
    }

    function usdToPnd($usd){
        $pnd = number_format($usd * 0.76, 0);
        return $pnd;
    }

    function generateBox($name, $numUsers) { ?>
    <div class="box">
    <header><?=$name?></header>
    <div><p><span><?=$numUsers . ' users'?></span></p></div>
    <div><p><span><?=($numUsers * 5) . ' GB Storage'?></span></p></div>
    <div><p><span><?= ($numUsers * 2) . ' email accounts'?></span></p></div>
    <footer><?php if ($numUsers < 10 ) {
                    echo '$' . ($numUsers * 10);
                    echo ' €' . usdToEuro(10);
                    echo ' £' . usdToPnd(10);
                    }
                  else if($numUsers >= 10  && $numUsers < 50){
                    echo '$' . ($numUsers * 9);
                    echo ' €' . (usdToEuro(10) * 0.9);
                    echo ' £' . (usdToPnd(10) * 0.9);
                    }
                  else if($numUsers >= 50){
                    echo '$' . ($numUsers * 8);
                    echo ' €' . (usdToEuro(10) * 0.8);
                    echo ' £' . (usdToPnd(10) * 0.8);
                    }
                  ?>
    </div>
        <?php
    }
        ?>
   