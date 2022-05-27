<?php

declare(strict_types=1);

namespace Yl\Market\Dao;

use Yl\Market\Dao\ProductDao;
use Yl\Market\Dao\ProductDaoImpl;

class DaoFactory
{
    private string $host;
    private string $dbname;
    private string $user;
    private string $password;

    public function __construct(
        string $host = '127.0.0.1',
        string $dbname = 'ylmarket',
        string $user = 'root',
        string $password = '',
    ) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    public function getConnection(): \PDO
    {
        return new \PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8',
            $this->user,
            $this->password,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],
        );
    }

    public function getProductDao(): ProductDao
    {
        return new ProductDaoImpl($this);
    }
}