<?php

declare(strict_types=1);

namespace Yl\Market\Controller;

use Yl\Market\Dao\DaoFactory;

class IndexController
{
    private DaoFactory $factory;

    public function __construct()
    {
        $this->factory = new DaoFactory();
    }

    public function index()
    {
        $productDao = $this->factory->getProductDao();
        $products = $productDao->getAll();

        $view = \getcwd() . '/app/View/home.php';

        require $view;
    }
}