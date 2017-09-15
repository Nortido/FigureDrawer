<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Entities;


use App\Core\AbstractClasses\Figure;

class Rectangle extends Figure
{
    /**
     * @var int
     */
    private $width = 1;

    /**
     * @var int
     */
    private $height = 1;

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return Rectangle
     */
    public function setWidth($width)
    {
        $this->width = intval($width);

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Rectangle
     */
    public function setHeight($height)
    {
        $this->height = intval($height);

        return $this;
    }
}
