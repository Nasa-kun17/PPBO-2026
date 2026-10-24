<?php
namespace App\Contracts;

use App\Models\Book;

interface BookRepositoryInterface
{
    public function save(Book $book): void;
    public function findById(int $id): ?Book;
    public function findAll(): array;
    public function decrementStock(int $id): bool;
    public function incrementStock(int $id): bool;
}