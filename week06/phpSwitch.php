<?php
/**
 * Created by PhpStorm.
 * User: 1418349
 * Date: 08/03/2016
 * Time: 09:37
 */
$numberOfHobbits = "3";

switch ($numberOfHobbits) {
    case 1:
        echo "1 sad hobbit";
        break;
    case 2:
        echo "2 happy hobbits";
        break;
    case 3:
        echo "3 hobbits are a crowd";
        break;
    default:
        echo "all hobbits have gone home <br>";

}

$wantedgood = "18";
switch ($wantedgood){
    case 18:
        echo "You have to be 18 to buy mugs";
        break;
    default:
        echo "You are over aged";
}
?>