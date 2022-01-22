<?php  
$dir = "D:\RetroPie\RetroPieSync\192.168.1.148\roms\arcade";//"/home/pi/RetroPie/roms/arcade";    

function scan($dir){ 
   $result = array(); 
   foreach(scandir($dir) as $key => $value){ 
      if(!empty($value) and !in_array($value, array(".", ".."))){ 
         if(is_dir($dir.DIRECTORY_SEPARATOR.$value)){ 
            $result[$value] = scan($dir.DIRECTORY_SEPARATOR.$value); 
         } 
         else{ 
            $result[] = $value; 
         } 
      } 
   }  
   return $result; 
} 

echo json_encode((array)scan($dir), JSON_UNESCAPED_UNICODE);

?>
