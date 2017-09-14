<?php
/**
 * @author Evgeny Novoselov <e.novoselov@tree-soft.com>
 */

namespace App\Core\AbstractClasses;


use App\Core\Interfaces\FigureInterface;

class Figure implements FigureInterface
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->x = intval($x);
        return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param int $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->y = intval($y);
        return $this;
    }

    /**
     * @param int $posX
     * @param int $posY
     *
     * @return $this
     */
    public function setPosition($posX, $posY)
    {
        $this->setX(intval($posX));
        $this->setY(intval($posY));

        return $this;
    }

    /**
     * Abstract method to override
     * @return mixed
     */
    public function draw()
    {
    }
}