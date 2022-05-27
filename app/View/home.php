<!DOCTYPE html>
<html>

<head>
    <?php require 'partials/head.php' ?>
</head>

<body>
    <div class="container">
        <header>
            <?php require 'partials/header.php' ?>
        </header>
        <main>
            <div class="products">
                <?php foreach ($products as $product) : ?>
                    <div class="product">
                        <div class="card">
                            <img class="card-media" src="storage/<?= $product->image ?>" alt="#">
                            <div class="card-content">
                                <p class="name"><?= $product->name ?></p>
                                <p class="price"><?= $product->price ?>$</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</body>

</html>