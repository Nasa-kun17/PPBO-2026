<?php
namespace App\Notifications;

use App\Contracts\NotifierInterface;

class WhatsAppNotifier implements NotifierInterface
{
    public function send(string $to, string $message): bool
    {
        // Di dunia nyata: integrasi API WhatsApp Gateway di sini
        echo "Kirim WA ke $to: $message\n";
        return true;
    }
}