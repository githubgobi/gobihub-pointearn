<?php include("lib/common.php"); extract($_REQUEST); $data= array();
 
$res=$objMain->getRow("select * from pu_users where id='".$id."'");
if(!empty($res)){
	$data[] = array(
			'reffcode' 			=>	$res['reffcode'],
			'percentage'			=> '5%'
		);		
		
} 

$res = array ("res" => $data);
echo json_encode($res);
?>