<?php
/**
 * Author: Nortido <nortido@gmail.com>
 */

checkParams($argv);

require "bootstrap.php";

$options = isset($argv[2]) ? explode(",", $argv[2]) : [];
$options['type'] = "text";

if (isset($argv[3])) {
    $options['type'] = $argv[3];
}

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