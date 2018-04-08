<?php
  include(HTML_DIR.'overall/header.php');
  include(HTML_DIR.'overall/topnav.php');
?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php
    if(isset($_SESSION['app_id']))
    {
      include(HTML_DIR.'generar/generar.php');

    echo '</section>';
    }
    else
    {
      echo '<h1>
        POR FAVOR INICIE SESSIÓN
        <small>Usuario No Registrado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-graph"></i>Gráficos</a></li>
        <li class="active">Sensor MD</li>
      </ol>
       </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#registro">
                Iniciar Sesión
              </button>

    </section>';
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php
include(HTML_DIR.'overall/footer.php');
?>
