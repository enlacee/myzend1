<?php

class Default_Model_DbTable_User extends Zend_Db_Table_Abstract
{

    protected $_name = 'zf_users';
    
    
    
    public function getByCode() 
    {
        return $this->fetchAll();
    }


}
