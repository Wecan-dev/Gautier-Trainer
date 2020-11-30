<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gautier Trainer</title>

  <!-- Behavioral Meta Data -->
  <meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#24272c">
  
  <!-- Google Meta Data -->
  <meta name='description', content=''>
  <meta name='keywords', content=''>
  <meta name="robots" content="index, follow">

  <!-- Blog Meta Data -->
  <meta name="dc.language" content="es">
  <meta name="dc.source" content="">
  <meta itemprop="url" content="">

  <!-- Twitter Card Meta Data -->
  <meta content='summary' name='twitter:card'>
  <meta content='Pro-gress' name='twitter:site'>
  <meta content='Pro-gress' name='twitter:title'>
  <meta content='Pro-gress' name='twitter:description'>

  <!-- Open Graph Meta Data -->
  <meta content='website' property='og:type'>
  <meta content='<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png' property='og:image'>
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta content='' property='og:description'>
  <meta property="og:type" content="">
  <meta property="og:image" content="">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.css">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
</head>
<body>

<header class="d-flex d-lg-none <?php if(is_page(25)){echo 'header-login';} ?>">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-gautier-movil.png" alt=""></a>
    <div class="title-responsive">
      <p>Dashboard</p>
    </div>
    <div class="notifi-sidebar__top">
      <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-home.png" alt="">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/workout" ><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-dumbell.png" alt="">Entrenamiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/alimentacion"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-alimentacion.png" alt="">Alimentación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-reports.png" alt="">Reportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-calendar.png" alt="">Calendario</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/pro-videos"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-video.png" alt="">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-library.png" alt="">Exercises List</a>
        </li>
      </ul>
      <div class="options-navbar">
        <div class="options-navbar__user">
          <div class="user-sidebar__top--img">
            <img src="#" alt=""> 
          </div>
          <p>Samuel56</p>
        </div>
        <div class="options-navbar__soport">
          <div class="btn-soporte">
            <a href="#">Soporte <i class="fa fa-info-circle" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class=" <?php if(is_page(27)){echo 'routine-video__respon d-block d-md-none';} ?> routine-video__none">
      <div class="subtitle-routine">
        <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Mi plan personalizado</a>
      </div>
      <div class="routine-content__video">
      <div class="routine-content__video--video">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg " alt="">
      </div>
    </div>
    <div class="title-routine__programa">
      <p>DÍA 1 - Push ups</p>
    </div>
    <div class="slider-dashboard__cat">
        <p>Personalizada <i class="fa fa-check-circle" aria-hidden="true"></i></p>
        <p>Intensidad 2</p>
      </div>
      <div class="collapse-routine__text">
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
  </div>
  </nav>

</header>
