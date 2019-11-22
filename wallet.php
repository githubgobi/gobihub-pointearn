<?php include("lib/common.php"); extract($_REQUEST); $data= array();
$inr=$objMain->convertcurrency('USD','INR',1);

$euro=$objMain->convertcurrency('USD','EUR',1);
$btc=$objMain->getRow("select * from btc");
$res=$objMain->getRow("select * from pu_users where id='".$id."'");
if($res['btc']>0.05000000) $wallet='yes'; else $wallet='no';
if(!empty($res)){
	$data[] = array(
			'btc' 			=>	number_format($res['btc'],8),
			'inr'			=> $btc['btc_value']*$inr,
			'usd'			=> $btc['btc_value'],
			'euro'			=> $btc['btc_value']*$euro,
			'wallet_button'			=> $wallet
		);		
		
} 

$res = array ("res" => $data);
echo json_encode($res);
?>