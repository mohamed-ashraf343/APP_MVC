<?php
namespace PHPMVC\Controllers;

use PHPMVC\lib\Helper;
use PHPMVC\lib\InpoutFilter;
use PHPMVC\Models\Employee;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController 
{
  use InpoutFilter;
  use Helper;
    public function defaultAction ()
    {
      $this->_data['employeess'] = EmployeeModel::getAll();
       
        $this->_view();
    }

    /// function Add
    public function addAction()
    {
      if(isset($_POST['submit'])) 
      {
        $emp = new EmployeeModel();
        $emp->Name = $this->filterString($_POST['Name']);
        $emp->PhoneNumber = $this->filterString($_POST['PhoneNumber']);
        $emp->Email = $this->filterString($_POST['Email']);
        $emp->Address = $this->filterString($_POST['Address']);
        if($emp->save())
        {
          $_SESSION['Message'] = 'Employee, Saved Successfully';
          $this->redirect('/employee');
        }
      }      
        $this->_view();
    }

    /// function Edit
    public function editAction()
    {
      $ClientId = $this->filterInt($this->_params[0]);
      $emp = EmployeeModel::getByPK($ClientId);
      if($emp === false)
      {
        $this->redirect('/employee');
      }
      $this->_data['employee'] = $emp;
      if(isset($_POST['submit'])) 
      {
        $emp->Name = $this->filterString($_POST['Name']);
        $emp->PhoneNumber = $this->filterString($_POST['PhoneNumber']);
        $emp->Email = $this->filterString($_POST['Email']);
        $emp->Address = $this->filterString($_POST['Address']);
        if($emp->save())
        {
          $_SESSION['Message'] = 'Employee, Saved Successfully';
          $this->redirect('/employee');
        }
      }      
        $this->_view();
    }


     /// function delete
     public function deleteAction()
     {
       $ClientId = $this->filterInt($this->_params[0]);
       $emp = EmployeeModel::getByPK($ClientId);
       if($emp === false)
       {
         $this->redirect('/employee');
       }
         if($emp->delete())
         {
           $_SESSION['Message'] = 'Employee, delete Successfully';
           $this->redirect('/employee');
         }
     }
}