<?php
class Parin_CheckoutReviewProductImage_Helper_Data extends Mage_Core_Helper_Abstract
{
        public function moduleActive(){
            return (bool) Mage::getStoreConfigFlag('checkoutreviewproductimage/general/enabled');
        }
}