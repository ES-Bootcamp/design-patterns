<?php declare(strict_types=1);

namespace Tests\Structural;

use Patterns\Structural\Decorator\SimpleNotification;
use Patterns\Structural\Decorator\FacebookNotification;
use Patterns\Structural\Decorator\SlackNotification;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase {

	public $notification;
	public function setUp(): void
	{
		$this->notification = new SimpleNotification(); 
		parent::setUp();
	}
	public function testThatSimpleNotificationWorks()
	{
		$this->notification->setMessage("Message added");
		$this->assertEquals("Message added", $this->notification->getMessage());
		$this->assertEquals("Message sent", $this->notification->send());
	}
	public function testThatFacebookNotificationWorks()
	{
		$facebookNotification = new FacebookNotification($this->notification);
		$facebookNotification->setMessage("Message added");
		$this->assertEquals("Message added to facebook", $facebookNotification->getMessage());
		$this->assertEquals("Message sent via facebook", $facebookNotification->send());
	}
	public function testThatSlackNotificationWorks()
	{
		$slackNotification = new SlackNotification($this->notification);
		$slackNotification->setMessage("Message added");
		$this->assertEquals("Message added to slack", $slackNotification->getMessage());
		$this->assertEquals("Message sent via slack", $slackNotification->send());
	}
}