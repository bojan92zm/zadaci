<?php
/** 
* IPC_Test_Config 
* 
* PHP version 5 
* 
* @category Php
* @package  MojPaket 
* @author   Bojan  <bojan92zm@yahoo.com> 
* @license  http://www.licenca.com/copyleft/licenca.html  Licenca 
* @link     http://show-dir-content.com 
*/
echo "The current directory is ". getcwd() . ".";
$scan = scandir(getcwd());
echo "Its contents are:\n";
foreach ($scan as $v) {
    if (($v == ".") || ($v == "..")) {
        echo("");
    } else {
        echo($v . "\n");
    }
}
?>
