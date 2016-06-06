<?php
namespace TemplatN;
class Autoload{

static function loader($class)
{
    $parts = explode('\\', $class);
    require end($parts) . '.php';
}
}