<?php

$productos = [
    0 => [
        "id" => 1,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 300,
        "imagen" => "img-pdto-1.jpg",
        "enOferta" => true
    ],
    1 => [
        "id" => 2,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 500,
        "imagen" => "img-pdto-2.jpg",
        "enOferta" => true
    ],
    2 => [
        "id" => 3,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 700,
        "imagen" => "img-pdto-3.jpg",
        "enOferta" => true
    ],
    3 => [
        "id" => 4,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 100,
        "imagen" => "img-pdto-1.jpg",
        "enOferta" => false
    ],
    4 => [
        "id" => 5,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 8900,
        "imagen" => "img-pdto-2.jpg",
        "enOferta" => false
    ],
    5 => [
        "id" => 6,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 300,
        "imagen" => "img-pdto-3.jpg",
        "enOferta" => true
    ],
    6 => [
        "id" => 7,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 800,
        "imagen" => "img-pdto-1.jpg",
        "enOferta" => false
    ],
    7 => [
        "id" => 8,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 5200,
        "imagen" => "img-pdto-2.jpg",
        "enOferta" => false
    ],
    8 => [
        "id" => 9,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 300,
        "imagen" => "img-pdto-3.jpg",
        "enOferta" => true
    ],
    9 => [
        "id" => 10,
        "titulo" => "Lorem Ipsum",
        "descripcion" => "Lorem Ipsum",
        "precio" => 9800,
        "imagen" => "img-pdto-1.jpg",
        "enOferta" => false
    ]
];

?>
<section class="vip-products">
    <?php foreach ($productos as $producto) : ?>
        <article class="product">
            <div class="photo-container">
                <img class="photo" src=<?= "images/" . $producto["imagen"] ?> alt=<?= "pdto " . $producto["id"] ?>>
                <img class="special" src="images/img-nuevo.png" alt="plato nuevo">
                <a class="zoom" href="#">Ampliar foto</a>
            </div>
            <h2><?= $producto["titulo"] ?></h2>
            <p><?= $producto["descripcion"] ?></p>
            <a class="more" href="#">ver más</a>
            <?php if ($producto["enOferta"] == TRUE) : ?>
            <a class="oferta" href="#">EN OFERTA!</a>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</section>