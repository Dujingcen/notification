<?php

namespace djcat\service;
use PHPMailer\PHPMailer\PHPMailer;
class EmailNotification implements NotificationInterface
{

    public function send(array $data): bool
    {
        $mail = new PHPMailer(true);
        // 设置邮件参数并发送邮件
        // 示例：
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($data['email']);
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];

        return $mail->send();
    }
}