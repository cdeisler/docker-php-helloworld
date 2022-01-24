<?php  
$romdatfilepath = '/var/www/html/neogeo.json';//D:\RetroPie\RetroPieSync\\192.168.1.148\\roms\arcade";//"/home/pi/RetroPie/roms/arcade";    

$rom_emu_path = '/home/pi/RetroPie/roms/arcade';

if (isset($_GET['emu'])) {
    //It exists
    //echo "emu exists:" . $_GET['emu'];
    $emu = $_GET['emu'];
} else {
    //echo "emu is fba";
    $emu = "fba";
}

switch (strtolower($emu)) {
    case "fba":
        $rom_emu_path = '/home/pi/RetroPie/roms/fba';
        $romdatfilepath = '/var/www/html/neogeo.json';
        break;
    case "arcade":
        $rom_emu_path = '/home/pi/RetroPie/roms/arcade';
        $romdatfilepath = '/var/www/html/arcade.json';
        break;
    case "kat":
        $rom_emu_path = '/home/pi/RetroPie/roms/mame2003';
        $romdatfilepath = '/var/www/html/mame2003.json';
        break;
    default:
        echo "missing emulator param";
}

$string = file_get_contents($romdatfilepath);
$array = json_decode($string, true);
$one_item = $array[rand(0, count($array) - 1)];
$one_item_string = $one_item["name"];//json_encode($one_item["name"]);
echo "{$rom_emu_path}/{$one_item_string}";

?>
