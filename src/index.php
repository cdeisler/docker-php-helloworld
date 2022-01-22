<?php  
$dir = 'C:\temp';//D:\RetroPie\RetroPieSync\\192.168.1.148\\roms\arcade";//"/home/pi/RetroPie/roms/arcade";    
$string = file_get_contents("/neogeo.json");
$array = json_decode($string, true);
$one_item = $array[rand(0, count($array) - 1)];
$one_item_string = json_encode($one_item);
echo $one_item_string;


?>
