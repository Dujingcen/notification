<?php

namespace djcat\service;

interface NotificationInterface
{
    public function send(array $data): bool;
}