<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>UN</b>AN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>UNAN-</b>LEÓN</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
        
          <!-- Tasks Menu -->
         
          <!-- User Account Menu -->
    <?php
    if(isset($_SESSION['app_id']))
    {
      
      echo '<li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <!-- The user image in the navbar-->
              <img src="'.$users[$_SESSION['app_id']]['imagen'].'" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">'.strtoupper($users[$_SESSION['app_id']]['user']).'</span>
             

            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="'.$users[$_SESSION['app_id']]['imagen'].'" class="img-circle" alt="User Image">
  
                <p>'.
                 strtoupper($users[$_SESSION['app_id']]['user'])
                  .' <small>Categoría de Usuario </small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?view=close" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>';
    }
    else
    {
      
    }
  ?>


          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
           
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
     <?php if(isset($_SESSION['app_id']))
    {
      
      echo '<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="'.$users[$_SESSION['app_id']]['imagen'].'" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>'.strtoupper($users[$_SESSION['app_id']]['user']).'</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FUNCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview"><a href="?view=graficos"><i class="fa fa-link"></i> <span>GRAFICOS</span></a></li>
        <li><a href="?view=tablas"><i class="fa fa-table"></i> <span>TABLAS</span></a></li>
         <li><a href="?view=generar"><i class="fa fa-table"></i> <span>GENERAR</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>';}
else{
  echo 'Por favor conectese';
}
?>


<?php
if (!isset($_SESSION['app_id'])) {
  include(HTML_DIR.'public/login.html');
    include(HTML_DIR.'public/reg.html');
      include(HTML_DIR.'public/reglostpass.html');
}

?>