<main id="main">

    <div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Registro de Patrocinadores</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Registro</span></p>
      </div>
    </div>

    <?php
    include("config/conexion.php");

    $sql = "select * from patrocinadores order by id ASC";
    $query = $mysqli->query($sql);

    ?>

    <div style="margin:50px;"></div>

    <section id="counts" class="counts">
      <div class="container">
        <div class="section-title">
          <h2>Patrocinadores</h2>
          <p>¡Bienvenidos, a nuestros patrocinadores!</p>
          <p style="font-size:24px;font-weight:normal;">Agradecemos su apoyo incondicional en nuestra misión conjunta de crecimiento y éxito. <span style="color:#F8C300;">¡Juntos logramos grandes cosas!</span></p>
        </div>
        <div class="row no-gutters">
          <?php 
            while($row = $query->fetch_assoc()){
          ?>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <div style="width:95%;margin:0 auto;"><a href="<?=$row['link']?>"><img style="width:100%" src="<?=base_url?>assets/img/sponsors/<?=$row['imagen']?>"></a></div>
            </div>
          </div>
          <?php 
            }
          ?>
        </div>

      </div>
    </section><!-- End sponsors Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formulario de Registro</h2>
          <p><span style="color:#F8C300;">¡PROMOCIONE</span> SU MARCA CON NOSOTROS!</p>
        </div>

        <div class="row align-items-center">

          <div class="col-lg-3">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <i style="font-size:52px; color:#B1B3B5;" class="bi bi-award-fill"></i>
              <h3>PLATINO</h3>
              <h4>$50<span>Incluye:</span></h4>
              <ul>
                <li><span style="font-weight:bolder;">Viernes 21 de julio:</span> 1 coffee break mañana, 1 almuerzo, 1 coffee break tarde.</li>
                <li><span style="font-weight:bolder;">Sábado 22 de julio:</span> 1 coffee break mañana, parrillada bailable.</li>
                <li><span style="font-weight:bolder;">Material Didáctico</span>
                <li><span style="font-weight:bolder;">Derecho a participar de las rifas del cierre</span></li>
                  <ul>
                    <li><span style="font-weight:bolder;">Actividades sociales:</span>
                      <ul>
                        <li>Coctel de bienvenida el viernes 21 de julio</li>
                        <li>Parrillada bailable de clausura el sábado 22 de julio </li>
                      </ul>
                    </li>
                  </ul>   
                </li>
                <li>Certificado de participación</li>
              </ul>
              <!--<a href="#" class="get-started-btn">Get Started</a>-->
            </div>
          </div>

          <div class="col-lg-3">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <i style="font-size:52px; color:#F8C300;" class="bi bi-award-fill"></i>
              <h3>ORO</h3>
              <h4>$80<span>Incluye:</span></h4>
              <ul>
                <li><span style="font-weight:bolder;">Viernes 21 de julio:</span> 1 coffee break mañana, 1 almuerzo, 1 coffee break tarde.</li>
                <li><span style="font-weight:bolder;">Sábado 22 de julio:</span> 1 coffee break mañana, parrillada bailable.</li>
                <li><span style="font-weight:bolder;">Material Didáctico</span>
                <li><span style="font-weight:bolder;">Derecho a participar de las rifas del cierre</span></li>
                  <ul>
                    <li><span style="font-weight:bolder;">Actividades sociales:</span>
                      <ul>
                        <li>Coctel de bienvenida el viernes 21 de julio</li>
                        <li>Parrillada bailable de clausura el sábado 22 de julio </li>
                      </ul>
                    </li>
                  </ul>   
                </li>
                <li>Certificado de participación</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <i style="font-size:52px; color:#939598;" class="bi bi-award-fill"></i>
              <h3>PLATA</h3>
              <h4>$30<span>Incluye:</span></h4>
              <ul>
                <li><span style="font-weight:bolder;">Viernes 21 de julio:</span> 1 coffee break mañana, 1 almuerzo, 1 coffee break tarde.</li>
                <li><span style="font-weight:bolder;">Sábado 22 de julio:</span> 1 coffee break mañana, parrillada bailable.</li>
                <li><span style="font-weight:bolder;">Material Didáctico</span>
                <li><span style="font-weight:bolder;">Derecho a participar de las rifas del cierre</span></li>
                  <ul>
                    <li><span style="font-weight:bolder;">Actividades sociales:</span>
                      <ul>
                        <li>Coctel de bienvenida el viernes 21 de julio</li>
                        <li>Parrillada bailable de clausura el sábado 22 de julio </li>
                      </ul>
                    </li>
                  </ul>   
                </li>
                <li>Certificado de participación</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <i style="font-size:52px; color:#F89500;" class="bi bi-award-fill"></i>
              <h3>BRONCE</h3>
              <h4>$50<span>Incluye:</span></h4>
              <ul>
                <li><span style="font-weight:bolder;">Viernes 21 de julio:</span> 1 coffee break mañana, 1 almuerzo, 1 coffee break tarde.</li>
                <li><span style="font-weight:bolder;">Sábado 22 de julio:</span> 1 coffee break mañana, parrillada bailable.</li>
                <li><span style="font-weight:bolder;">Material Didáctico</span>
                <li><span style="font-weight:bolder;">Derecho a participar de las rifas del cierre</span></li>
                  <ul>
                    <li><span style="font-weight:bolder;">Actividades sociales:</span>
                      <ul>
                        <li>Coctel de bienvenida el viernes 21 de julio</li>
                        <li>Parrillada bailable de clausura el sábado 22 de julio </li>
                      </ul>
                    </li>
                  </ul>   
                </li>
                <li>Certificado de participación</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <section class="contact section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form id="add" action="admin/datosformulario-actions.php" method="post" role="form" class="php-email-form-2" >
              <h2 style="text-align:center;">¿Desea inscribirse?</h2 >
              <p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido:" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email:" required>
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono:" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <div>
                    <select class="form-control" name="participacion">
                      <option selected>Tipo de inscripción:</option>
                      <option value="Miembros CIT y estudiantes activos">Miembros CIT y estudiantes activos</option>
                      <option value="Profesionales de otras áreas (2 días)">Profesionales de otras áreas (2 días)</option>
                      <option value="Miembros CIT asistencia 1 solo día">Miembros CIT asistencia 1 solo día</option>
                      <option value="Profesionales de otras áreas (1 día)">Profesionales de otras áreas (1 día)</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="carnet" class="form-control" id="carnet" placeholder="Carné:" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control" name="formapago">
                      <option selected>Tipo de pago:</option>
                      <option value="Sinpe">Sinpe</option>
                      <option value="Transferencia">Transferencia</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa:" required>
                </div>
              </div>

               <div class="row mt-3">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="pais" id="pais" placeholder="País:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control" name="fecha">
                      <option selected>Fecha:</option>
                      <option value="24/7/23">24/7/23</option>
                      <option value="28/7/23">28/7/23</option>
                      <option value="Todas">Todas</option>
                    </select>
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje:" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Enviando..</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensaje ha sido enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
              <input type="hidden" name="action" id="action" value="add">
            </form>
          </div>
        </div>
      </div>
    </section>

   

</main><!-- End #main -->