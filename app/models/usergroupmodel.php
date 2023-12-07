<?php
namespace PHPMVC\Models;

require_once "abstractmodel.php";
class UserGroupModel extends AbstractModel  {
    public $GroupId;
    public $GroupName;


    
    
    protected static $tabelName = 'app_users_groups';
    protected static $tabelSchema = array(
        'GroupId'                     => self::DATA_TYPE_INT,
        'GroupName'                   => self::DATA_TYPE_STR



    );
    
    protected static $primaryKey = 'GroupId';

  
}
