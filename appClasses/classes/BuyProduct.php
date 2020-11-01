<?php
include_once './abstract/Visa.abstract.php';

class BuyProduct extends Visa {
    public function getPayment() {
        return $this->visaPayment();
    }
}