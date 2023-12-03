<?php
namespace PHPMVC\Controllers;

use PHPMVC\Models\UserModel;

class UsersController extends AbstractController 
{
   
    public function defaultAction()
    {
        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }

 
}