<?php
namespace PHPMVC\Controllers;

use PHPMVC\lib\FrontController;


class AbstractController {

    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_template;
    protected $_registry;

    protected $_data = [];
    public function __get($key)
    {
        return $this->_registry->$key;
    } 

    
    
    public  function notFountAction()
    {
        $this->_view();
    }

    public function setController ($controllerNmae)
    {
        $this->_controller = $controllerNmae; 
    }
    public function setAction ($actionNmae)
    {
        $this->_action = $actionNmae; 
    }
    public function setTemplate($_template)
    {
        $this->_template = $_template;
    }
    
    public function setRegistry($_registry)
    {
        $this->_registry = $_registry;
    }
    public function setaParams ($_params)
    {
        $this->_params = $_params; 
    }

    protected function _view()
    {
        $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.views.php';
        
        if($this->_action == FrontController::NOT_FOUND_ACTION || !file_exists($view)) {
           $view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }
            $this->_data = array_merge($this->_data);
            $this->_template->setRegistry($this->_registry);
            $this->_template->setActionViewFile($view);
            $this->_template->setAppData($this->_data);
            $this->_template->renderApp();

           
            require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';

          
         
        
    }
}