<?php

include_once 'ComparableCircle.php';

$circle1 = new ComparableCircle('First circle',13);
$circle2 = new ComparableCircle('Second Circle',15);

echo $circle1->compareTo($circle2);
