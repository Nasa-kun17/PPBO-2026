<?php
namespace App\Loggers;

use App\Contracts\LoggerInterface;

class InMemoryLogger implements LoggerInterface
{
    private array $logs = [];

    public function log(string $message): void
    {
        $this->logs[] = $message;
    }

    public function getLogs(): array
    {
        return $this->logs;
    }
}