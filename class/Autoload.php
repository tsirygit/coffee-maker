<?php
class Autoload 
{
  public static function autoloader () 
{
 spl_autoload_register(array(__CLASS__,'path'));
}

public static function path($class)  
{
  require 'class/' .$class. '.php';
}
}


?>