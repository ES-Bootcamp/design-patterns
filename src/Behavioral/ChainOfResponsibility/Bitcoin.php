<?php 

namespace Patterns\Behavioral\ChainOfResponsibility;
use Patterns\Behavioral\ChainOfResponsibility\Account;

class Bitcoin extends Account {

	protected $amount;
	public function __construct($amount)
	{
		$this->amount = $amount;
	}
}