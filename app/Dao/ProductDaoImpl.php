<?php

declare(strict_types=1);

namespace Yl\Market\Dao;

use Yl\Market\Dao\DaoFactory;
use Yl\Market\Model\Product;

class ProductDaoImpl implements ProductDao
{
    public function __construct(private DaoFactory $daoFactory)
    {
    }

    public function get(int $id): ?Product
    {
        $sql = 'SELECT * FROM products WHERE id = ?';
        $conn = $this->daoFactory->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);

        $stmt->execute([$id]);
        $res = $stmt->fetch();

        if ($res === false) {
            return null;
        }

        return $res;
    }

    public function getAll(): array
    {
        $sql = 'SELECT * FROM products';
        $conn = $this->daoFactory->getConnection();

        $stmt = $conn->query($sql, \PDO::FETCH_ASSOC);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);

        if ($stmt === false) {
            return [];
        }

        return $stmt->fetchAll();
        return [];
    }
}