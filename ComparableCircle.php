<?php
include_once 'Comparable.php';
include_once  'Circle.php';

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($_name, $_radius)
    {
        parent::__construct($_name, $_radius);
    }

    public function compareTo($otherCircle)
    {
        $otherCircleRadius = $otherCircle->getRadius;

        if($this->radius < $otherCircleRadius){
            return 'This circle is smaller than other circle';
        } elseif ($this->radius > $otherCircleRadius){
            return 'This circle is bigger than other circle';
        } else {
            return  '2 given circles have the same size';
        }
    }
}