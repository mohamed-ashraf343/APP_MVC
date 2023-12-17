<?php
namespace PHPMVC\Controllers;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->messenger->add('welcom to index messege');
       /* var_dump($this->messenger->session->messages); */
        var_dump($this->messenger);

        $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }
}