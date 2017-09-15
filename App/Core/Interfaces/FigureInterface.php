<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Core\Interfaces;


interface FigureInterface
{
    /**
     * @return int
     */
    public function getX();

    /**
     * @return int
     */
    public function getY();

    /**
     * @param int $posX
     *
     * @return $this
     */
    public function setX($posX);

    /**
     * @param int $posY
     *
     * @return $this
     */
    public function setY($posY);

    /**
     * @param int $posX
     * @param int $posY
     *
     * @return $this
     */
    public function setPosition($posX, $posY);
}
