<?php login(''); get_header(); ?>

<section>
    <?php get_template_part('partials/menu/sidebar__navbar'); ?>

    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top'); ?>
      <div class="sidebar__content--content ">
        <div class="dashboard-content padding-rl">
       		<div class="alimentacion-content">
       			<div class="main-alimentacion__content ">
       				<nav class="d-none tab-alimentacion  <?php if(is_page(31)){echo 'tab-alimentacion__display';} ?>">
			          <div class="nav nav-tabs" id="nav-tab" role="tablist">
			            <a class="nav-item nav-link active" id="tab-comida" data-toggle="tab" href="#comida-tab" role="tab" aria-controls="comida-tab" aria-selected="true">Comidas</a>
			            <a class="nav-item nav-link" id="tab-suplemento" data-toggle="tab" href="#suplemento-tab" role="tab" aria-controls="suplemento-tab" aria-selected="false">Suplementación</a>
			          </div>
			        </nav>
					<div class="tab-content" id="nav-tabContent">
					  <div class="tab-pane fade show active" id="comida-tab" role="tabpanel" aria-labelledby="tab-comida">
					  	<div class="banner-alimentacion ">
					  		<div class="banner-alimentacion__img">
					  			<img src="<?php echo get_template_directory_uri();?>/assets/img/banner-alimentacion.jpg" alt="">
					  		</div>
					  		<div class="banner-alimentacion__text">
					  			<div class="banner-alimentacion__text--etiqueta">
					  				ETAPA 1 - MES 1 <i class="fa fa-check-circle" aria-hidden="true"></i>
					  			</div>
					  			<div class="banner-alimentacion__text--text">
					  				<p>CONDICIÓN GT</p>
					  				<span>COMIDAS Semanas 1-2</span>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="menu-alimentacion d-none d-lg-block">
					  		<div class="menu-alimentacion__comida">
					  			<div class="menu-alimentacion__comida--content">
						  			<div class="menu-comida__title">
						  				<p>Comida 1</p>
						  			</div>
						  			<div class="menu-comida__content">
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>PROTEINAS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>CARBOHIDRATOS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>EXTRAS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>SNACKS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-4.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Frutas</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>Fruta de tu preferencia (platano=01 mediano, papaya=200 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
								</div>
								<div class="menu-alimentacion__comida--content">
						  			<div class="menu-comida__title">
						  				<p>Comida 2</p>
						  			</div>
						  			<div class="menu-comida__content">
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>PROTEINAS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>CARBOHIDRATOS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>EXTRAS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>SNACKS</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-4.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Frutas</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>Fruta de tu preferencia (platano=01 mediano, papaya=200 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
									</div>
					  		</div>
					  		<div class="menu-alimentacion__content">
					  			<div class="menu-content__notas">
					  				<div class="menu-notas__title">
					  					<img src="<?php echo get_template_directory_uri();?>/assets/img/notes-coach.png" alt="">Notas del coach
					  				</div>
										<div class="menu-notas__items">
											<ul>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Haces la combinacion que gustes eligiendo un solo tipo de alimento por categoría.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de los carbohidratos es cocido, menos la avena.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de las carnes es crudo.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Puedes hacer una comida libre a la semana.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Tomas mínimo 2 litros de agua al día sin contar lo del entrenamiento.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Los huevos pueden prepararse tipo panqueques (si lo combinas con avena) o revueltos con verduras.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Las carnes se pueden preparar a la plancha o tipo guisos o estofados, condimentando a tu gusto pero la sal y eceite moderado.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Reemplazar el azúcar por la stevia.</p></li>
											</ul>
										</div>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="menu-alimentacion-responsive d-block d-lg-none">
					  		<div class="menu-alimentacion__content">
					  			<div class="menu-content__notas">
					  				<button class="menu-notas__title" data-toggle="collapse" data-target="#collapseAlimentacion" aria-expanded="true" aria-controls="collapseAlimentacion">
					  					<img src="<?php echo get_template_directory_uri();?>/assets/img/notes-coach.png" alt="">Notas del coach <i class="fa fa-angle-down" aria-hidden="true"></i>
					  				</button>
										<div class="menu-notas__items collapse" id="collapseAlimentacion" >
											<ul>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Haces la combinacion que gustes eligiendo un solo tipo de alimento por categoría.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de los carbohidratos es cocido, menos la avena.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de las carnes es crudo.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Puedes hacer una comida libre a la semana.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Tomas mínimo 2 litros de agua al día sin contar lo del entrenamiento.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Los huevos pueden prepararse tipo panqueques (si lo combinas con avena) o revueltos con verduras.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Las carnes se pueden preparar a la plancha o tipo guisos o estofados, condimentando a tu gusto pero la sal y eceite moderado.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Reemplazar el azúcar por la stevia.</p></li>
											</ul>
										</div>
					  			</div>
					  		</div>
					  		<div class="menu-alimentacion__comida-r">
					  			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
								    	<div class="comida-content__menu--title">
					  						<p>PROTEINAS</p>
					  					</div>
								    </a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
								    	<div class="comida-content__menu--title">
					  						<p>CARBOHIDRATOS</p>
					  					</div>
								    </a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
								    	<div class="comida-content__menu--title">
					  						<p>EXTRAS</p>
					  					</div>
								    </a>
								  </li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
								  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								  	<div class="comida-content__menu">
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
								  </div>
								  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								  	<div class="comida-content__menu">
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
								  </div>
								  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								  	<div class="comida-content__menu">
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Filete de atún</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>1 Lata</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-2.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Pechuga de pollo</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/bistec.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Bistec</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>150 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
								  </div>
								</div>
								<div class="comida-content__menu">
				  					<div class="comida-content__menu--title">
				  						<p>SNACKS</p>
				  					</div>
				  					<div class="menu-comida__item">
				  						<div class="menu-comida__item--img">
				  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-4.jpg" alt="">
				  						</div>
				  						<div class="menu-comida__item--text">
				  							<div class="menu-comida__item--name">
				  								<p>Frutas</p>
				  							</div>
				  							<div class="menu-comida__item--cantidad">
				  								<p>Fruta de tu preferencia (platano=01 mediano, papaya=200 gr</p>
				  							</div>
				  						</div>
				  					</div>
				  				</div>
					  		</div>		
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="suplemento-tab" role="tabpanel" aria-labelledby="tab-suplemento">
					  	<div class="banner-alimentacion">
					  		<div class="banner-alimentacion__img">
					  			<img src="<?php echo get_template_directory_uri();?>/assets/img/banner-suplementacion.jpg" alt="">
					  		</div>
					  		<div class="banner-alimentacion__text">
					  			<div class="banner-alimentacion__text--etiqueta">
					  				ETAPA 1 - MES 1 <i class="fa fa-check-circle" aria-hidden="true"></i>
					  			</div>
					  			<div class="banner-alimentacion__text--text">
					  				<p>CONDICIÓN GT</p>
					  				<span>SUPLEMENTACIÓN Semanas 1-2</span>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="menu-alimentacion d-none d-lg-block">
					  		<div class="menu-alimentacion__comida">
					  			<div class="menu-alimentacion__comida--content">
						  			<div class="menu-comida__title">
						  				<p>Mañana</p>
						  			</div>
						  			<div class="menu-comida__content">
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>ANTES DEL DESAYUNO</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Creatina</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>5 gr</p>
						  							</div>
						  						</div>
						  				</div>
						  			</div>
									</div>
									<div class="menu-alimentacion__comida--content">
						  			<div class="menu-comida__title">
						  				<p>Entrenamiento</p>
						  			</div>
						  			<div class="menu-comida__content">
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>PRE-ENTRENO</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Creatina</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>5 gr</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="comida-content__menu">
						  					<div class="comida-content__menu--title">
						  						<p>POST ENTRENO</p>
						  					</div>
						  					<div class="menu-comida__item">
						  						<div class="menu-comida__item--img">
						  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
						  						</div>
						  						<div class="menu-comida__item--text">
						  							<div class="menu-comida__item--name">
						  								<p>Whey protein</p>
						  							</div>
						  							<div class="menu-comida__item--cantidad">
						  								<p>2 scoops</p>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  			</div>

									</div>
									</div>
					  		</div>
					  		<div class="menu-alimentacion__content">
					  			<div class="menu-content__notas">
					  				<div class="menu-notas__title">
					  					<img src="<?php echo get_template_directory_uri();?>/assets/img/notes-coach.png" alt="">Notas del coach
					  				</div>
										<div class="menu-notas__items">
											<ul>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Haces la combinacion que gustes eligiendo un solo tipo de alimento por categoría.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de los carbohidratos es cocido, menos la avena.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de las carnes es crudo.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Puedes hacer una comida libre a la semana.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Tomas mínimo 2 litros de agua al día sin contar lo del entrenamiento.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Los huevos pueden prepararse tipo panqueques (si lo combinas con avena) o revueltos con verduras.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Las carnes se pueden preparar a la plancha o tipo guisos o estofados, condimentando a tu gusto pero la sal y eceite moderado.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Reemplazar el azúcar por la stevia.</p></li>
											</ul>
										</div>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="menu-alimentacion-responsive d-block d-lg-none">
					  		<div class="menu-alimentacion__content">
					  			<div class="menu-content__notas">
					  				<button class="menu-notas__title" data-toggle="collapse" data-target="#collapseAlimentacion" aria-expanded="true" aria-controls="collapseAlimentacion">
					  					<img src="<?php echo get_template_directory_uri();?>/assets/img/notes-coach.png" alt="">Notas del coach <i class="fa fa-angle-down" aria-hidden="true"></i>
					  				</button>
										<div class="menu-notas__items collapse" id="collapseAlimentacion" >
											<ul>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Haces la combinacion que gustes eligiendo un solo tipo de alimento por categoría.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de los carbohidratos es cocido, menos la avena.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>El peso de las carnes es crudo.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Puedes hacer una comida libre a la semana.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Tomas mínimo 2 litros de agua al día sin contar lo del entrenamiento.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Los huevos pueden prepararse tipo panqueques (si lo combinas con avena) o revueltos con verduras.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Las carnes se pueden preparar a la plancha o tipo guisos o estofados, condimentando a tu gusto pero la sal y eceite moderado.</p></li>
												<li><i class="fa fa-check" aria-hidden="true"></i><p>Reemplazar el azúcar por la stevia.</p></li>
											</ul>
										</div>
					  			</div>
					  		</div>
					  		<div class="menu-alimentacion__comida-r">
					  			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
								    	<div class="comida-content__menu--title">
					  						<p>ANTES DEL DESAYUNO</p>
					  					</div>
								    </a>
								  </li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
								  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								  	<div class="comida-content__menu">
					  					<div class="menu-comida__item">
					  						<div class="menu-comida__item--img">
					  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
					  						</div>
					  						<div class="menu-comida__item--text">
					  							<div class="menu-comida__item--name">
					  								<p>Creatina</p>
					  							</div>
					  							<div class="menu-comida__item--cantidad">
					  								<p>5 gr</p>
					  							</div>
					  						</div>
						  				</div>
						  			</div>
								  </div>
								</div>
								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="pills-homeR-tab" data-toggle="pill" href="#pills-homeR" role="tab" aria-controls="pills-homeR" aria-selected="true">
								    	<div class="comida-content__menu--title">
					  						<p>PRE-ENTRENO</p>
					  					</div>
								    </a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
								    	<div class="comida-content__menu--title">
					  						<p>POST-ENTRENO</p>
					  					</div>
								    </a>
								  </li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
								  <div class="tab-pane fade show active" id="pills-homeR" role="tabpanel" aria-labelledby="pills-homeR-tab">
								  	<div class="comida-content__menu">
					  					<div class="menu-comida__item">
					  						<div class="menu-comida__item--img">
					  							<img src="<?php echo get_template_directory_uri();?>/assets/img/comida-3.jpg" alt="">
					  						</div>
					  						<div class="menu-comida__item--text">
					  							<div class="menu-comida__item--name">
					  								<p>Creatina</p>
					  							</div>
					  							<div class="menu-comida__item--cantidad">
					  								<p>5 gr</p>
					  							</div>
					  						</div>
						  				</div>
						  			</div>
								  </div>
								</div>
					  		</div>		
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