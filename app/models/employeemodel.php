<?php
namespace PHPMVC\Models;

require_once "abstractmodel.php";
class EmployeeModel extends AbstractModel  {
    public $ClientId;
    public $Name;
    public $PhoneNumber;
    public $Email;
    public $Address;
    
    
    protected static $tabelName = 'app_clients';
    protected static $tabelSchema = array(
        'Name'              => self::DATA_TYPE_STR,
        'PhoneNumber'       => self::DATA_TYPE_STR,
        'Email'             => self::DATA_TYPE_STR,
        'Address'           => self::DATA_TYPE_STR

    );
    protected static $primaryKey = 'ClientId';

  

  


    public function getTableName () {
        return self::$tabelName;
    }


}
