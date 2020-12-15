<?php login(''); get_header(); ?>

<section>
    <?php get_template_part('partials/menu/sidebar__navbar'); ?>

    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top'); ?>
      <div class="sidebar__content--content ">
        <div class="dashboard-content padding-rl">
       		<div class="perfil-content">
       			<div class="main-alimentacion__content ">
				  	<div class="banner-perfil">
				  		<div class="banner-perfil__img">
				  			<img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg" alt="">
				  		</div>
				  		<div class="banner-perfil__text">
				  			<div class="banner-perfil__title">
				  				<div>
				  					Samuel Jara
				  					<p class="banner-alimentacion__text--etiqueta">
						  				PREMIUM <i class="fa fa-check-circle" aria-hidden="true"></i>
						  			</p>
				  				</div>
				  			</div>
				  			<div class="banner-perfil__date">
				  				<p>@samuel56</p> <span>Unido desde Agosto 2020</span>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="menu-perfil">
				  		<div class="menu-perfil__content">
				  			<div class="menu-perfil__content--title">
				  				<p>Mis datos</p>
				  				<a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-edit.png" alt=""></a>
				  			</div>
				  			<div class="menu-perfil__content--datos">
				  				<div class="perfil-content__datos--title">
				  					<p>Información General</p>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>NOMBRES</p>
				  					<span>Hebert Samuel</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>APELLIDOS</p>
				  					<span>Jara Reyes</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>GÉNERO</p>
				  					<span>Másculino</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>FECHA DE NACIMIENTO</p>
				  					<span>06-02-98</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>PAÍS</p>
				  					<span>PERU</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>ESTADO</p>
				  					<span>LA LIBERTAD</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>CIUDAD</p>
				  					<span>TRUJILLO</span>
				  				</div>
				  			</div>
				  			<div class="menu-perfil__content--datos">
				  				<div class="perfil-content__datos--title">
				  					<p>Cuenta</p>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>USUARIO</p>
				  					<span>samuel6798</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>E-MAIL</p>
				  					<span>hola@samustudio.design</span>
				  				</div>
				  				<div class="perfil-content__datos--content">
				  					<p>CONTRASEÑA</p>
				  					<span>*********</span>
				  				</div>
				  			</div>
				  		</div>
				  		<div class="menu-perfil__options">
				  			<div class="menu-perfil__options--title">
				  				<p>Membresía</p>
				  			</div>
				  			<div class="menu-perfil__options--barra">
				  				<span>Se renueva el 05/12/20</span>
				  			</div>
				  			<div class="menu-perfil__options--btnPago">
				  				<a href="#">Actualizar método de pago</a>
				  			</div>
				  			<div class="menu-perfil__options--btnCancelar">
				  				<a href="#">Cancelar suscripción</a>
				  			</div>
				  		</div>
				  	</div>
       			</div>
       		</div>
        </div>
      </div>
    </div>
  </div>

</section>



<?php get_footer(); ?>