<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Controllers;


use App\Core\Interfaces\ControllerInterface;
use App\Entities\Rectangle;
use App\Support\FigureDrawService;

class RectangleController implements ControllerInterface
{
    /**
     * @param array $options
     *
     * @return array
     * @throws \Exception
     */
    public function process($options)
    {
        $rectangle = new Rectangle();

        $size = explode(",", $options['size']);

        if (isset($size) && count($size) == 2) {
            $rectangle->setWidth($size[0]);
            $rectangle->setHeight($size[1]);
        }

        if (isset($options['position'])) {
            $position = explode(",", $options['position']);
            $rectangle->setPosition($position[0], $position[1]);
        }

        return FigureDrawService::run($rectangle, $options['type']);
    }
}
