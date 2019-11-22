<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$res=$objMain->getRow("select * from pu_users where id='".$id."'");
if(!empty($res)){
	$data[] = array(
			'btc' 			=>	$res['btc'],
			'inr'			=> '1200',
			'usd'			=> '1200',
			'euro'			=> '1200'
		);		
		
} 

$res = array ("res" => $data);
echo json_encode($res);
?>