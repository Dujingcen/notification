<?php

namespace djcat\Factory;
use djcat\service\{EmailNotification, MiniProgramNotification, NotificationInterface, SmsNotification};

class NotificationFactory
{
    public static function create(string $type): NotificationInterface
    {
        switch ($type) {
            case 'miniprogram':
                return new MiniProgramNotification();
            case 'email':
                return new EmailNotification();
            case 'sms':
                return new SmsNotification();
            default:
                throw new \Exception("通知类型不存在");
        }
    }
}
