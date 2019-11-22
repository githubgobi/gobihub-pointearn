<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$res=$objMain->getRow("select * from pu_users where reffcode='".$reffcode."'");
if(!empty($res)){
	$objMain->Query("update pu_users set reffcode='".$reffcode."' where id=".$id);
	$data[] = array(
			'status' 			=>	'success'
		);				
} else {
	$data[] = array(
			'status' 			=>	'failure'
		);
}

$res = array ("res" => $data);
echo json_encode($res);
?>