<?php
namespace PHPMVC\lib;
class AutoLoad {
    public static function autoload($clasName)
    {
        // Remove main Namespace
        $clasName = str_replace('PHPMVC', '', $clasName);
        $clasName = str_replace('\\','/',$clasName);
        $clasName = $clasName . '.php';
        $clasName = strtolower($clasName);
        if(file_exists(APP_PATH . $clasName)) {
            require_once APP_PATH . $clasName;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');