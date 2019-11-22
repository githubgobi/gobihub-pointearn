<?php include("lib/common.php"); extract($_REQUEST); $data= array();

$resPromoUser=$objMain->getRow("select promocode from promocode_users where id=".$id);

$res=$objMain->getRow("select id,promo_code from promocode where id NOT IN ($resPromoUser)");
if(count($res)==0){
	$data[] = array(
			'code' 			=>	'TRYAGAIN'
		);		
}else{
	$data[] = array(
			'code' 			=>	$res['promo_code']
		);
}
	
$res = array ("res" => $data);
echo json_encode($res);
?>