<?php
require_once("_config/config.php");


function autoload($class){

    require_once '_resource/'.$class.".php";

}
spl_autoload_register('autoload');
