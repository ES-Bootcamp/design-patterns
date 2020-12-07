<?php 

namespace Patterns\Structural\Adapter\Stripe;

interface PayWithStripeInterface {
	public function send($amount): void;
	public function total(): int;
}