<?php
namespace djcat\Tests;

use PHPUnit\Framework\TestCase;
use YourNamespace\Service\NotificationService;

class NotificationServiceTest extends TestCase
{
    public function testSendNotification()
    {
        $notificationService = new NotificationService();

        $result = $notificationService->sendNotification('email', ['email' => 'user@example.com', 'subject' => 'Hello', 'body' => 'Hello, Email!']);

        $this->assertTrue($result);
    }
}
