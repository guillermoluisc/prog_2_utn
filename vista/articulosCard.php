<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2 class="mb-4 text-center">Catálogo de Artículos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($articulos as $a): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/300x200.png?text=Imagen+Articulo" class="card-img-top" alt="Imagen del artículo">

                    <div class="card-body text-center">
                        <h5 class="card-title"><?= htmlspecialchars($a['descripcion_breve']) ?></h5>
                        <p class="card-text display-6 text-success">$<?= number_format($a['precio'], 2) ?></p>
                        Stock disponible:
                        <?php echo $a['stock']; ?>
                        <p class="text-warning mb-2">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <?= $i <= $a['calificacion'] ? "⭐" : "☆" ?>
                            <?php endfor; ?>
                        </p>

                        <form action="index.php?accion=agregar_carrito" method="POST">
                            <input type="hidden" name="id" value="<?= $a['id'] ?>">
                            <input type="hidden" name="stock" value="<?= $a['stock'] ?>">

                            <?php
                            $cantidadEnCarrito = $_SESSION['carrito'][$a['id']]['cantidad'] ?? 0;
                            ?>

                            <?php if ($a['stock'] > 0 && $cantidadEnCarrito < $a['stock']): ?>
                                <button type="submit" class="btn btn-primary w-100">🛒 Agregar al carrito</button>
                            <?php elseif ($a['stock'] > 0 && $cantidadEnCarrito >= $a['stock']): ?>
                                <p class="text-danger">Stock máximo alcanzado en carrito</p>
                            <?php else: ?>
                                <p class="text-danger">Agotado</p>
                            <?php endif; ?>
                        </form>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php include 'footer.php'; ?>