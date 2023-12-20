<?php
namespace PHPMVC;
use  PHPMVC\lib\frontcontroller;
use PHPMVC\lib\Messenger;
use PHPMVC\lib\Registry;
use PHPMVC\lib\Template\Template;
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
$messenger = Messenger::getInstance($session);
$registry =  Registry::getInstance();
$registry->session = $session;
$registry->messenger =  $messenger;



$frontcontroller = new frontcontroller($template, $registry);
$frontcontroller->dispath();