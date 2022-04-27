<?php

/// *************************************   Base de datos *************************************** ///

define("DB_HOST","mchersql01\BAS;database=Datos_Para_Reportes");
define("DB_USER","sa");
define("DB_PASSWORD","Mcher2015");
define("DB_NAME","Datos_Para_Reportes");
define("DB_CHARSET","utf-8");

/// *************************************   /Base de datos *************************************** ///




/// *************************************   Rutas  *************************************** ///
define('ROOT', __DIR__."/");


define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "http://localhost/Control_Procesos_shopify/"
   : "http://70.38.46.72/app_name/"
);

/// *************************************   /Rutas  *************************************** ///

?>