<?php

namespace djcat\service;

use djcat\factory\NotificationFactory;

class NotificationService
{
    public function sendNotification(string $type, array $data): bool
    {
        $notification = NotificationFactory::create($type);
        return $notification->send($data);
    }
}
