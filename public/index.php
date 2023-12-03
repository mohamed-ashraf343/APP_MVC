<?php
namespace PHPMVC;
use  PHPMVC\lib\frontcontroller;
use PHPMVC\lib\Template;
use PHPMVC\lib\SessionManager;


if(!defined('DS')) {
define('DS', DIRECTORY_SEPARATOR);

}
require_once '..' . DS . 'app' . DS . 'config' . DS .  'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';

$session = new SessionManager();
$session->start();

$template_parts =  require_once '..' . DS . 'app' . DS . 'config' . DS .  'templetconfig.php';


$template = new Template($template_parts);

$frontcontroller = new frontcontroller($template);
$frontcontroller->dispath();