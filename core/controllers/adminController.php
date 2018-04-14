<?php
if(isset($_SESSION['app_id']))
{
		include_once(HTML_DIR.'overall/header.php');
		include_once(HTML_DIR.'index/index.php');
		include_once(HTML_DIR.'overall/footer.php');
}
else
{
	 include_once(HTML_DIR.'error/login.php');
}

?>
