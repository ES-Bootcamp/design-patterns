<?php 

namespace Patterns\Behavioral\ChainOfResponsibility;

abstract class Account {
	
	protected $next; // successor
	protected $amount; //balance

	public function setNext(Account $account)
	{
		$this->next = $account;
	}

	public function pay($amountToPay)
	{
		if($this->canPay($amountToPay)) {
			return "Paid with " . get_called_class();
		} elseif ($this->next) {
			return $this->next->pay($amountToPay);
		} else {
			throw new \Exception('Cannot pay for this product');
		}
	}

	public function canPay($amountToPay)
	{
		return $this->amount >= $amountToPay;
	}
}