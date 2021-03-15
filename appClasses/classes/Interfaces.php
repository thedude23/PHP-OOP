<?php
namespace appClasses\classes;

// Interfaces - groups togfether different classes

interface PaymentInterface {
    public function payNow(); // classes needs to use the same name
}
interface LogInInterface {
    public function loginFirst(); // classes needs to use the same name
}

class Paypal implements PaymentInterface, LogInInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LogInInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        // $paymentType->loginFirst();
        // $paymentType->payNow();
        $paymentType->paymentProcess();
    }
    public function onlinePay(LogInInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);