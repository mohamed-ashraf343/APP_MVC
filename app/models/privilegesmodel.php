<?php
namespace PHPMVC\Models;

require_once "abstractmodel.php";
class PrivilegesModel extends AbstractModel  {
    public $PrivilegeId;
    public $Privilege;
    public $PrivilegeTitle;



    
    
    protected static $tabelName = 'app_users_privileges';
    protected static $tabelSchema = array(
        'PrivilegeId'                 => self::DATA_TYPE_INT,
        'Privilege'                   => self::DATA_TYPE_STR,
        'PrivilegeTitle'              => self::DATA_TYPE_STR,




    );
    
    protected static $primaryKey = 'PrivilegeId';


  
}
