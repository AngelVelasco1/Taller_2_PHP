<?php
 /* Headers */
 header("Content-Type: application/json; charset=UTF-8");
 $data = [
    'intensity' => $_POST['Intensity'],
    'resistance' => $_POST['Resistance']
 ];
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
         echo exercise3::logic($data);
         break;
     default:
         echo "ERROR";
 }
 
?>