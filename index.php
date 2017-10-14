<?php

    function testAge($age) {
        if ($age < 16) {
            return "Je bent ${age} jaar oud! Je bent nog te jong" . PHP_EOL;
        } else if ($age >= 16 && $age < 18) {
            return "Je bent ${age} jaar oud! Je hebt ouderlijk toezicht nodig" . PHP_EOL;
        } else if ($age >= 18) {
            return "Je bent ${age} jaar oud! Geniet van de film" . PHP_EOL;
        } 
    };

//echo testAge(15);


for ($i = 15; $i <= 21; ++$i) {
    echo testAge($i),('<br>'), PHP_EOL;
}
