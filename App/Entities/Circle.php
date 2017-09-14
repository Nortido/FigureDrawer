<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Entities;


use App\Core\AbstractClasses\Figure;

class Circle extends Figure
{
    /**
     * @var int
     */
    private $radius;

    public function __construct($radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = intval($radius);

        return $this;
    }

    public function draw()
    {

    }
}
