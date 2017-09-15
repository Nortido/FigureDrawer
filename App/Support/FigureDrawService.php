<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Support;


use App\Core\Interfaces\FigureInterface;
use App\Core\Interfaces\Service;

class FigureDrawService implements Service
{
    /**
     * @param FigureInterface $figure
     * @param string $type
     *
     * @return array
     */
    static function run($figure, $type)
    {
        if (isset($type)) {
            if ($type == "text") {
                //TODO: Use a drawing library for text
            }
            elseif ($type == "console") {
                //TODO: Use a drawing library for text
            }

            elseif ($type == "png") {
                //TODO: Use a drawing library for text
            } else {
                throw new \Exception('This type of drawing does not support');
            }
        }
    }
}
