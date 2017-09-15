<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Core\Interfaces;


interface Service
{
    /**
     * @param FigureInterface $figure
     * @param array $options
     *
     * @return array
     */
    static function run($figure, $options);
}