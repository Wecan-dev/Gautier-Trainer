<?php login(''); get_header(); ?>

<section>
  <div class="navabar__grub">
    <div class="sidebar__content">
      <div class="sidebar__content--top sidebar__routine d-none d-lg-flex">
        <div class="title-sidebar__top">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-gautier-desktop.png" alt=""> <p>Programas</p>
        </div>
        <div class="sidebar-top__content">
          <div class="user-sidebar__top">
            <div class="user-sidebar__top--img">
              <img src="#" alt="">
            </div>
            <div class="user-sidebar__top--text">
              <div class="dropdown">
                <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Samuel95 <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?php bloginfo('url'); ?>/perfil">Mi cuenta</a>
                  <a class="dropdown-item" href="<?php echo wp_logout_url( home_url()); ?>">Cerrar sesión</a>
                </div>
              </div>
            </div>  
          </div>
          <div class="notifi-sidebar__top">
            <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar__content--content ">
      	<div class="workout-routine">
      		<div class="subtitle-routine d-none d-md-block">
      			<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Mi plan personalizado</a>
      		</div>
      		<div class="routine-content padding-rl">
      			<div class="routine-content__video">
      				<div class="routine-content__video--video d-none d-md-block">
      					<img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg " alt="">
      				</div>
      				<div class="routine-content__video--btn">
      					<a class="btn-completedo" href="#">Completed</a>
      					<a class="btn-descartar" href="#">Descartar</a>
      				</div>
      			</div>
      			<div class="routine-content__content ">
      				<div class="title-routine__programa d-none d-md-block">
      					<p>DÍA 1 - Torso HIT</p>
      				</div>
      				<div class="slider-dashboard__cat d-none d-md-flex">
                      <p>Personalizado <i class="fa fa-check-circle" aria-hidden="true"></i></p>
                      <p>Intensidad 2</p>
                    </div>
                    <div class="collapse-routine__text d-none d-md-block">
                    	<p>
                    		Lorem ipsum dolor sit, amet consectetur adipisicing, elit...
						  <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						    Leer más <i class="fa fa-angle-down" aria-hidden="true"></i>
						  </a>
						</p>
						<div class="collapse" id="collapseExample">
						  <div class="card card-body">
						    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Consequuntur quibusdam maiores alias quidem numquam mollitia velit doloribus dolores, facere iure delectus cupiditate inventore sed, accusamus quia. Tempora, nobis dignissimos aperiam!
						  </div>
						</div>
                    </div>
                    <div class="table-routine">
                    	<div class="tableWorkout-routine">
                    		<a data-toggle="modal" data-target="#exampleModal" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p>1</p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    					<div class="play-video__routine"><i class="fa fa-play" aria-hidden="true"></i></div>
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
						</div>
						<div class="tableWorkout-routine">
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p>2</p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
						</div>
						<div class="tableWorkout-routine">
							<div class="title-table__routine">
								<p style="color: #f3bb25;">biserie</p>
							</div>
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p>3</p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
						</div>
						<div class="tableWorkout-routine">
							<div class="title-table__routine">
								<p style="color: #d62220;">superserie</p>
							</div>
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p>4</p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p></p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
                    		<a href="#" class="table-routine__content">
                    			<div class="table-routine__number">
                    				<p></p>
                    			</div>
                    			<div class="table-routine__video">
                    				<div class="table-routine__video--video">
                    					<img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.jpg" alt="">
                    				</div>
                    				<div class="table-routine__video--text">
                    					<h4>Dominadas</h4>
                    					<p>Controlar cada repetición sin llegar al fallo</p>
                    				</div>
                    			</div>
                    			<div class="table-routine__reps">
                    				<p>6-10</p>
                    				<span>REPS</span>
                    			</div>
                    			<div class="table-routine__sets">
                    				<p>4</p>
                    				<span>SETS</span>
                    			</div>
                    			<div class="table-routine__rest">
                    				<p>3'</p>
                    				<span>REST</span>
                    			</div>
                    		</a>
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