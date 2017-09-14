<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

$dirs = [
    'Core/Interfaces',
    'Core/AbstractClasses',
    'Entities',
    'Controllers',
    'Support'
];

loadClasses($dirs);

/**
 * @param array $dirs
 */
function loadClasses($dirs = [])
{
    foreach ($dirs as $dir) {
        $dirPath = __DIR__.DIRECTORY_SEPARATOR."App".DIRECTORY_SEPARATOR.$dir;
        foreach (scandir($dirPath) as $filename) {

            $path = $dirPath.DIRECTORY_SEPARATOR. $filename;

            if (is_file($path) && is_readable($path)) {
                require $path;
            }
        }
    }
}
