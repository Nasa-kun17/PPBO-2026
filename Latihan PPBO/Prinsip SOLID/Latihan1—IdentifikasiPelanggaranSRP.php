<?php
class OrderProcessor
{
    public function validateOrder(array $order): bool { ... }
    public function calculateTotal(array $order): float { ... }
    public function saveToDatabase(array $order): void { ... }
    public function sendEmailConfirmation(array $order): void { ... }
    public function generatePdfInvoice(array $order): string { ... }
}

//Perhatikan kode berikut. Identifikasi berapa tanggung jawab yang ada, lalu pecah menjadi class-class terpisah:
//Petunjuk: Minimal ada 5 tanggung jawab berbeda di sini.