<div style="width:100%;height:406px;background-size:cover;background-position:center;background-repeat:no-repeat; background:url('assets/img/inner-bg.jpg');">
      <div style="padding-top:200px;">
        <h1 style="text-align:center;color:white;font-weight:bolder;">Contacto</h1>
         <p style="text-align:center;"><a style="color:white;" href="<?=base_url?>">Inicio</a> - <span style="text-align:center;color:#F8C300;">Contacto</span></p>
      </div>
</div>

<!-- contact section -->
	<div id="contact" class="contact_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div>
						<h2 style="color:black;">
							¡Enviar un mensaje!
						</h2>
						<p style="color:black;">
							Todas sus consultas o dudas son importantes para nosotros.
							Déjenos su información y con gusto nos pondremos en
							contacto lo antes posible.
						</p>
					</div>
					<div class="form_container contact-form">
						<form id="formInfo" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div>
										<input name="name" type="text" id="form3Example1" placeholder="Nombre:" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div>
										<input name="phone" type="text" id="form3Example1" type="text" placeholder="Teléfono:" required />
									</div>
								</div>
								<div class="col-lg-12">
									<input name="email" type="email" id="form3Example1" type="email" placeholder="Email:" required />
								</div>
								<div class="col-lg-12">
									<input name="message" type="text" id="form3Example1" type="text" class="message-box" placeholder="Mensaje:" required />
								</div>
								<div class="col-lg-6">
									<button id="enviarInfo" type="submit">
										ENVIAR MENSAJE
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact section -->