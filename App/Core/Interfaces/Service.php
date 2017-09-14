<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

namespace App\Core\Interfaces;


interface Service
{
    /**
     * @param array $options
     *
     * @return array
     */
    static function run($options);
}