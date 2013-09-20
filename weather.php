<?php
$xml=simplexml_load_file('http://www.google.com/ig/api?weather=Pacific Grove');
$othercities='Carmel and Monteray';
$information = $xml->xpath("/xml_api_reply/weather/forecast_information");
$current = $xml->xpath("/xml_api_reply/weather/current_conditions");
$forecast_list = $xml->xpath("/xml_api_reply/weather/forecast_conditions");
?>
<html>
    <head>
        <title>Google Weather API</title>
    </head>
    <body><div style=" border: 1px black solid; background: khaki;">
        <h1><?= print $information[0]->city['data']; ?></h1>
        <div class="today"><h2>Today's weather</h2>
        <div class="weather">           
            <img src="<?= 'http://www.google.com' . $current[0]->icon['data']?>" alt="weather"?>
            <span class="condition">
            <?= $current[0]->temp_f['data'] ?>&deg; F,
            <?= $current[0]->condition['data'] ?>
            </span>
        </div>
            </div>
        <h2>Forecast</h2>
        <? foreach ($forecast_list as $forecast) : ?>
        <div class="weather">
            <img src="<?= 'http://www.google.com' . $forecast->icon['data']?>" alt="weather"?>
            <div><?= $forecast->day_of_week['data']; ?></div>
            <span class="condition">
                    <?= $forecast->low['data'] ?>&deg; F - <?= $forecast->high['data'] ?>&deg; F,
                    <?= $forecast->condition['data'] ?>
            </span>
        </div>  
        <? endforeach ?>
        </div>
    </body>
</html>
