<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Controllers;


use App\Core\Interfaces\ControllerInterface;
use App\Entities\Circle;
use App\Support\FigureDrawService;

class CircleController implements ControllerInterface
{
    /**
     * @param array $options
     *
     * @return array
     * @throws \Exception
     */
    public function process($options)
    {
        $circle = new Circle();

        if (isset($options['size'])) {
            if (count(explode(",", $options['size'])) == 1 && intval($options['size']) > 0) {
                $circle->setRadius(intval($options['size']));
            } else {
                throw new \Exception('Circle has only radius size');
            }
        }

        if (isset($options['position'])) {
            $position = explode(",", $options['position']);
            $circle->setPosition($position[0], $position[1]);
        }

        return FigureDrawService::run($circle, $options['type']);
    }
}
