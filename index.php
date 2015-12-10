<?php
	require_once("layouts/header.php");
	if (!isset($_GET['action']) || $_GET['action'] == 'index') {
		require_once("layouts/left_menu.php");
		require_once("view/index.php");
		require_once("layouts/footer.php");
	}
	else {
		if (isset($_GET['action']) && file_exists('controller/'.$_GET['action'].'.php'))
			require_once('controller/'.$_GET['action'].'.php');
		else{
			if (isset($_GET['action']) && file_exists('view/'.$_GET['action'].'.php'))
				require_once('view/'.$_GET['action'].'.php');
			else {
				require_once("layouts/left_menu.php");
				require_once("view/index.php");
			}
			require_once("layouts/footer.php");
		}
	}
?>