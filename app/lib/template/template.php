<?php
namespace PHPMVC\lib\Template;


class Template {

    use TemplateHelper;
    private $_templateparts;
    private $_action_view;
    private $_data;

    public function __construct(array $parts)
    {
        $this->_templateparts = $parts;
    }

   public function setActionViewFile($actionviewpath)
   {
    $this->_action_view = $actionviewpath;
   }
   public function setAppData($data)
   {
    $this->_data = $data;
   }

   private function renderTemplateStart()
   {
    require_once  TEMPLATE_PATH . 'templateheaderstart.php';

   }
   private function renderTemplateEnd()
   {
    require_once TEMPLATE_PATH . 'templateheaderend.php';

   }
   private function renderTemplateFooter()
   {   
     require_once TEMPLATE_PATH . 'templatefooter.php';
   }
   private function renderTemplateBlocks()
   {
    if(!array_key_exists('template', $this->_templateparts))
    {
        trigger_error('Sory Not Found TemplateBlocks', E_USER_ERROR);
    }else{
    $parts = $this->_templateparts['template'];
    if(!empty($parts)){
        extract($this->_data);
        foreach($parts as $partKey => $file){
            if($partKey === ':view'){
                require_once $this->_action_view;
            }else{
            require_once $file;

            }
        }
    }
    }
   }

   private function renderHeaderResorces()
   {

    $output = '';
    if(!array_key_exists('header_resources', $this->_templateparts)) {
        trigger_error('Sorry you have to define the header resources', E_USER_WARNING);
    } else {
        $resources = $this->_templateparts['header_resources'];

        // Generate CSS Links
        $css = $resources['css'];
        if(!empty($css)) {
            foreach ($css as $cssKey => $path) {
                $output .= '<link type="text/css" rel="stylesheet" href="' . $path . '" />';
            }
        }
        // Generate JS Scripts
        $js = $resources['js'];
        if(!empty($js)) {
            foreach ($js as $jsKey => $path) {
                $output .= '<script src="' . $path . '"></script>';
            }
        }
       
    }
    echo $output;
   }
   private function renderFooterResources()
    {
        $output = '';
        if(!array_key_exists('footer_resources', $this->_templateparts)) {
            trigger_error('Sorry you have to define the footer resources', E_USER_WARNING);
        } else {
            $resources = $this->_templateparts['footer_resources'];

            // Generate JS Scripts
            if(!empty($resources)) {
                foreach ($resources as $resourceKey => $path) {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
        }
        echo $output;
    }

   public function renderApp()
   {
        $this->renderTemplateStart();
        $this->renderHeaderResorces();  
        $this->renderTemplateEnd();
        $this->renderTemplateBlocks();
        $this->renderFooterResources();
        $this->renderTemplateFooter();


   }
} 




// private function renderTemplateHeader()
// {   
//  require_once TEMPLATE_PATH . 'header.php';
// }
// private function renderTemplateNav()
// {   
//  require_once TEMPLATE_PATH . 'nav.php';
// }
// private function renderTemplateWrapperSart()
// {   
//  require_once TEMPLATE_PATH . 'wrapperstart.php';
// }
// private function renderTemplateWrapperEnd()
// {   
//  require_once TEMPLATE_PATH . 'wrapperend.php';
// }