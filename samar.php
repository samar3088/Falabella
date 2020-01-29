<?php

for ($i = 1; $i <= 100; $i++) {
    switch ($i % 15) {
        case 3:
        case 6:
        case 9:
            echo 'Linio';
            break;
        case 5:
        case 10:
            echo 'IT';
            break;
        case 0:
            echo 'Linianos';
            break;
        default:
            echo $i;
            break;
    }

    echo PHP_EOL;
}

?>