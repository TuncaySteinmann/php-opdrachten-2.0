<?php

$day = date("H");

switch($day) {
    case $day > 6 && $day < 12 :
        echo "Het is ochtend"; break;
        case $day > 12 && $day <6 :
            echo "Het is middag"; break;
}

?>