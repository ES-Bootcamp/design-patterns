<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\ChainOfResponsibility\Bank;
use Patterns\Behavioral\ChainOfResponsibility\Paypal;
use Patterns\Behavioral\ChainOfResponsibility\Bitcoin;


final class ChainOfResponsibilityTest extends TestCase {
	
	public function testThatTestIsOK()
	{
		// initiate 
		$bank = new Bank(100);
		$paypal = new Paypal(200);
		$bitcoin = new Bitcoin(300);

		$bank->setNext($paypal);
		$paypal->setNext($bitcoin);

		// pay
		$payment = $bank->pay(250);
		// test
		$this->assertEquals("Paid with Patterns\Behavioral\ChainOfResponsibility\Bitcoin", $payment);
	
		$this->expectException(\Exception::class);
		$payment = $bank->pay(550);
	}
}