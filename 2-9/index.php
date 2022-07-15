<?php

$i = 1;

while ($i < 101) {

    if ($i % 3 == 0 && $i % 5 == 0) {   
        echo 'FizzBuzz!!';

    } elseif ($i % 3 == 0) {
        echo 'Fizz!';

    } elseif ($i % 5 == 0) {
        echo 'Bull!';

    } else {
        echo $i;

    }

    echo '<br>';
    $i++;

}

?>