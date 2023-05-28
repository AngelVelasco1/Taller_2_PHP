<?php
/* Headers */
header("Content-Type: application/json; charset=UTF-8");
$number_value = json_decode(file_get_contents('php://input'), true);
/* Method */
$method = $_SERVER['REQUEST_METHOD'];
/* Functions */
function autoLoad()
{
    $path = dirname(__DIR__);
    require $path . '/config/functions.php';
}
spl_autoload_register('autoLoad');


switch ($method) {
    case 'POST':
        echo exercise2::toNumber($number_value);
        break;
    default:
        echo "ERROR";
}
?>