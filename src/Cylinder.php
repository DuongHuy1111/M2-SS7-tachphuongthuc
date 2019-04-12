<?php


class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getBaseArea($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getPerimeter($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}