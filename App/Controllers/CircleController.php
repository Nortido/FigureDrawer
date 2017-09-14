<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Controllers;


use App\Core\Interfaces\ControllerInterface;

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
        if (!is_array($options)) {
            throw new \Exception('Invalid arguments');
        }
    }
}