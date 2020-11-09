<?php
// returns the Celsius equivalent of the passed Fahrenheit value  
function convertF2C($fahr)
{
    return number_format((($fahr - 32) * 5) / 9, 1);
}

// returns the kpm equivalent of the passed mph value  
function convertK2M($mph)
{
    return number_format($mph * 1.609344, 1);
}

function generateWeatherRow($date, $symbol, $fahr, $mph)
{ ?>
    <div><?=$date?></div>
    <div><i class='fas fa-<?=$symbol?>'></i></div>
    <div><span><?=convertF2C($fahr)?> °C | <?=$fahr?>°F</span></div>
    <div><?= convertK2M($mph)?> kmh | <?=$mph?> mph</div>
        <?php
    }
        ?>