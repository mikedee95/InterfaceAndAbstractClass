<?php
//
//include_once 'ComparableCircle.php';
//
//$circle1 = new ComparableCircle('Circle1',15);
//$circle2 = new ComparableCircle('Circle2',14);
//
//echo $circle1->compareTo($circle2);
//echo "<br>";
//echo $circle2->compareTo($circle1);

include_once 'CircleComparator.php';

$circleOne = new Circle('circle1', 14);
$circleTwo = new Circle('circle2', 15);

$circleComparator = new CircleComparator();
echo $circleComparator->compareTo($circleOne,$circleTwo);