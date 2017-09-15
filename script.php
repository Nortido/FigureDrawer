<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

checkParams($argv);

require "bootstrap.php";

$options['size'] = isset($argv[2]) ? $argv[2] : null;
$options['position'] = isset($argv[3]) ? $argv[3] : null;
$options['type'] = isset($argv[4]) ? $argv[4] : "text";

$options = array_filter($options);

drawFigure($argv[1], $options);
/**
 * @param array $args
 */
function checkParams($args)
{
    if (!isset($args[1])) {
        echo "Please enter figure name as argument" . PHP_EOL;
        exit;
    }

    if (isset($args[2])) {
        foreach (explode(",", $args[2]) as $value) {
            if ($value <= 0) {
                echo "All sizes should have a positive value" . PHP_EOL;
                exit;
            }
        }
    }

    if (isset($args[3])) {
        if (count(explode(",", $args[3])) != 2) {
            echo "Position should have two values for X and Y" . PHP_EOL;
            exit;
        }
    }
}

/**
 * @param string $name
 * @param array $options
 */
function drawFigure($name, $options = [])
{
    $controllerName = "App\Controllers\\" . ucfirst($name) . "Controller";

    if (class_exists($controllerName)) {
        /** @var \App\Core\Interfaces\ControllerInterface $controller */
        $controller = new $controllerName();
        return $controller->process($options);
    } else {
        echo "This figure is not supported" . PHP_EOL;
    }
}
