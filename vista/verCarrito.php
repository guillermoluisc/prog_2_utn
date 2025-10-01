<?php include 'header.php'; ?>
<div class="container mt-4">
    <h2>🛒 Mi Carrito</h2>
    <?php if (empty($carrito)): ?>
        <p class="alert alert-info">El carrito está vacío.</p>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                <?php 
                $granTotal = 0;
                foreach ($carrito as $item): 
                    $total = $item['precio'] * $item['cantidad'];
                    $granTotal += $total;
                ?>
                <tr>
                    <td><?= $item['nombre'] ?></td>
                    <td>$<?= number_format($item['precio'], 2) ?></td>
                    <td><?= $item['cantidad'] ?></td>
                    <td>$<?= number_format($total, 2) ?></td>
                    <td>
                        <button>
                            <a href="index.php?accion=eliminar_del_carrito&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <h3>Total: $<?= number_format($granTotal, 2) ?></h3>
        <a href="index.php?accion=checkout" class="btn btn-success">Finalizar compra</a>
    <?php endif ?>
</div>
<?php include 'footer.php'; ?>
