<?php
	include("../../public/common/config.php");
	include("../public/safe.php");
	$id=$_GET['id'];
	$sql="UPDATE navigation SET state='1' WHERE id='$id'";
	$is=$db->query($sql);
	if($is)
	{
		echo "<script>location.href='shownav.php';</script>";
	}
?>