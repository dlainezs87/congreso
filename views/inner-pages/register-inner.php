<main id="main">

    <div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Registro</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Registro</span></p>
      </div>
    </div>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formulario de Registro</h2>
          <p>¡No se quede sin su espacio! <span style="color:#F8C300;">¡INSCRÍBASE YA!</span></p>
        </div>

        <div class="row align-items-center">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Tipo de cliente</h3>
              <h4>$0<span>Incluye:</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <!--<a href="#" class="get-started-btn">Get Started</a>-->
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Tipo de cliente</h3>
              <h4>$29<span>Incluye:</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Tipo de cliente</h3>
              <h4>$49<span>Incluye:</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                <div class="col-md-6 form-group">
                  <input type="text" name="apellido" class="form-control" id="apellido2" placeholder="Segundo Apellido:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email:" required>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <div>
                    <select class="form-control">
                      <option selected>Tipo de inscripción:</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="carne" class="form-control" id="carne" placeholder="Carné:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control">
                      <option selected>Tipo de pago:</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
              </div>

               <div class="row mt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="pais" id="pais" placeholder="País:" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje:" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

   

</main><!-- End #main -->