<?php
if(isset($_REQUEST['mode']))
{
  switch (isset($_REQUEST['mode']) ? $_REQUEST['mode'] : null) {
    case 'generar':
    include('core/models/lecturas/generar.php');
    break;
   case 'insert':
   include('core/models/lecturas/insert.php');
   break;
   case 'ultimos':
    include('core/models/lecturas/lastmeasuresall.php');
    break;
    case 'ultimosdatos':
     include('core/models/lecturas/ultimos.php');
     break;
   default:
     header('location:index.php?view=users');

 }
}

?>
