<?php
namespace PHPMVC\Models;

require_once "abstractmodel.php";
class UserGroupPrivilegeModel extends AbstractModel  {
    public $Id;
    public $GroupId;
    public $PrivilegeId;


    
    
    protected static $tabelName = 'app_users_groups_privileges';
    protected static $tabelSchema = array(
        'GroupId'                     => self::DATA_TYPE_INT,
        'PrivilegeId'                   => self::DATA_TYPE_INT



    );
    
    protected static $primaryKey = 'Id';


    public static function getGroupprivileges(UserGroupModel $group){
        $groupPrivileg = self::getBy(['GroupId' => $group->GroupId]);
        $extractedprivilegesId = [];
        if(false !== $groupPrivileg)
        {
           foreach($groupPrivileg as $privile)
           {
               $extractedprivilegesId[] =$privile->PrivilegeId;
           }
        }
        return $extractedprivilegesId;
    }
  
}
