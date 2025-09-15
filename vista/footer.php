<!-- footer.php -->
<footer class="bg-dark text-white mt-auto pt-4 pb-3">
  <div class="container">
    <div class="row">

      <!-- Información de contacto -->
      <div class="col-md-4 mb-3">
        <h5>Contacto</h5>
        <p><i class="bi bi-envelope"></i> agenda.mvc@ejemplo.com</p>
        <p><i class="bi bi-telephone"></i> +54 9 11 1234-5678</p>
        <p><i class="bi bi-geo-alt"></i> Chacabuco, Buenos Aires</p>
      </div>

      <!-- Enlaces útiles -->
      <div class="col-md-4 mb-3">
        <h5>Enlaces</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white text-decoration-none">Inicio</a></li>
          <li><a href="index.php?accion=crear" class="text-white text-decoration-none">Nuevo Contacto</a></li>
          <li><a href="#" class="text-white text-decoration-none">Ayuda</a></li>
          <li><a href="#" class="text-white text-decoration-none">Acerca de</a></li>
        </ul>
      </div>

      <!-- Redes sociales -->
      <div class="col-md-4 mb-3">
        <h5>Seguinos</h5>
        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>

    <hr class="border-light">
    <div class="text-center">
      <small>&copy; <?= date('Y') ?> Agenda MVC. Todos los derechos reservados.</small>
    </div>
  </div>
</footer>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
