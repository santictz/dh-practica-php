<?php
$menu = [
    "Home",
    "Quienes",
    "Servicios",
    "Portfolios",
    "Sucursales",
    "Contacto"
];
?>

<?php foreach ($menu as $opcion) : ?>
    <li>
        <a href="#"><?= $opcion ?></a>
    </li>
<?php endforeach; ?>