<?php
namespace PHPMVC\Models;

require_once "abstractmodel.php";
class UserModel extends AbstractModel  {
    public $UserId;
    public $Username;
    public $Password;
    public $Email;
    public $PhoneNumber;
    public $SubscriptionDate;
    public $LastLogin;
    public $GroupId;

    
    
    protected static $tabelName = 'app_users';
    protected static $tabelSchema = array(
        'Username'                   => self::DATA_TYPE_STR,
        'Password'               => self::DATA_TYPE_STR,
        'Email'                  => self::DATA_TYPE_STR,
        'PhoneNumber'            => self::DATA_TYPE_STR,
        'SubscriptionDate'       => self::DATA_TYPE_DATE,
        'LastLogin'              => self::DATA_TYPE_STR,
        'GroupId'                => self::DATA_TYPE_INT


    );
    
    protected static $primaryKey = 'id';

  
}
