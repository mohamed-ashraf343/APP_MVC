<?php
namespace PHPMVC\Controllers;

use PHPMVC\lib\Helper;
use PHPMVC\lib\InpoutFilter;
use PHPMVC\Models\PrivilegesModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserGroupPrivilegeModel;

class UsersGroupController extends AbstractController 
{
   use InpoutFilter;
   use Helper;
    public function defaultAction()
    {
        $this->_data['groups'] = UserGroupModel::getAll();
        $this->_view();
    }
    /// create function
    public function createAction()
    {

        $this->_data['privileg'] = PrivilegesModel::getAll();
        if(isset($_POST['submit'])) {
            $group = new UserGroupModel();
            $group->GroupName = $this->filterString($_POST['GroupName']);
            
            if($group->save())
            {
                if(isset($_POST['Privilege']) && is_array($_POST['Privilege']))
                {
                    foreach($_POST['Privilege'] as $PrivilegeId) {
                        $groupPrivilege = new UserGroupPrivilegeModel();
                        $groupPrivilege->GroupId = $group->GroupId;
                        $groupPrivilege->PrivilegeId = $PrivilegeId;
                        $groupPrivilege->save();

                    }
                }
                $this->redirect('/usersgroup');

            }
        }

        $this->_view();
    }


     /// edit function
     public function editAction()
     {
        $id = $this->filterInt($this->_params[0]);
        $group = UserGroupModel::getByPK($id);
        if($group === false)
        {
            $this->redirect('/usersgroup');
        }
         $this->_data['group'] = $group;
         $this->_data['privileg'] = PrivilegesModel::getAll();    
         $extractedprivilegesId = $this->_data['groupPrivileg'] = UserGroupPrivilegeModel::getGroupprivileges($group);
      
        //  var_dump( $this->_data['privileg']);

         if(isset($_POST['submit'])) {
             $group->GroupName = $this->filterString($_POST['GroupName']);
           
             if($group->save())
             {

                
                 if(isset($_POST['Privilege']) && is_array($_POST['Privilege']))
                 {
                      /// المسح اثناء التعديل علي عناصر  موجود مسحarryال
                     $privilegesIdToBeDeleted = array_diff($extractedprivilegesId, $_POST['Privilege'] );
                  /// الاضافة اثناء التعديل علي عناصر  موجود اضافة
                     $privilegesIdToBeAdd =   array_diff( $_POST['Privilege'], $extractedprivilegesId );

                 /// المسح اثناء التعديل علي عناصر  موجود مسحarryال
                 foreach($privilegesIdToBeDeleted as $deletedprivilege)
                 {
                    $unwantedprivilege = UserGroupPrivilegeModel::getBy(['PrivilegeId'=> $deletedprivilege, 'GroupId' => $group->GroupId]);
                    $unwantedprivilege->current()->delete();
                 }
                      /// المسح اثناء التعديل علي عناصر  موجود مسحarryال
                     foreach($privilegesIdToBeAdd as $PrivilegeId) {
                         $groupPrivilege = new UserGroupPrivilegeModel();
                         $groupPrivilege->GroupId = $group->GroupId;
                         $groupPrivilege->PrivilegeId = $PrivilegeId;
                         $groupPrivilege->save();
 
                     }
                 }
                 $this->redirect('/usersgroup');
 
             }
         }
         
         $this->_view();
         
     }

      /// function Delete

      public function deleteAction()
      {
         $id = $this->filterInt($this->_params[0]);
         $group = UserGroupModel::getByPK($id);
         if($group === false)
         {
             $this->redirect('/usersgroup');
         }
         
         $groupPrivilege = UserGroupPrivilegeModel::getBy(['GroupId' => $group->GroupId]);
         if(false !== $groupPrivilege){
            foreach($groupPrivilege as $groupPrivileg)
            {
                $groupPrivileg->delete();
            }
         }
         if($group->delete()){
            $this->redirect('/usersgroup');
         }
         
      }
  

 
}