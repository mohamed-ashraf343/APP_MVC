<?php
namespace PHPMVC\Controllers;

use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;

class UsersController extends AbstractController 
{
    private $_createActionRoles = [
      'Username'        =>          'req|alphanum|min(3)|max(12)',
      'Password'        =>          'req|max(6)',
      'CPassword'       =>          'req|max(6)',
      'Email'           =>          'req|email',
      'CEmail'          =>          'req|email',
      'PhoneNumber'     =>          'alphanum|max(15)',
      'GroupId'     =>              'req|int',        
    ];
   
    public function defaultAction()
    {
        $this->_data['users'] = UserModel::getAll();
        $this->_view();
    }


    public  function createAction()
  {
    $this->_data['grops'] = UserGroupModel::getAll();
    if(isset($_POST['submit'])) {
      $this->isValid($this->_createActionRoles, $_POST);
    }
  $this->_view();
  } 

}