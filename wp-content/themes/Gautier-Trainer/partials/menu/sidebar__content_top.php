      <div class="sidebar__content--top d-none d-lg-flex">
        <div class="title-sidebar__top">
          <p>Dashboard</p>
        </div>
        <div class="sidebar-top__content">
          <div class="user-sidebar__top">
            <div class="user-sidebar__top--img">
              <img src="#" alt="">
            </div>
            <div class="user-sidebar__top--text">
              <div class="dropdown">
                <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo wp_get_current_user()->user_login;?> <i class="fa fa-angle-down" aria-hidden="true"></i>
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
        <nav class="d-none tab-alimentacion  <?php if(is_page(31)){echo 'tab-alimentacion__display';} ?>">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="tab-comida" data-toggle="tab" href="#comida-tab" role="tab" aria-controls="comida-tab" aria-selected="true">Comidas</a>
            <a class="nav-item nav-link" id="tab-suplemento" data-toggle="tab" href="#suplemento-tab" role="tab" aria-controls="suplemento-tab" aria-selected="false">Suplementación</a>
          </div>
        </nav>
      </div>