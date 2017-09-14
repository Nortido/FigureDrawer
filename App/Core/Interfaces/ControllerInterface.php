<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Core\Interfaces;


interface ControllerInterface
{
    /**
     * @param array $options
     *
     * @return mixed
     * @throws \Exception
     */
    public function process($options);
}
