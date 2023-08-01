<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <div style="width:50%;margin:0 auto;"><a href="index.html" class="logo"><img src="assets/img/logo-footer.png" alt="" class="img-fluid"></a></div>
              <br><p class="pb-3"><em>Organizado por el Colegio de Ingenieros Topógrafos de Costa Rica</em></p>
              <p>
                Rancho Don Teo, Perez Zeledon<br><br>
                <strong>Reservaciones:</strong> (506) 2103-2442 <br>
                <strong>Email:</strong> info@colegiotopografocr.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/ColegioIngenierosTopografos" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/colegioingenierostopografos/ " class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://twitter.com/search?q=CIT2012CR " class="google-plus"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.linkedin.com/in/colegio-ingenieros-top%C3%B3grafos-cit-151081235/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Mapa del sitio</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>?pag=program-inner">Programa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>?pag=exhibitors-inner">Expositores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>?pag=ponencia-inner">Ejes Temáticos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>?pag=contact">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="visibility:hidden;">Otros posibles links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url?>?pag=register-inner">Inscripciones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Patrocinadores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospedaje</a></li>
            </ul>
          </div>

          <?php
          include("config/conexion.php");
          $sql = "select * from ponencias order by id ASC";
          $query = $mysqli->query($sql);
          ?>
          <!--<div class="col-lg-4 col-md-6 footer-newsletter footer-links">
            <h4>Ejes Temáticos</h4>
            <ul>
              <?php 
                while($row = $query->fetch_assoc()){
              ?>
              <li><i class="bx bx-chevron-right"></i> <?=$row['titulo']?></li>
              <?php 
                }
              ?>
            </ul>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CIT</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado por <a href="">Tecnosula</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!-- contador -->
<script>
function calcularTiempoRestante(fechaObjetivo) {
  var fechaActual = new Date().getTime();
  var diferencia = fechaObjetivo - fechaActual;

  var dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
  var horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
  var segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

  return {
    dias: dias,
    horas: horas,
    minutos: minutos,
    segundos: segundos
  };


}

// Función para mostrar el contador regresivo
function mostrarContadorRegresivo(fechaObjetivo) {
  var contadorElemento = document.getElementById('contador');

  // Actualizar el contador cada segundo
  var contadorIntervalo = setInterval(function() {
    var tiempoRestante = calcularTiempoRestante(fechaObjetivo);

    // Mostrar el contador en el elemento HTML
    contadorElemento.innerHTML = tiempoRestante.dias + '<span style="font-size:12px;">(Días)</span>&nbsp;&nbsp;&nbsp;&nbsp;' + tiempoRestante.horas + '<span style="font-size:12px;">(Horas)</span>&nbsp;&nbsp;&nbsp;&nbsp;' + tiempoRestante.minutos + '<span style="font-size:12px;">(Minutos)</span>&nbsp;&nbsp;&nbsp;&nbsp;' + tiempoRestante.segundos + '<span style="font-size:12px;">(Segundos)</span>';

    // Detener el contador cuando llegue a cero
    if (tiempoRestante.dias <= 0 && tiempoRestante.horas <= 0 && tiempoRestante.minutos <= 0 && tiempoRestante.segundos <= 0) {
      clearInterval(contadorIntervalo);
      contadorElemento.innerHTML = '¡Tiempo terminado!';
    }
  }, 1000); // 1000 milisegundos = 1 segundo
}

// Ejemplo de uso
var fechaObjetivo = new Date('2023-08-23T10:00:00'); // Fecha y hora objetivo en formato ISO 8601
mostrarContadorRegresivo(fechaObjetivo);
</script>

</body>

</html>