<?php
 if(isset($_SESSION['app_id']))
    {
         if(isset($_REQUEST['mode']))
				{
				  switch (isset($_REQUEST['mode']) ? $_REQUEST['mode'] : null) {
            case 'save':
            include('core/models/users/userSave.php');
            break;
            case 'userGet':
            include('core/models/users/userGet.php');
            break;
            case 'getAll':
            include('core/models/users/getall.php');
            break;
            case 'delete':
            include('core/models/users/userDelete.php');
            break;
				    default:
				      header('location:index.php?view=users');

				  }
				}
				else
				{
          if($users[$_SESSION['app_id']]['permisos']==1)
          {
  					include_once(HTML_DIR.'overall/header.php');
  					include_once(HTML_DIR.'overall/topnav.php');

             echo '<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">';

  					include_once(HTML_DIR.'users/all.php');
  					include_once(HTML_DIR.'overall/footer.php');
          }
          else {

               header('location:index.php');
          }
				}
    }

?>
