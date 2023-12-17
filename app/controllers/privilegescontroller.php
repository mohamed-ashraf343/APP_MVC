<?php
namespace PHPMVC\Controllers;

use PHPMVC\lib\Helper;
use PHPMVC\lib\InpoutFilter;
use PHPMVC\Models\PrivilegesModel;
use PHPMVC\Models\UserGroupPrivilegeModel;

class PrivilegesController extends AbstractController 
{
    use InpoutFilter;
    use Helper;
   
    public function defaultAction()
    {
        $this->_data['privileg'] = PrivilegesModel::getAll();
        $this->_view();
    }


    /// function create 
    public function createAction()
    {
        if(isset($_POST['submit']))
        {
            $privilege = new PrivilegesModel();
            $privilege->PrivilegeTitle = $this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege = $this->filterString($_POST['Privilege']);
            if($privilege->save())
            {   
                $this->redirect('/privileges');
            }
        }
        $this->_view();
    }

        /// function Edite
        public function editAction()
        {

            $id = $this->filterInt($this->_params[0]);
            $privilege = PrivilegesModel::getByPK($id);
            if($privilege === false){
                $this->redirect('/privileges');
            }
            $this->_data['privileg'] = $privilege;

            if(isset($_POST['submit']))
            {
                $privilege->PrivilegeTitle = $this->filterString($_POST['PrivilegeTitle']);
                $privilege->Privilege = $this->filterString($_POST['Privilege']);
                if($privilege->save())
                {
                    $this->redirect('/privileges');
                }
            }
            $this->_view();
        }

         /// function Delete
         public function deleteAction()
         {
 
             $id = $this->filterInt($this->_params[0]);
             $privilege = PrivilegesModel::getByPK($id);
             if($privilege === false){
                 $this->redirect('/privileges');
             }
         $groupPrivilege = UserGroupPrivilegeModel::getBy(['PrivilegeId' => $privilege->PrivilegeId]);
         if(false !== $groupPrivilege){
            foreach($groupPrivilege as $groupPrivileg)
            {
                $groupPrivileg->delete();
            }
         }
                 if($privilege->delete())
                 {
                     $this->redirect('/privileges');
                 }
             
         }
    

 
}