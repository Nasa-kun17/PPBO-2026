<?php
class NotificationService
{
    public function send(string $message): void
    {
        mail('user@example.com', 'Notifikasi', $message);
    }
}

//Refactor kode berikut agar NotificationService bisa dengan mudah diganti dari email ke SMS / WhatsApp:
//Target: Buat interface NotificationChannel , implementasi EmailChannel , SmsChannel , lalu NotificationService menerima salah satunya lewat constructor