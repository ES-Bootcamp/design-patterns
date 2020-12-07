<?php 

namespace Patterns\Structural\Adapter;

use Patterns\Structural\Adapter\Stripe\PayWithStripeInterface;
use Patterns\Structural\Adapter\Braintree\PayWithBraintreeInterface;

class StripeToBraintree implements PayWithStripeInterface 
{  
	private $braintree;

	public function __construct(PayWithBraintreeInterface $braintree) {
		$this->braintree = $braintree;
	}
	public function send($amount): void
	{
		$this->braintree->pay($amount);
	}
	public function total(): int
	{
		return $this->braintree->calculateTotal();
	}
}