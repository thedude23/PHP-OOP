<?php

abstract class Visa {
    public function visaPayment() {
        return 'Perform payment';
    }

    abstract public function getPayment();
}