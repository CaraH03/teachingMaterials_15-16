<?php
/**
 * Created by PhpStorm.
 * User: michaelcrabb
 * Date: 27/11/2015
 * Time: 11:30
 */

function incr_x($y) {
    $x = $x + $y;
}
$x = 0;
$y = 0;
incr_x(10);
echo $x;
echo $y;
