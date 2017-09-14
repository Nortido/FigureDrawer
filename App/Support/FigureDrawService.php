<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Support;


use App\Core\Interfaces\Service;

class FigureDrawService implements Service
{
    /**
     * @param array $args
     * @return array
     */
    static function run($options)
    {
        if (isset($options['type'])) {
            echo "Drawing" . PHP_EOL;

            //TODO: Use a drawing library for that type of picture
        }
    }
}