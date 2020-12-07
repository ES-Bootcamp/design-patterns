<?php 

namespace Patterns\Structural\Adapter\Braintree;

class PayWithBraintree implements PayWithBraintreeInterface {

	private $money = 0;
	
	public function pay($amount): void
	{
		if(is_int($amount)){
			$this->money += $amount;
		}
	}
	public function calculateTotal(): int
	{
		return $this->money;
	}
}