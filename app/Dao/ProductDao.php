<?php

declare(strict_types=1);

namespace Yl\Market\Dao;

interface ProductDao
{
    public function get(int $id): mixed;

    public function getAll(): array;
}