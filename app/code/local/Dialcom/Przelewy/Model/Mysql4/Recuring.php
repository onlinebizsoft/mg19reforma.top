<?php
class Dialcom_Przelewy_Model_Mysql4_Recuring extends Mage_Core_Model_Mysql4_Abstract {
    protected function _construct() {   
        $this->_init('recuring/recuring', 'id');
    }
}