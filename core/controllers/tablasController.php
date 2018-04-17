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
      include(HTML_DIR.'tablas/all.php');

    echo '</section>';
    }
    else
    {
       include(HTML_DIR.'error/login.php');
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<?php
include(HTML_DIR.'overall/footer.php');
?>
