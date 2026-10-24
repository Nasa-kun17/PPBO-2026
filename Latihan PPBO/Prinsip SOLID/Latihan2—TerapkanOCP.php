<?php
class PaymentProcessor
{
    public function process(string $type, float $amount): string
    {
        if ($type === 'credit_card') {
            return "Bayar $amount via kartu kredit";
        }   
        if ($type === 'bank_transfer') {
            return "Transfer $amount ke bank";
        }
        if ($type === 'e_wallet') {
            return "Bayar $amount via e-wallet";
        }
        return "Tipe tidak dikenal";
    }
}

//Kode berikut melanggar OCP. Refactor agar menambah tipe pembayaran baru cukup dengan membuat class baru: