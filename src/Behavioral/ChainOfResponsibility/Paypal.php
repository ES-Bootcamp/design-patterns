<?php 

namespace Patterns\Behavioral\ChainOfResponsibility;
use Patterns\Behavioral\ChainOfResponsibility\Account;

class Paypal extends Account {

	protected $amount;

	public function __construct($amount)
	{
		$this->amount = $amount;
	}
}