<?php
namespace App\Notifications;

use App\Contracts\NotifierInterface;

class EmailNotifier implements NotifierInterface
{
    public function send(string $to, string $message): bool
    {
        return mail($to, 'Notifikasi Perpustakaan', $message);
    }
}