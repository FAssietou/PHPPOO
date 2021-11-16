<?php

class Autoload
{//                             controller\Controller
  public static function inclusionAuto($className)
  {
    // (2) str_replace() : 
    // (3) /Applications/MAMP/htdocs/Php_Poo/mvc/controller/Controller.php
   require_once __DIR__ . "/" . str_replace("\\", "/", $className . ".php");
  }
}
spl_autoload_register(array('Autoload', 'inclusionAuto')); // (1) spl_autoload_register():
