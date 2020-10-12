<?php
include 'Circle.php';
include 'Comparable.php';

class CircleComparator implements Comparable
{
    public function compareTo($circleOne,$circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if($radiusOne < $radiusTwo){
            return 'The first circle is smaller than second circle';
        } elseif ($radiusTwo < $radiusOne){
            return 'The second circle is smaller than the first circle';
        }
        else {
            return '2 given circles have the same radius';
        }
    }
}