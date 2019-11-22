<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$objMain->Query("update pu_users set btc=btc+0.00000100 where id=".$id);

	$data[] = array(
			'status' 			=>	'success'
		);		

$res = array ("res" => $data);
echo json_encode($res);
?>