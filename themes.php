<?php session_start();?>
<?php
if(isset($_GET["theme"]))
{
	$theme = $_GET["theme"];

	if($theme == "main" || $theme == "dark")
	{
		$_SESSION["theme"] = $theme;
	}
}
?>
