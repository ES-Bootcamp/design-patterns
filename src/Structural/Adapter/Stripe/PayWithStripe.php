<?php 

namespace Patterns\Structural\Adapter\Stripe;

class PayWithStripe implements PayWithStripeInterface {
	
	private $money = [];
	
	public function send($amount): void
	{
		if(is_int($amount)){
			$this->money[] = $amount;
		}
	}
	public function total(): int
	{
		return array_sum($this->money);
	}
}