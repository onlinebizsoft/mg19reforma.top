<?php

class Dialcom_ZenCard_Block_Sales_Invoice_Discount extends Mage_Sales_Block_Order_Invoice_Totals
{
    protected function _initTotals()
    {
        parent::_initTotals();

        $amount = $this->getOrder()->getData('discount_total');
        if ($amount != 0) {
            $this->addTotal(new Varien_Object(
                array(
                    'code' => 'discount_total',
                    'label' => Mage::helper('przelewy')->__('ZenCard Discount'),
                    'value' => $amount
                )
            ));
        }

        return $this;
    }
}