<?php 

namespace Patterns\Structural\Adapter\Braintree;

interface PayWithBraintreeInterface {
	public function pay($amount): void;
	public function calculateTotal(): int;
}